<?php 
$server = 'localhost';
$username = 'id13912525_root1';
$password  = '1T=b8a+~xC5u]p_?';
$dbname = 'id13912525_uas_surya';

//koneksi
$conn = new mysqli ($server, $username, $password,$dbname);

//check koneksi
if ($conn->connect_error){
    die("Connection Failed".$conn->connect_error);
}
$sql= "SELECT * FROM t_menu";
$result = $conn->query($sql);
$data=array();

if($result->num_rows>0){
    while ($row=$result->fetch_assoc()){
        $data[]=$row;
    }
}
else{
    echo"data kosong";
}
echo json_encode($data);
$conn->close();
?>