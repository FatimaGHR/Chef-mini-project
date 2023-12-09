<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // $sql="select * from reciepes";
    $connection = db_connect($db_server, $db_user, $db_user_pass, $db_name);
    $res=db_select($connection,"reciepes");
    if($res > 0){
       foreach($res as $value){?>
<div>
        <img src="assets/img/menu/<?=$value['image_url']?>">
        <h1><?=$value['name_cooking']?></h1>
        <h1><?=$value['descrition']?></h1>
    </div>
  <?php     } }?>
    
    
</body>
</html>