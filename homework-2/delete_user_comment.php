<?php
include("config.php");
session_start();

$current_user = $_SESSION["active_user"];
$comment_id = intval($_POST['id']);
$recipe_index = intval($_POST['recipe_index']);

$query = "DELETE FROM comments WHERE id = '$comment_id' AND username = '$current_user'";

mysqli_query($db, $query) or die('Oops something broke! Please try again at a later time.');

header("location: recipe_page.php?recipe_index=$recipe_index");
