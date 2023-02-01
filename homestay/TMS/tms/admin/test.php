<?php
function KetNoiCSDL()
{
$servername = "localhost";
$username = "root";
$password = "";
$database = "tms";

try{
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // $conn= new PDO("mysql:host=localhost;dbname=web2","root","");
    $conn->exec("SET NAMES UTF8");//Thiết lập làm việc với unicode
    // echo "<h3> KẾT NỐI CSDL THÀNH CÔNG </h3>";
}
catch(PDOException $ex)
{
    echo"<h3>".$ex->getMessage()."<\h3>";
    die("<h3>Lỗi kết nối SQL<\h3>");
}
return $conn;

// try {

//     $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // set the PDO error mode to exception
//     // echo "Connected Successfully";
    
// } catch(PDOException $e) {

//     echo "Connection Failed" .$e->getMessage();
// }
}
?>