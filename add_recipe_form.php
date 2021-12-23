<?php
  session_start();
  require 'header.php';
?>
<div class="content" id="content_add_recipe">
  <?php
     if (isset($_SESSION['message'])) {
       echo '<div class="msg"> ' . $_SESSION['message'] . ' </div>';
     }
     unset($_SESSION['message']);
  ?>
  <div class="main_content" id="add_recipe">
        <div class="add_recipe_form">
          <h2 id="h2_add_recipe">Add your recipe</h2>
          <form action="add_recipe.php" method="post" enctype="multipart/form-data">
            <label for="title">Title:</label>
            <input placeholder="Enter title" class="input_add_recipe" type="text" id="title" name="title" required>
            <label for="category">Category:</label>
            <input placeholder="Enter a category" class="input_add_recipe" type="text" id="category" name="category" required>
            <label for="image_recipe">Image:</label>
            <input placeholder="Enter a category" class="input_add_recipe" type="file" id="image_recipe" name="image_recipe" required>
            <textarea name="content" placeholder="Describe your recipe" maxlength="3000" required></textarea>
            <button type="submit" class="input red_button"><strong>Submit</strong></button>
          </form>
        </div>
    </div>
  </div>
<?php require ('footer.php') ?>
