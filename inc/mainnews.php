          <!-- ��� ������� -->
          <div class=mainnewsarea>
              <h5><?=Translate($LANG,'������� � �������')?></h5>
             <?php
             $news=getlastnews($LANG);
             foreach ($news as $newsitem) 
             { 
              print '<div class=mnewsitem>';
              $picname=$newsitem[3];
              if ($picname=="") $picname=nullnews.gif;
              print " <center><div class=mnpic><a href=''><img src='images/".$picname."' alt='��������� �������'></a></div></center>";
              print "   <div class=mnetstext>";
              print "    <span>".$newsitem[1]."</span>";
              print "    <p>".$newsitem[2]."</p>";
              print "   </div>";
              print "  <div class=mnmore><a href=''>��������� �</a></div>";
              print "</div>";
             }
              ?>
                        </div>
          <!-- ����� ��� �������� -->
