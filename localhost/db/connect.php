<?php
define('DBNICKNAME', 'maindb'); 
define('DBUSER', 'root'); 
define('DBPASS', ''); 
define('DBSERVER', 'localHost'); 


//соединение "mysqli_connect(<адрес сервера>, <имя пользователя>, <пароль>, <имя базы данных>);"
$connectionToSQL = mysqli_connect(
    DBSERVER,
    DBUSER, 
    DBPASS, 
    DBNICKNAME
);

    if(!$connectionToSQL){
        echo 'connection failure';
    }

//запрос в базу к таблицам 
$queryToTable = mysqli_query($connectionToSQL, "SELECT * FROM users");

// print_r($queryToTable);

function inputData($name, $phone, $pass, $email){

    global $connectionToSQL;

    $fillTable = mysqli_query($connectionToSQL, 
    "INSERT INTO users (userName, email, numberPhone, password)
    VALUES ('$name', '$email', '$phone', '$pass')");
return $fillTable;
};

?>