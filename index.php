<?php
/**
 * Created by PhpStorm.
 * User: Erlan(for some time)
 * Date: 04.07.2017
 * Time: 16:30
 */

$connection = mysqli_connect('localhost', 'root', '', 'emir_blog');
mysqli_set_charset($connection, 'utf8');

$query = 'SELECT * FROM posts';
$result = mysqli_query($connection, $query);

$n = mysqli_num_rows($result);
$posts = array();

for($i = 0; $i < $n; ++$i) {
    $row = mysqli_fetch_assoc($result);
    $posts[$i] = $row;
}
?>

<html>

<head>
    <title>Home</title>
    <meta charset="utf-8">
</head>

<body>

<h1>Блог Эмира</h1>
<hr>


<?php foreach($posts as $item): ?>
    <div>
        <h3><?php echo($item['title']); ?></h3>
        <p><?php echo(substr($item['content'], 0, 40)); ?>...</p>
        <a href="one_post.php?id=<?php echo($item['id']); ?>">Подробнее</a>
    </div>
<?php endforeach; ?>

</body>

</html>
