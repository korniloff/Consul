<?php
include("inc/settings.php");
include ("inc/head.php");
?>


<body>

<div class=wrapper>
<table Border=0 CellSpacing=0 CellPadding=0 class=wrtable>
 <tr valign=top>
    <td class=leftbg>&nbsp;</td>
    <td class=page>

    <!-- ������� ���� -->
    <!-- �������� ������ ���������� <b></b>, ��������� ������ ���������� <span></span> -->
    <div class=topmenu>
         <div class=mitem><b><li><a href=''>�������</a></li></b></div>
         <div class=mitem><li><a href=''>� ��������</a></li></div>
         <div class=mitem><li><a href=''>�������</a></li></div>
         <div class=mitem><li><a href=''>������</a></li></div>
         <div class=mitem><li><a href=''>������������</a></li></div>
         <div class=mitem><li><a href=''>��������</a></li></div>
         <div class=mitem><span><li><a href=''>��������</a></li></span></div>
    </div>
    <!-- ����� �������� ���� -->

    <!-- ���� ������ -->
    <div class=langmenu>
        <a href='?ln=ru'><div class=en></div></a>  <!-- class=aen ��� �������� english -->
        <div class=aru></div>                       <!-- class=ru ��� �������� english -->
    </div>
    <!-- ����� ���� ������ -->

    <div class=logoarea>

        <!-- �������:  class=logo_en ��� english -->
        <div class=logo><a href=''></a></div>

        <!-- ����� ������ -->
        <div class=search>
            <form name=searchform action='' method=POST>
                <input name=word>
                <div class=go onclick='document.searchform.submit()'></div>
            </form>
        </div>
        <!-- ����� ����� ������ -->

    </div>

    <!-- ������ � ����� �� ����� ���� -->
    <div class=toptextarea>

       <div class=topabout>
         <!-- ����� ����������� ������ ��������� �� ���� (��������� �������� �������) -->
         �������� ������ ���� �������� � 2001 ����.  ������������ �������� �������� �� ������������� �������� ����������  � ������� ����������������, ��������� �������  ����������  �  ��������  ����� ����� ������������. ���� ��������� ����������� � ������  ������� �  ������������ ����� ��������, �������  ���������������   �  ����������������  � �������� ��������.  �� ������� ���������� ����� �������� ��� ��������� ��������!
       </div>

       <div class=slog></div>

    </div>
    <!-- ����� ������� � ����� �� ����� ���� -->


    <div class=infoarea>

      <div class=leftpart>

         <!-- ���� �������� -->
         <div class=catalogmenu>
            <h5>������� ������������</h5>
            <ul>
               <li><a href="">�����������</a></li>
               <li><a href="">���, ���, ���-�������</a></li>
               <li><a href="">�����������</a>
                  <!-- ������� �����   -->
                  <!-- ������ ���� �� ��������� �� �������� ����, ����� ��� �������� ������� ���� -->

                  <ul>
                    <li><a href=''>���������� GC 80 Simrad</a></li>
                    <li><a href=''>���������� Standard 22 Raytheon</a></li>
                    <li><a href=''>���������� PGM-C-009</a></li>
                    <li><a href=''>���������� ��������</a></li>
                  </ul>

                  <!-- ����� ������� �����   -->
               </li>
               <li><a href="">���������������� �������</a></li>
               <li><a href="">��������-����������� ���������</a></li>
               <li><a href="">������� ���������</a></li>
               <li><a href="">��������� GPS, ����-��������</a></li>
               <li><a href="">��������� NAVTEX, ��������� ���� ������</a></li>
               <li><a href="">��/��, ���-������������</a></li>
               <li><a href="">������</a></li>
               <li><a href="">������������ ������ �����</a></li>
               <li><a href="">����������� ������� �����</a></li>
           </ul>
         </div>
         <div class=nomline></div>
         <!-- ���� �������� -->



         <!-- �������� ����� -->
         <div class=contactarea>
            <h5>���������� ����������</h5>
            <div class=addresstext>
                <b>��� ���� �����˻</b><br>
                <p>
                    <b>�����:</b>
                     <br>99055. �������, �. �����������
                     <br>��. �������� ��������� 4/21
                     <br><a href="">����� ������� �</a>
                </p>
                <p>
                    <b>�������:</b> +38 (0692) 65-76-85
                    <br><b>����:</b> +38 (0692) 44-82-378
                    <br><b>���������:</b> +38 (050) 393-26-78
                </p>
                <p>
                    <b>E-mail:</b>  <a href="mailto:office@consul-marine.com.ua">office@consul-marine.com.ua</a>
                    <br><b>Skype:</b>  <a href="">consul-marine</a>
                </p>
            </div>
          </div>
         <!-- �������� ����� -->

      </div>



      <!-- ���������� �������� -->
      <div class=rightpart>

          <!-- ������� ������ -->

          <div class=krohi>
             <a>����� ����������!</a>
          </div>

          <!-- ����� ������� ������  -->


          <!-- ��� ������� -->
          <div class=mainnewsarea>
              <h5>������� � �������</h5>
              <!-- ������� -->
              <div class=mnewsitem>
                 <center><div class=mnpic><a href=''><img src='images/news1.jpg' alt='��������� �������'></a></div></center>
                 <div class=mnetstext>
                   <span>06.12.2012 �.</span>
                   <p>�������� Navico, ������� ����� �� ������������ ������� �����������, �������� � ������ ����� ������� �������� � ������������� Lowrance ����� Elite� � ����� Mark�.</p>
                 </div>
                 <div class=mnmore><a href=''>��������� �</a></div>
              </div>
              <!-- ����� ������� -->

              <div class=mnewsitem>
                 <center><div class=mnpic><a href=''><img src='images/news1.jpg' alt='��������� �������'></a></div></center>
                 <div class=mnetstext>
                   <span>06.12.2012 �.</span>
                   <p>�������� Navico, ������� ����� �� ������������ ������� �����������, �������� � ������ ����� ������� �������� � ������������� Lowrance ����� Elite� � ����� Mark�.</p>
                 </div>
                 <div class=mnmore><a href=''>��������� �</a></div>
              </div>

              <div class=mnewsitem>
                 <center><div class=mnpic><a href=''><img src='images/news1.jpg' alt='��������� �������'></a></div></center>
                 <div class=mnetstext>
                   <span>06.12.2012 �.</span>
                   <p>�������� Navico, ������� ����� �� ������������ ������� �����������, �������� � ������ ����� ������� �������� � ������������� Lowrance ����� Elite� � ����� Mark�.</p>
                 </div>
                 <div class=mnmore><a href=''>��������� �</a></div>
              </div>


          </div>
          <!-- ����� ��� �������� -->



          <!-- ������� � �������� -->

          <div class=maincatalog>
               <h5>�����������</h5>

               <!-- ������� ������ ����� ������������ -->
               <div class=m�item>
                 <div class=m�pic><a href=''><img src='images/1.jpg' alt='�������� �������'></a></div>
                 <h2><a href="">�������� �������</a></h2>
               </div>
               <!-- ����� �������� ������ ����� ������������ -->

               <div class=m�item>
                 <div class=m�pic><a href=''><img src='images/2.jpg' alt='�������� �������'></a></div>
                 <h2><a href="">�������� �������</a></h2>
               </div>

               <div class=m�item>
                 <div class=m�pic><a href=''><img src='images/3.jpg' alt='�������� �������'></a></div>
                 <h2><a href="">�������� �������</a></h2>
               </div>

               <div class=m�item>
                 <div class=m�pic><a href=''><img src='images/4.jpg' alt='�������� �������'></a></div>
                 <h2><a href="">�������� �������</a></h2>
               </div>


               <div class=m�item>
                 <div class=m�pic><a href=''><img src='images/1.jpg' alt='�������� �������'></a></div>
                 <h2><a href="">�������� �������</a></h2>
               </div>

               <div class=m�item>
                 <div class=m�pic><a href=''><img src='images/2.jpg' alt='�������� �������'></a></div>
                 <h2><a href="">�������� �������</a></h2>
               </div>

               <div class=m�item>
                 <div class=m�pic><a href=''><img src='images/3.jpg' alt='�������� �������'></a></div>
                 <h2><a href="">�������� �������</a></h2>
               </div>

               <div class=m�item>
                 <div class=m�pic><a href=''><img src='images/4.jpg' alt='�������� �������'></a></div>
                 <h2><a href="">�������� �������</a></h2>
               </div>

               <div class=m�item>
                 <div class=m�pic><a href=''><img src='images/1.jpg' alt='�������� �������'></a></div>
                 <h2><a href="">�������� �������</a></h2>
               </div>

               <div class=m�item>
                 <div class=m�pic><a href=''><img src='images/2.jpg' alt='�������� �������'></a></div>
                 <h2><a href="">�������� �������</a></h2>
               </div>

               <div class=m�item>
                 <div class=m�pic><a href=''><img src='images/3.jpg' alt='�������� �������'></a></div>
                 <h2><a href="">�������� �������</a></h2>
               </div>

               <div class=m�item>
                 <div class=m�pic><a href=''><img src='images/4.jpg' alt='�������� �������'></a></div>
                 <h2><a href="">�������� �������</a></h2>
               </div>

               <div class=m�item>
                 <div class=m�pic><a href=''><img src='images/1.jpg' alt='�������� �������'></a></div>
                 <h2><a href="">�������� �������</a></h2>
               </div>

               <div class=m�item>
                 <div class=m�pic><a href=''><img src='images/2.jpg' alt='�������� �������'></a></div>
                 <h2><a href="">�������� �������</a></h2>
               </div>

               <div class=m�item>
                 <div class=m�pic><a href=''><img src='images/3.jpg' alt='�������� �������'></a></div>
                 <h2><a href="">�������� �������</a></h2>
               </div>

               <div class=m�item>
                 <div class=m�pic><a href=''><img src='images/4.jpg' alt='�������� �������'></a></div>
                 <h2><a href="">�������� �������</a></h2>
               </div>


          </div>
          <!-- ����� �������� � �������� -->



      </div>
      <!-- ����� ����������� �������� -->


    </div>
    </td>
    <td class=rightbg>&nbsp;</td>
 </table>
