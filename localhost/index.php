<?php
include('db/connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <title>MaxDoc</title>
    <link href="assets/css/style.css" rel="stylesheet"/>
</head>
<style> 
body{

}
</style>

<body>  
    <?php
    //mail('maks.glushchenko.1998@mail.ru', 'when we going to home', 'i will go to home every week');
    ?>
    <B>Начальная страница</B>
    <P class="name">Test execute</P>
    <Button type="button"  onclick="changeColor()">Go home!</Button>
    <Button type="button"  onclick="reset()">Reset!</Button>
    <input class="input_a" type="number">
    <input class="input_b" type="number">
    <select class="select_mark">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <button class="btn_result" >Result</button>
    <p class="output"></p>

    <form method="POST" id="authorization">
        <input type="text" id="username" required  name="username" placeholder="Введите имя пользователя">        
        <input type="password" id="passw" required name="passw" placeholder="Password">
        <input type="email" id="email" required name="email" placeholder="input your email">
        <input type="tel" id="phone" required name="telephone" placeholder="input your phone number">
        <button type="submit">Authorization</button>
        <span class="text-message"></span>
        <!-- <span class="text-message text-message_success"></span> -->
    </form>



    <script src="assets/js/math.js"></script>
    <script src="assets/js/index.js"></script>
</body>
</html> 