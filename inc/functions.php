<?


function  varHardtest($varname)
{                             
   if (!isset($varname)) header("Location: 404.html");
   if (!is_numeric($varname)) header("Location: 404.html");
   if ($varname<0) header("Location: 404.html");                    
}                   
        
function  varLitetest($varname)
{                             
   if ($id)
   {
     if (!is_numeric($varname)) header("Location: 404.html");
     if ($varname<0) header("Location: 404.html");                    
   }
}          


function  DevideFile($filename,&$name,&$ext)
{
  $p=strrpos($filename,".");
  $name=substr($filename,0,$p);
  $ext=substr($filename,$p+1,strlen($filename)-$p);
}

function ConvertDate($dateval,$delim="-",$is_full=false)
{
  if (!$is_full) $a=10;else $a=16;
  if (strlen($dateval)>$a) $dateval=substr($dateval,0,$a);
  $chunks=explode("-",$dateval);
  $tim=explode(" ",$chunks[2]);
  $res=$tim[0].$delim.$chunks[1].$delim.$chunks[0];
  if ($is_full) $res.=" ".$tim[1];
  return $res;
}


function Show($val)
{
  if (trim($val)=="") return "&nbsp"; else return $val;
}

//предвыводная обработка псевдостатики
function prepare($st)
{
  global $path;
  $st=str_replace("../im","im",$st);
  $st=str_replace("../files","files",$st);
  return $st;
}

function getStatic($code,$lng="")
{
    global $PREFFIX;
    $res=mysql_query("select static_code,static_name$lng,static_text$lng from {$PREFFIX}_static where static_code=$code");
    list($s_c,$s_n,$s_t)=mysql_fetch_array($res);
    $s_t=str_replace("../im","im",$s_t);
    $a=array("code"=>$s_c,
             "name"=>$s_n,
             "text"=>prepare($s_t)
             );
    return $a;
}



function mime_type($fname)
{
  DevideFile($fname,$name,$ext);
  $f=fopen("inc/types.mime","r");
  while($st=fgets($f))
  {
    $s=substr($st,0,strlen($st)-2);
      $a=explode(" ",$s);
      if (in_array($ext,$a)) {fclose($f);return $a[0];}
  }
  fclose($f);
  return "application/octet-stream";
}

function fullBack($url="/")
{
    header("Location: $url");
    die();
}

//отправляет письмо с указанным текстом и темой на указанный адрес
//отправляет письмо с указанным текстом и темой на указанный адрес
function mailSend($email,$subj,$text,$from="",$replyto="",$bcc="")
{
global $adminemail,$adminname;
if(!$from) $from="$adminname <$adminemail>";
if(!$replyto) $replyto=$adminemail;
    $boundary = strtoupper(md5(uniqid(time())));
    $headers = "From: $from\nReply-To: $replyto\r\n";
if($bcc) $headers.="Bcc: $bcc\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: multipart/mixed; boundary=$boundary\r\n";

    $data= "This is a multi-part message in MIME format.\r\n\r\n";
    $data .= "--$boundary\n";
    $data .= "Content-Type: text/html; charset=windows-1251\n";
    $data .= "Content-Transfer-Encoding:base64\r\n\r\n";

    $ttext="<html><body>".stripslashes($text)."</body></html>";
    $ttext = chunk_split(base64_encode($ttext));

    $data .= "$ttext\r\n\r\n";
    mail($email,$subj,$data,$headers);
}

function GetCurrent($thisID,&$arr)
{
  global $PREFFIX;
  if($thisID==0) return;
  list($category_code,$category_name,$parent_id)=mysql_fetch_array(mysql_query("select category_code,category_name,category_parent from {$PREFFIX}_category where category_code=$thisID"));
  $arr[]=Array("code"=>$category_code,"name"=>$category_name,"parent"=>$parent_id);
  if($parent_id==0) return;
  GetCurrent($parent_id,$arr);
}

