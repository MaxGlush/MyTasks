<?php
//include('db/connect.php') - Постоянное подлючение файла connect.php
include('db/connect.php');
$name = $_POST['username'];
$phone = $_POST['telephone'];
$pass = $_POST['passw'];
$email = $_POST['email'];




$message = ["error","success"];

// if(isset($_POST['username']) && $_POST['username'] !== "root" || isset($_POST['passw']) && $_POST['passw'] !== "root"){
//     echo json_encode($message[0]);
// } else {
//     echo json_encode($message[1]);
// }



//Закончить заполнение SQL таблицы в базе данных

$test = inputData($name, $phone, $pass, $email);

print_r($test);
if($test == true){
    header('Location: /login.php');
    exit();
}else{
    echo json_encode($message[0]);
}

