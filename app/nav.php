

              <ul class="nav navbar-nav">
<?php

  $rs = $db->query("SELECT* FROM T_Menu where parent_id = 0");
    $menu = $rs->fetchAll();
                 
                   foreach ($menu as $item){
                      
                   echo "<li class='dropdown'>";

                      
                        echo "<a href='".$item['url']."'>".$item[$current_lang.'_title']."</a>";
                        
                       
                        $srs = $db->query("SELECT* FROM T_Menu where parent_id =".$item['id']);
                      
                       
                       if($srs){
                       $submenu = $srs->fetchAll();
                      
                          echo "<ul class='dropdown-menu'>";
                              foreach ($submenu as $subitem){
                          
                                         echo "<li ><a href='".$subitem['url']."'>".$subitem[$current_lang.'_title']."</a>";

                                }
                            echo "</ul>";
                           
                       }
                        echo "</li>";
                       }
                       
                       
                      
  
?>
                            

    </ul>
            
      