function GetDescendants($thisID,&$arr)
{
  global $PREFFIX;
              if(!$thisID) return;
            $query="select category_code,category_name,category_parent from {$PREFFIX}_category where category_parent=$thisID order by category_pos" or die("!!!");
            $res=mysql_query($query);
            $n_r=mysql_num_rows($res);
            if (!$n_r) return;
            while (list($category_c,$category_n,$category_p)=mysql_fetch_array($res))
            {
                $arr[]=Array("code"=>$category_c,"name"=>$category_n,"parent"=>$category_p);
              GetDescendants($category_c,$arr);
            }

return 0;
}

 function GetCart()
 {
   global $TOYUSER,$PREFFIX,$LIMIT_SUM;
   if (is_array($_SESSION['cart']))
   {
     if ($TOYUSER["code"]) $f="unit_regprice"; else $f="unit_price";
     $codes="0";
     foreach ($_SESSION['cart'] as $key=>$val) $codes.=",".$key;    
     $cartquery="select unit_code,$f from {$PREFFIX}_shopunit where unit_code in ($codes)";
     $r=mysql_query("$cartquery") or die("Error 198");
     while(list($unit_code,$price)=mysql_fetch_array($r))
     {$cnt+=$_SESSION['cart'][$unit_code];    $tot+=$_SESSION['cart'][$unit_code]*$price;  }
     
     return "В корзине: <span>".intval($cnt)." товаров</span><br/>На сумму: <span>".floatval($tot)." грн.</span>";
   }
   else return "В корзине: <span>0 товаров</span><br/>На сумму: <span>0 грн.</span>";
 }

function addhighslide($instr)
{
  $rez_text=$instr;
  $pic_text=$instr;
  while ($pic_text)
  {
     $pic_text=strstr($pic_text, "<img");
     if ($pic_text)
     {
        $picnamestr=strstr($pic_text, "static");
        $picnamestr=strtok($picnamestr, '"');
        $picnamestr=str_replace("small","",$picnamestr);

        $piccomment=strstr($pic_text, "alt");
        $piccomment=substr($piccomment,5);
        $piccomment=strtok($piccomment, '"');

        $picurl=strtok($pic_text, ">").">";
//        $pic_link="<table><tr><td><a href='images/".$picnamestr."' class='highslide'  onclick='return hs.expand(this)'>".$picurl."</a><div class='highslide-caption'>".$piccomment."</div></td></tr></table>";
        $pic_link="<table><tr><td><a href='images/".$picnamestr."' target=_blank class='highslide'  onclick='return hs.expand(this)'>".$picurl."</a></td></tr></table>";

        $rez_text=str_replace($picurl,$pic_link,$rez_text);
        $pic_text=substr($pic_text,4);
     }
  }
  return($rez_text);
}
  
  
function send_mime_mail($name_from, // имя отправителя
                        $email_from, // email отправителя
                        $name_to, // имя получателя
                        $email_to, // email получателя
                        $data_charset, // кодировка переданных данных
                        $send_charset, // кодировка письма
                        $subject, // тема письма
                        $body // текст письма
                        ) {
  $to = mime_header_encode($name_to, $data_charset, $send_charset)
                 . ' <' . $email_to . '>';
  $subject = mime_header_encode($subject, $data_charset, $send_charset);
  $from =  mime_header_encode($name_from, $data_charset, $send_charset)
                     .' <' . $email_from . '>';
  if($data_charset != $send_charset) {
    $body = iconv($data_charset, $send_charset, $body);
  }
  $headers = "From: $from\r\n";
  $headers .= "Content-type: text/html; charset=$send_charset\r\n";

  return mail($to, $subject, $body, $headers);
}

function mime_header_encode($str, $data_charset, $send_charset) {
  if($data_charset != $send_charset) {
    $str = iconv($data_charset, $send_charset, $str);
  }
  return '=?' . $send_charset . '?B?' . base64_encode($str) . '?=';
}
  
  

function GetFirstBigpic($pcode)
{
  global $PREFFIX;

            $picquery="select picbig from {$PREFFIX}_picture where page_code=$pcode order by picpos limit 1";
            $picres=mysql_query ($picquery) or die ("Не могу выбрать изображения. Ошибка в запросе. ");
            $num_pics=mysql_num_rows($picres);
            $picsmall="";
            if ($num_pics) 
            {
              list($picsmall)=mysql_fetch_array($picres);
              $picsmall="images/".$picsmall;
            }
  return($picsmall);
}   


