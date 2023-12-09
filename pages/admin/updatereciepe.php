<?php
    if($_SERVER['REQUEST_METHOD'] === "POST"){
        $image = $_FILES['image']['name'];
        $imagePath = 'assets/img/menu/' . $image;
        move_uploaded_file($_FILES['image']['tmp_name'], $imagePath);
        $connection = db_connect($db_server, $db_user, $db_user_pass, $db_name);
        $data = array(
            "name_cooking" => $_POST["name"],
            "descrition" => $_POST["description"],
            "ingredients" => $_POST["ingredients"],
             "image_url"=>$_FILES["image"]["name"],
            "country_id"=> $_POST["dropdown"],
        );
        $reciepeId = $_GET['id'];
        $checkID = array(
            "column" => "id",
            "operator" => "=",
            "value" => $reciepeId
          );
          $where[] = $checkID;
          $reciepes=db_update($connection,"reciepes",$data,$where);
        // print_r($result);
        if($reciepes > 0){
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
#formreciepe{
    margin-top: 150px;
    margin-left: 400px;
    border-radius: 10px;
    border: 2px solid #cda45e;
    height: 450px;
    width: 550px;
    background-color:whitesmoke;
    position: relative;
    
}
#labeln{
position:absolute;
top: 30px;
left: 150px;
font-size: 20px;
color: #000;


}
#namefood{
position: absolute;
top: 60px;
left: 150px;
border-bottom: 3px solid #cda45e;
}

#labeldes{
position:absolute;
top: 90px;
left: 150px;
font-size: 20px;
color: #000;


}
#description{
position: absolute;
top: 120px;
left: 150px;
border-bottom: 3px solid #cda45e;
}

#selectcontry{
    position: absolute;
    top: 90px;
    left: 30px;
    height: 40px;
    width: 100px;
    background-color: #cda45e;
    font-size: 18px;
}
#labelingr{
position:absolute;
top: 150px;
left: 30px;
font-size: 20px;
color: #000;
}
#ingredients{
position: absolute;
top: 180px;
left: 150px;
border-bottom: 3px solid #cda45e;
}
#inputhid{
position:absolute;
top: 250px;
left: 20px;
font-size: 20px;
color: #000;
}
#inputfile{
position: absolute;
top: 250px;
left: 220px;
font-size: 20px;
}

#upload{
    position: absolute;
    top: 300px;
    left: 240px;
    height: 50px;
    width: 100px;
    background-color: #cda45e;
    font-size: 18px;
}
#food{
    height: 60px;
    width: 120px;
    position: absolute;
            top: 240px;
            left: 380px;
}
    </style>
</head>
<body>

<form action="" method="POST" enctype="multipart/form-data" id="formreciepe">
<br><br><br><br><br><br><br><br><br><br>
    <select name="dropdown"id="selectcontry">
    <?php
    $connection = db_connect($db_server, $db_user, $db_user_pass, $db_name);
       $res=db_select($connection,"countries");
       if($res > 0){
        foreach($res as $value){?>
        
        <option value="<?php echo $value['id'] ?>"><?php echo $value['name'] ?> </option>
        <?php }}?>
        
    </select><br><br>
    
    <?php
$reciepeId = $_GET['id'];

$connection = db_connect($db_server, $db_user, $db_user_pass, $db_name);
$checkId = array(
  "column" => "id",
  "operator" => "=",
  "value" => $reciepeId
);
$where[] = $checkId;
$reciepes=db_select($connection,"reciepes","*",$where);
// print_r($reciepes);
if(count($reciepes) > 0){
  $reciepe = $reciepes[0];
?>

    <label for="name" id="labeln">Name of the cooking</label>
    <input type="text" name="name" value="<?php echo $reciepe['name_cooking']; ?>" id="namefood"><br><br>
    <label for="description" id="labeldes">Description of the cooking</label>
    <input type="text" name="description" value="<?php echo $reciepe['descrition']; ?>"  id="description"> <br><br>
    <label for="ingredients" id="labelingr">Ingredients of the cooking...please after any step put ","</label>
  
    <textarea  name="ingredients"  id="ingredients"><?php echo $reciepe['ingredients']; ?> </textarea><br><br>
    <!-- <input type="hidden" name="form" value="upload_image" id="inputhid"> -->
    <label for="image" id="inputhid"> Select image to upload:</label>
    <input type="file" name="image" value="" multiple="" id="inputfile"> 
    <img id="food" src="<?php echo ROOT_PATH; ?>assets/img/menu/<?=$reciepe['image_url']?>"></a> <br><br>
    <input type="submit" name="submit" value="update" id="upload"><br>

</form>
<?php } ?>
</body>
</html>