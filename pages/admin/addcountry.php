<?php
    if($_SERVER['REQUEST_METHOD'] === "POST"){
        $connection = db_connect($db_server, $db_user, $db_user_pass, $db_name);
        $data = array(
            "name" => $_POST["name"]
        );
        // $flagPath = "assets/img/countries";
        $result = db_insert($connection, "countries",$data);
        // print_r($result);
        if($result > 0){
            header("Location: " .ROOT_PATH);
            exit;
        }
    }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
#formcountries{
    margin-top: 220px;
    margin-left: 500px;
    border-radius: 10px;
    border: 2px solid #cda45e;
    height: 300px;
    width: 300px;
    background-color:whitesmoke;
    position: relative;
    
}
#labeln{
position:absolute;
top: 70px;
left: 60px;
font-size: 25px;
color: #000;



}
#name{
position: absolute;
top: 110px;
left: 55px;
border-bottom: 3px solid #cda45e;
}
#btnsubmit{
    position: absolute;
    top: 150px;
    left: 100px;
    height: 50px;
    width: 100px;
    background-color: #cda45e;
    font-size: 18px;
}
    </style>
</head>
<body>
    <form action="" method="post" id="formcountries">
        <br><br><br><br><br><br><br><br><br><br><br>
        <label for="name" id="labeln">name countries</label>
        <input type="text" name="name" id="name">
        <br><br>
        <input type="submit" value"add" id="btnsubmit">
    </form> 
</body>
</html>
</html>