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
                <div><input name=word></div>
                <div class=go onclick='document.searchform.submit()'></div>
            </form>
        </div>
        <!-- ����� ����� ������ -->

    </div>


      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </td>

    <td class=rightbg>&nbsp;</td>
 </table>
<div>

</body>
</html>
