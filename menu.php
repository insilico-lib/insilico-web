<?php
  $menu = array("Documentation", "Download");
  echo '<ul class="menu">';
  foreach($menu as $menuitem) { 
  echo '<li class="menu-list">'.
       '<a style="color: #fff;" href='.strtolower($menuitem).'.php>'.
      $menuitem.
       '</a></li>';
  }
  echo "</ul>";
?>