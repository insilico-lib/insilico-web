<?php
  $menu = array("Documentation", "Download");
  echo '<div id="cssmenu"><ul>';
  foreach($menu as $menuitem) { 
  echo '<li>'.
       '<a style="color: #fff;" href='.strtolower($menuitem).'.php>'.
      $menuitem.
       '</a></li>';
  }
  echo "</ul></div>";
?>