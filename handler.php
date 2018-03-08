<?php
//$servername = "192.168.1.34";
$servername = "localhost";
$username = "root";
$password = "Pspa14476";
$dbname = "studentdb";


$conn =  new mysqli($servername, $username, $password, $dbname);
if(mysqli_connect_error())
    {
      echo"error".mysqli_connect_error();
      exit();
    }
// Check connection
else {

  // $fp = fopen('lidn.txt', 'w');

$_POST=file_get_contents("php://input");
// fwrite($fp, $_POST);


$convert_to_array = explode('&', $_POST);

for($i=0; $i < count($convert_to_array ); $i++){
    $key_value = explode('=', $convert_to_array [$i]);
    $end_array[$key_value [0]] = $key_value [1];
    echo $end_array[$key_value[0]];
    
}


$name=array();
$name = urldecode($end_array['name']);
$email = urldecode($end_array['email']);
$college = urldecode($end_array['college']);
$phone = urldecode($end_array['phone']);
echo $name;
// fwrite($fp, $name);
// fclose($fp);

  


  // echo $_POST;
// $sql = "Insert into studentdetails values(".$status.",;";

$sql = "Insert into studentdetails values('".$email."','".$name."','".$college."','".$phone."');";
// echo $sql;

if ($conn->query($sql) === TRUE) {
  
  echo "done";
    
} else {
    
  echo "not done";
}

}
?>
