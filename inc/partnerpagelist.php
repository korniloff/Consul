          <!-- ������ ��������� / 10 ��������� �� �������� -->
          <div class=newlistsarea>

              <!--  ���� �������� -->
              <?php  if (!isset($curr_page)) $curr_page=0;  
                 $pagecount=PrintPartner ($LANG,false, 1,$curr_page); 
               ?>
              <!--  
              <div class=partnerlistitem>
                 <div class=plpic><a href='���� ��������'><img src='images/logo1.png' alt='������������ ��������' border=0></a></div>
                 <div class=pltext>
                   <h2><a href='���� ��������'>������������ ��������</a></h2>
                   ��������� ��������-��������. ��������� ��������-��������. ��������� ��������-��������. ��������� ��������-��������. ��������� ��������-��������.
                   ��������� ��������-��������.
                   <div class=plmore><a href='���� ��������'>www.���� ��������.com</a></div>
                 </div>
              </div>
              -->
              <!--  ����� ����� �������� -->

          </div>
          <!-- ����� ������ ��������� -->


          <div class=pageline>
          <?php           
            if ($pagecount>1)
            {	
            echo "��������:";            
            for ($i=1;$i<$pagecount+1;$i++)
 			{
   			  $y=$i-1;
   			  if ($curr_page==$y) {$t1="<b>";$t2="</b>";} else {$t1="";$t2="";}
   			  echo"<a href=$PHP_SELF?curr_page=$y>$t1 $i $t2|</a>&nbsp";
 			} 
            }
 			?>
          </div>