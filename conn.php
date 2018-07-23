<?php
/*
$servername = "localhost";
$username ="root";
$userp="";
$conn =mysqli_connect($servername,$username,$userp,"uni");
*/

//mamp must use define

DEFINE ('USERNAME','root');
DEFINE('PASS','root');
DEFINE('DBHOST','localhost');
DEFINE('DBNAME','uni');

$mysqli = new mysqli(DBHOST,USERNAME,PASS,DBNAME);

//echo "predifiend things";


if(mysqli_connect_error()){
  echo "connected failed";
}else{
  echo "connected succeed";
}
$sql = "select * from students";
//find a way to to display the result into
// two ways to to do so use foreach function 
//or use json format which is much more easy way to do so


$result = $mysqli->query($sql);

//print_r($result);

while (!$row = $sql ->fetch_row()){


$arr[] = $row;
  //
  // foreach ($row as $key->$value){
  //   echo $key;
  //   echo $value;
  // }
}
print_r($arr);



$mysqli -> close();

?>
