<?php
  session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TopFood</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
  </head>
  <body>
    <header>
      <img class="logo" src="logo.png" width="103px" height="64px" alt="Can`t download image">
      <nav>
        <ul class="nav_links">
          <li><a href="index.php">Home</a></li>
          <li><a href="#">Categories</a></li>
          <li><a href="contact_us.php">Contact Us</a></li>
          <?php if (empty($_COOKIE['auth_token'])) { ?>
          <li><button onclick="show('block')" class="green_button">Sign Up</button></li>
          <li><button onclick="show2('block')" class="blue_button">Login</button></li>
        <?php } elseif (isset($_COOKIE['auth_token'])) { ?>
          <li><a href="add_recipe.php">Add recipe</a></li>
          <li>Welcome
          <?php
           if (isset($_SESSION['login_u'])) {
             echo '<p> ' . $_SESSION['login_u'] . ' </p>';
           }
          ?>!</li>
          <li><a href="exit.php">Logout</a></li>
        </ul>
      </nav>
      <img class="avatar" src="avatar.png" width="64px" height="64px" alt="Can`t download image">
      <?php } ?>
    </header>
    <?php
     if (isset($_SESSION['message'])) {
       echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
     }
     unset($_SESSION['message']);
    ?>
    <div onclick="show('none')" id="gray"></div>
    <div onclick="show2('none')" id="gray2"></div>
    <div id="window1" class="window">
        <img class="close" src="close.png" alt=""  onclick="show('none')">
        <div class="form">
            <h2 class="h2_modal">Sign Up</h2>
            <form action="signup.php" method="post">
                <input type="text" id="login" name="login"
                 placeholder="Write your nickname" class="input">
                <input type="password" id="pass" name="pass" placeholder="Password" class="input">
                <input type="password" id="pass_confirm" name="pass_confirm" placeholder="Password confirmation" class="input">
                <button type="submit" class="input green_button"><strong>LET`S GO</strong></button>
            </form>
        </div>
    </div>
    <div id="window2" class="window">
        <img class="close" src="close.png" alt=""  onclick="show2('none')">
        <div class="form">
            <h2 class="h2_modal">Login</h2>
            <form action="login.php" method="post">
                <input type="text" id="login1" name="login1" placeholder="Write your nickname" class="input">
                <input type="password" id="pass1" name="pass1" placeholder="Password" class="input">
                <button type="submit" class="input blue_button"><strong>LET`S GO</strong></button>
            </form>
        </div>
    </div>
    <footer>
        <p>Copyright &#169; 2021 Designed by Losmind</p>
    </footer>
    <script>
   //Функция показа всплывающего окна
   	function show(state)
   	{
   	document.getElementById('window1').style.display = state;
   	document.getElementById('gray').style.display = state;
   	}
    function show2(state)
   	{
   	document.getElementById('window2').style.display = state;
   	document.getElementById('gray2').style.display = state;
   	}
   </script>
  </body>
</html>