function GetFirstSBigpic($pcode)
{
  global $PREFFIX;

            $picquery="select spicbig from {$PREFFIX}_spicture where spage_code=$pcode order by spicpos limit 1";
            $picres=mysql_query ($picquery) or die ("Не могу выбрать изображения. Ошибка в запросе. ");
            $num_pics=mysql_num_rows($picres);
            $picsmall="";
            if ($num_pics) 
            {
              list($picsmall)=mysql_fetch_array($picres);
              $picsmall="images/".$picsmall;
            }
  return($picsmall);
}   

                 
                 
function GetUnitGallery($pcode)
{
  global $PREFFIX;                                     
      
  $gallery="";
  $picquery="select picsmall,picbig,piccomment from {$PREFFIX}_picture where page_code=$pcode order by picpos limit 1,1000";
  $picres=mysql_query ($picquery) or die ("Не могу выбрать изображения. Ошибка в запросе.");
  $num_rows=mysql_num_rows($picres);
  if($num_rows)
  {
      $gallery="<div class=pagetextarea><center>";
      while(list($picsmall,$picbig,$piccomment)=mysql_fetch_array($picres))
      {
        if (strlen($piccomment)==0) $piccomment=$thisobj_name;
        $gallery=$gallery."
                <div class=unitgalleryitem>
                  <a class='highslide' onclick='return hs.expand(this)' href='images/$picbig' target=_blank><img src='images/$picsmall' border=0>
                     <div class=view>увеличить >></div>     
                  </a><div class='highslide-caption'>$piccomment</div>      
                </div>
        ";
      }
      $gallery=$gallery."</center></div>";

  } 
  
  return($gallery);
}


function getMenuParent($code)
{
    global $PREFFIX;
   
    $pres=mysql_query("select category_parent from {$PREFFIX}_shopcategory where category_code=$code");
    list($c_p)=mysql_fetch_array($pres);     
    
    if ($c_p==0) return $code;
    else getMenuParent($c_p); return $c_p;
}


function getShopParentList($code,$rezstr="")
{
    global $PREFFIX;
    
    $pres=mysql_query("select category_parent,category_name from {$PREFFIX}_shopcategory where category_code=$code");
    list($c_p,$c_n)=mysql_fetch_array($pres);
    if(strlen($c_n)>0) $rezstr=" >> <a href='catalog.php?id=$code'>$c_n</a>".$rezstr;

    if ($c_p!=0) $rezstr=getShopParentList($c_p,$rezstr);
    else $rezstr="<a href='$mainurl'>Каталог товаров</a> ".$rezstr;

    return $rezstr;
}
  
  
function getpicunitlist($category_code,$resultlist,$brand)
{                                                                       
    global $PREFFIX, $siterate, $sitediscount;
    
    if ($brand!=0) $tail=" and {$PREFFIX}_shopunit.brand_code=$brand ";
    else $tail="";

    $topunutquery="select unit_code,unit_name,unit_price,page_code,{$PREFFIX}_brands.brand_name,{$PREFFIX}_brands.brand_code,{$PREFFIX}_brands.brand_money 
                   from {$PREFFIX}_shopunit 
                     left join {$PREFFIX}_brands on ({$PREFFIX}_brands.brand_code={$PREFFIX}_shopunit.brand_code) 
                   where unit_active=1 and category_code=$category_code $tail
                   order by unit_pos";
    $topunutres=mysql_query ($topunutquery) or die ("Не могу выбрать топ-предметы. Ошибка в запросе.");
    $num_topunuts=mysql_num_rows($topunutres);
    while(list($unit_code,$unit_name,$unit_price,$page_code,$brand_name,$brand_code,$brand_money)=mysql_fetch_array($topunutres))
    {
       $unit_link="unit.php?id=$unit_code";  
       $unit_cost=getcost($unit_price,$brand_money,$sitediscount);
       $unit_cost=sprintf("%01.2f", $unit_cost);
       
       $unit_pic=GetFirstBigPic($page_code);
       
       if (strlen($brand_name)>0) $brand_aname=" - ".$brand_name;

       if (strlen($unit_pic)>0) $unit_pic="<center><div class=mhpic><center><a href='".$unit_link."'><img src='".$unit_pic."' alt='$unit_name $brand_name' title='$unit_name $brand_aname' border=0></a></center></div></center>";
       
       

       $resultlist=$resultlist."   
          <div class=topunititem> 
             <div class=mhtitle><a href='$unit_link'><h4><center>$unit_name</center></h4></a></div>
             $unit_pic
             <CENTER><div class=unitprice>$unit_cost <span>грн.</span></div></CENTER>
             
             <div class-buttons>
                <div class=morebut><a href='$unit_link'><img src='graph/more.png' border=0 alt='подробнее'></a></div> 
                <div class=orderbut><a class=pointer onclick=\"ShowAdd('addunit.php?code=$unit_code')\"><img src='graph/buy.png' border=0 alt='купить'></a></div>
             </div>
          </div>
       ";
    }
    

   $catquery="select category_code from {$PREFFIX}_shopcategory where category_active=1 and category_parent=$category_code order by category_pos";
   $categoryres=mysql_query ($catquery) or die ("Не могу выбрать потомков. Ошибка в запросе.");
   while(list($c_code)=mysql_fetch_array($categoryres))
   {
     $resultlist=getpicunitlist($c_code,$resultlist,$brand);
   }                                          
   
   return $resultlist;
}   
   

   
   
