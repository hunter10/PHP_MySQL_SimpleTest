<?php

$conn = mysqli_connect(
  "localhost",
  "root",
  "1234",
  "opentutorials");

if(mysqli_connect_errno()){
  die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
}
else {
  echo 'Success... ' . $conn->host_info . "\n";
  //$mysqli->close();
}


$sql="
  INSERT INTO topic
    (title, description, created)
    VALUES(
      '{$_POST['title']}',
      '{$_POST['description']}',
      NOW()
      )
";
echo $sql;

$result = mysqli_query($conn, $sql);

if($result === false){
  echo mysqli_error($conn);
}
else {
  echo '성공했습니다. <a href="index.php">돌아가기</a>';
}


 ?>
