<?php
session_start();
$title = $_POST['title'];
$category = $_POST['category'];
$content = $_POST['content'];
require_once 'create_uid.php';
$res = $mysql->query("SELECT * FROM `categories` WHERE `title` = '$category'");
$cnc = $res->fetch_assoc();
if (empty($cnc)) {
  $_SESSION['message'] = 'There is no such category' ;
  header('Location: add_recipe_form.php');
} else {
$img_type =  substr($_FILES['image_recipe']['type'], 0, 5);
if (!empty($_FILES['image_recipe']['tmp_name']) and $img_type === 'image') {
global $img;
$img = addslashes(file_get_contents($_FILES['image_recipe']['tmp_name']));
}
$mysql->query("INSERT INTO `recipes` (`title`,`category_title`,`content`,`image`) VALUES('$title','$category','$content','$img')");
$mysql->close();
$_SESSION['message'] = 'Your recipe has been succesfully added' ;
header('Location: add_recipe_form.php'); }
?>
