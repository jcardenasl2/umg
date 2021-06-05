<?php 
	session_start();
	require_once "database.php";
    require_once "menu.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="assets/css-menu/style.css">
  </head>
  <body>
    <?php  
      $menu = new menu();
    ?>  
    <div id="menu">
      <ul class="div">
          <?php foreach ($menu->getmenu() as $m): ?>
            <li>
              <a href="<?php echo $m['enlace']; ?>"><?php echo $m['titulo']; ?></a>
                <ul>
                <li><a href=""></a></li>              
              </ul>
            </li>
          <?php endforeach; ?>
        </ul>
    </div>
  </body>
</html>
