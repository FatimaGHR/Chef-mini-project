<?php
    $connection = db_connect($db_server, $db_user, $db_user_pass, $db_name);
    $countries = db_select($connection,"countries","*");
?>

    <div class="container-fluid cont7">
        <nav class="nav">
            <?php
                if(count($countries) > 0){

                    foreach($countries as $key => $country){ ?>
                        <a class="nav-link" href="#<?php echo $country['name']; ?>"><?php echo $country['name']; ?></a>
                <?php
                    }// end foreach
                } //end if
            ?>
        </nav>
    </div>
    <div class="row headcatagry">
        <h1></h1>
    </div>
    
    
  
  <?php

    // print_r($countries);
    
    // $countries = db_select($connection,"countries","*");
    if(count($countries) > 0){

        foreach($countries as $key => $country){
            // print_r($country);
    ?>
        <h1 class="contryline" style="padding-top:40px;"><?php echo $country['name']; ?> Food</h1>
        <div class="continer  catagoriesgrid" id="<?php echo $country['name']; ?>" style="margin-left:250px;">
        <?php 
            // echo "==========================".$country['id']."<br>";
            // $connection = db_connect($db_server, $db_user, $db_user_pass, $db_name);
            // print_r($connection);
            $checkCountryId = array(
                "column" => "country_id",
                "operator" => "=",
                "value" => $country['id']
            );
            $where[] = $checkCountryId;
            $reciepes=db_select($connection,"reciepes","*",$where);
            // print_r($reciepes);
            if(count($reciepes) > 0){
                foreach($reciepes as $key => $reciepe){
        ?>    
                    <div class="column2 ">
                        <a  href="<?php echo ROOT_PATH; ?>details?id=<?php echo $reciepe['id']; ?>">
                        <img src="<?php echo ROOT_PATH; ?>assets/img/menu/<?=$reciepe['image_url']?>"></a>
                        <h4><?=$reciepe['name_cooking']?></h4>
                        <p><?=$reciepe['descrition']?><br><br></p>
                        <?php
        if(isset($_SESSION['isSignedIn']) && $_SESSION['isSignedIn']){
      ?>
      <a href="<?php echo ROOT_PATH; ?>admin/updatereciepe?id=<?php echo $reciepe['id']; ?> " 
      class="adds scrollto d-none d-lg-flex" style="border: 2px solid #cda45e;
      border-radius: 50px;text-transform: uppercase;letter-spacing: 1px; transition: 0.3s;margin-left:30px;
      text-align: center;display: flex; justify-content: center;align-items: center;">Update Reciepe</a>
      <a href="<?php echo ROOT_PATH; ?>admin/deletereciepe?id=<?php echo $reciepe['id']; ?> " class="adds scrollto d-none d-lg-flex" style="border: 2px solid #cda45e;
      border-radius: 50px;text-transform: uppercase;letter-spacing: 1px; transition: 0.3s;margin-left:30px;
      text-align: center;display: flex; justify-content: center;align-items: center;">Delete Reciepe</a>
      <?php } ?>
                    </div> 
        <?php 
                    } // end foreach
                    unset($where);
                } // end if
        ?>
        </div>

        <?php
        } // end foreach

    } // end if
?>  