function getunittable($category_code,$resultlist,$brand)
{                                                                       
    global $PREFFIX, $siterate, $sitediscount;
    
    if ($brand!=0) $tail=" and {$PREFFIX}_shopunit.brand_code=$brand ";
    else $tail="";

    $topunutquery="select unit_code,unit_name,unit_price,unit_power,unit_area,unit_text,page_code,{$PREFFIX}_brands.brand_name,{$PREFFIX}_brands.brand_code,{$PREFFIX}_brands.brand_money 
                   from {$PREFFIX}_shopunit 
                     left join {$PREFFIX}_brands on ({$PREFFIX}_brands.brand_code={$PREFFIX}_shopunit.brand_code) 
                   where unit_active=1 and category_code=$category_code $tail
                   order by unit_pos";
    $topunutres=mysql_query ($topunutquery) or die ("Не могу выбрать топ-предметы. Ошибка в запросе.");
    $num_topunuts=mysql_num_rows($topunutres);
    while(list($unit_code,$unit_name,$unit_price,$unit_power,$unit_area,$unit_text,$page_code,$brand_name,$brand_code,$brand_money)=mysql_fetch_array($topunutres))
    {
       if (strlen($unit_text)>0) $unit_link="<a href='unit.php?id=$unit_code'>";  else $unit_link="<a>"; 

       $unit_cost=getcost($unit_price,$brand_money,$sitediscount);
       $unit_cost=sprintf("%01.2f", $unit_cost);
       
       if ($unit_power==0) $unit_power_str="-"; else $unit_power_str=$unit_power;
       if ($unit_area==0) $unit_area_str="-"; else $unit_area_str=$unit_area;

       $resultlist=$resultlist."   
          <tr bgcolor=#ffffff align=center >
           
             <td class=nametd>".$unit_link."<h4>$unit_name</h4></a></td>
             <td>$brand_name</td>
             <td>$unit_power_str</td>
             <td>$unit_area_str</td>
             <td>$unit_cost</td>
             <td><a class=pointer onclick=\"ShowAdd('addunit.php?code=$unit_code')\"><img src='graph/buy.png' border=0 alt='купить'></a></td>

          </tr>
          
       ";
    }
    

   $catquery="select category_code from {$PREFFIX}_shopcategory where category_active=1 and category_parent=$category_code order by category_pos";
   $categoryres=mysql_query ($catquery) or die ("Не могу выбрать потомков. Ошибка в запросе.");
   while(list($c_code)=mysql_fetch_array($categoryres))
   {
     $resultlist=getunittable($c_code,$resultlist,$brand);
   }                                          
   
   return $resultlist;
}   
   
   
   

