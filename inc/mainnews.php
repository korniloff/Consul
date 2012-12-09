          <!-- топ новости -->
          <div class=mainnewsarea>
              <h5><?=Translate($LANG,'Ќовости и событи€')?></h5>
             <?php
             $news=getlastnews($LANG);
             foreach ($news as $newsitem) 
             { 
              print '<div class=mnewsitem>';
              $picname=$newsitem[3];
              if ($picname=="") $picname=nullnews.gif;
              print " <center><div class=mnpic><a href=''><img src='images/".$picname."' alt='заголовок новости'></a></div></center>";
              print "   <div class=mnetstext>";
              print "    <span>".$newsitem[1]."</span>";
              print "    <p>".$newsitem[2]."</p>";
              print "   </div>";
              print "  <div class=mnmore><a href=''>подробнее ї</a></div>";
              print "</div>";
             }
              ?>
                        </div>
          <!-- конец топ новостей -->