<div>

<div class=footerarea>

      <center>

      <!-- ����� �� ����� ���� -->
      <div class=footer>

          <div class=endmenu><a href=''>�������</a>  / <a href=''>� ��������</a>  / <a href=''>�������</a>  / <a href=''>������</a>  / <a href=''>������������</a>  / <a href=''>��������</a>   / <a href=''>��������</a></div>
          <div class=copy><a href=''>&copy; 2012. ��� ���� �����˻ </a></div>

          <div class=counters>
<!--LiveInternet counter--><script type="text/javascript"><!--
document.write("<a href='http://www.liveinternet.ru/click' "+
"target=_blank><img src='//counter.yadro.ru/hit?t39.3;r"+
escape(document.referrer)+((typeof(screen)=="undefined")?"":
";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
";h"+escape(document.title.substring(0,80))+";"+Math.random()+
"' alt='' title='LiveInternet' "+
"border='0' width='31' height='31'><\/a>")
//--></script><!--/LiveInternet-->
          </div>

      </div>
      <!-- ����� ������ �� ����� ���� -->


      <!-- ��� ��������� -->
      <div class=toppartners>
       <center>
       <div class=tparea>
        <div class=tpitem><a href='' traget=_blank><img src='images/logo1.png' alt='�������� ������' border=0></a></div>
        <div class=tpitem><a href='' traget=_blank><img src='images/logo1.png' alt='�������� ������' border=0></a></div>
        <div class=tpitem><a href='' traget=_blank><img src='images/logo1.png' alt='�������� ������' border=0></a></div>
        <div class=tpitem><a href='' traget=_blank><img src='images/logo1.png' alt='�������� ������' border=0></a></div>
        <div class=tpitem><a href='' traget=_blank><img src='images/logo1.png' alt='�������� ������' border=0></a></div>
       </div>
       </center>
      </div>



      </center>


</div>


</body>
</html>
