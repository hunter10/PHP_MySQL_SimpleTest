<?php

//$mysqli = mysqli_connect("example.com", "user", "password", "database");
//$res = mysqli_query($mysqli, "SELECT 'Please, do not use ' AS _msg FROM DUAL");
//$row = mysqli_fetch_assoc($res);
//echo $row['_msg'];

$conn = mysqli_connect("localhost", "root", "1234", "opentutorials");
if(mysqli_connect_errno()){
  die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
}
else {
  //echo 'Success... ' . $conn->host_info . "\n";
  //$mysqli->close();
}


$sql = "
  INSERT INTO topic(
    title,
    description,
    created
    ) VALUES (
      'MySQL',
      'MySQL is ...',
      NOW()
  );";

$result = mysqli_query($conn, $sql);
//echo mysqli_error($conn);

if($result === false){
  echo mysqli_error($conn);
}

?>
