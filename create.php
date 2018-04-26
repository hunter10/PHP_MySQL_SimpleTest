<?php
$conn = mysqli_connect(
  "localhost",
  "root",
  "1234",
  "opentutorials");

  $sql = "SELECT * FROM topic";
  $result = mysqli_query($conn, $sql);
  $list = '';
  while($row = mysqli_fetch_array($result))
  {
    $list = $list."<li><a href=\"index.php?id={$row['id']}\">{$row['title']}</a></li>";
  }


  $article = array(
    'title'=>'Welcom',
    'description'=>'Hello, Web'
  );

  if(isset($_GET['id'])){
  $sql = "SELECT * FROM topic WHERE id={$_GET['id']}";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
  $article = array(
    'title'=>$row['title'],
    'description'=>$row['description']
  );
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>WEB</title>
  </head>
  <body>
    <h1><a href="index.php">WEB</a></h1>
    <ol>
         <?=$list?>
    </ol>
    <form action="process_create.php" method="POST">
      <p><input type="text" name="title" placeholder="title"></p>
      <p><textarea name="description" rows="8" cols="80"></textarea> </p>
      <p><input type="submit"></p>
    </form>

  </body>
</html>
