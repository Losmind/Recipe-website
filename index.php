<?php
  session_start();
  require 'header.php';
?>
<div class="content">
  <?php
     if (isset($_SESSION['message'])) {
       echo '<div class="msg"> ' . $_SESSION['message'] . ' </div>';
     }
     unset($_SESSION['message']);
  ?>
  <div class="main_content">
    <h2 id="h2_index">Categories</h2>
    <div class="categories_index">
      <?php /*
        require_once 'db_connection.php';
        $result = $mysql->query("SELECT * FROM `categories`");
        while ($row = $result->fetch_assoc())
        {
        print_r($row);
      } */
      ?>
      <div class="">Капуста1</div>
      <div class="">Капуста2</div>
      <div class="">Капуста3</div>
      <div class="">Капуста4</div>
      <div class="">Капуста5</div>
      <div class="">Капуста6</div>
      <div class="">Капуста7</div>
      <div class="">Капуста8</div>
    </div>
  </div>
</div>
<?php require ('footer.php') ?>
