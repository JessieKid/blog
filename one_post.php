<?php
/**
 * Created by PhpStorm.
 * User: Erlan(for some time)
 * Date: 04.07.2017
 * Time: 16:39
 */

$connection = mysqli_connect('localhost', 'root', '', 'emir_blog');
mysqli_set_charset($connection, 'utf8');


$id = $_GET['id'];

$query = 'SELECT * FROM posts WHERE id='.$id;
$result = mysqli_query($connection, $query);


$post = mysqli_fetch_assoc($result);

?>
<html>

<head>
    <title>Home</title>
    <meta charset="utf-8">
</head>

<body>

<h1><?php echo($post['title']);?></h1>
<hr>

<p>
    <?php echo($post['content']); ?>
</p>

<span><b>Автор</b>: <?php echo($post['author']); ?></span>

</body>

</html>