function getCatBrandList($category_code,$resultlist,$cat_code)
{
    global $PREFFIX,$brand,$barr;                                     
    
    $topunutquery="select brand_name,{$PREFFIX}_brands.brand_code 
                   from {$PREFFIX}_shopunit 
                     left join {$PREFFIX}_brands on ({$PREFFIX}_brands.brand_code={$PREFFIX}_shopunit.brand_code) 
                   where unit_active=1 and category_code=$category_code 
                   group by {$PREFFIX}_brands.brand_code";
    $topunutres=mysql_query ($topunutquery) or die ("Не могу выбрать топ-предметы. Ошибка в запросе.");
    $num_topunuts=mysql_num_rows($topunutres);
    while(list($brand_name,$brand_code)=mysql_fetch_array($topunutres))
    {
       $brandinarray=1; $bcount=0;
       foreach($barr as $index => $val) {if ($val==$brand_code) $brandinarray=0; $bcount++;}
       
       if($brandinarray==1)
       {
         $barr[$bcount]=$brand_code;
         
         if ($brand_code==$brand) $bclass="class«randbutton";
         else  $bclass="class=brandbutton";

         $resultlist=$resultlist."   
            <div ".$bclass."><a href='catalog.php?id=$cat_code&brand=$brand_code'>$brand_name</a></div>
         ";
       }
    }
    
   $catquery="select category_code from {$PREFFIX}_shopcategory where category_active=1 and category_parent=$category_code order by category_pos";
   $categoryres=mysql_query ($catquery) or die ("Не могу выбрать потомков. Ошибка в запросе.");
   while(list($c_code)=mysql_fetch_array($categoryres))
   {
     $resultlist=getCatBrandList($c_code,$resultlist,$cat_code);
   }                                          
   
  return $resultlist;
  
  

}   
                                                     
                                                     




                                                     
function printpageline($pq,$this,$id='')              
{
  if ($pq>1)
  {
    echo"<div class=pageline>Страницы: "; 
    for ($i=1;$i<$pq+1;$i++)
     {
       $y=$i-1;
       if ($this==$y) {$t1="<b>";$t2="</b>";} else {$t1="";$t2="";}
       if ($i!=1) echo" / ";
       if (strlen($id)>0) echo"$t1 <a href='$PHP_SELF?id=$id&page=$y'>$i</a> $t2 ";
       else echo"$t1 <a href='$PHP_SELF?page=$y'>$i</a> $t2 ";
     }
    echo"</div>";                                                                    
  }
}     
  
  
function getcost($p,$siterate,$sitediscount)              
{                  
  global $REURO;
  global $RUSD;
  
  if ($siterate==0) $thisprice=$p;  
  if ($siterate==1) $thisprice=$p*$REURO;  
  if ($siterate==2) $thisprice=$p*$RUSD; 
  
  $thisdiscount=$p*$sitediscount/100;
  $cost=$thisprice-$thisdiscount;
  $cost=round($cost,2);

  return($cost);
}  
                                                     
                                                     
function GetFirstFpic($pcode)
{
  global $PREFFIX;

            $picquery="select spicbig,spiccomment from {$PREFFIX}_spicture where spage_code=$pcode order by spicpos limit 1";
            $picres=mysql_query ($picquery) or die ("Не могу выбрать изображения. Ошибка в запросе. ");
            $num_pics=mysql_num_rows($picres);
            $picsmall_str="";
            if ($num_pics) 
            {
              list($picbig,$piccoment)=mysql_fetch_array($picres);
              $pic_str="<img src='images/$picbig' border=0 alt='$piccoment'>";
            }
  return($pic_str);
}              

 
function GetFirstpic($pcode)
{
  global $PREFFIX;

            $picquery="select picbig,piccomment from {$PREFFIX}_picture where page_code=$pcode order by picpos limit 1";
            $picres=mysql_query ($picquery) or die ("Не могу выбрать изображения. Ошибка в запросе. ");
            $num_pics=mysql_num_rows($picres);
            $picsmall_str="";
            if ($num_pics) 
            {
              list($picbig,$piccoment)=mysql_fetch_array($picres);
              $pic_str="<img src='images/$picbig' border=0 alt='$piccoment'>";
            }
  return($pic_str);
}    



function GetFirstpicstr($pcode)
{
  global $PREFFIX;

            $picquery="select picsmall,picbig,piccomment from {$PREFFIX}_picture where page_code=$pcode order by picpos limit 1";
            $picres=mysql_query ($picquery) or die ("Не могу выбрать изображения. Ошибка в запросе. ");
            $num_pics=mysql_num_rows($picres);
            $picsmall_str="";
            if ($num_pics) 
            {
              list($picsmall,$picbig,$piccoment)=mysql_fetch_array($picres);
              $picsmall_str="<a href='images/$picbig' traget=_blank class='highslide' onclick='return hs.expand(this)'><img src='images/$picsmall' border=0 alt='$piccoment'></a><div class='highslide-caption'>$piccomment</div>";
            }
  return($picsmall_str);
}               


  

?>
