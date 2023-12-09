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


  if($_SERVER['REQUEST_METHOD'] === "POST"){
   
      $reciepes=db_delete($connection,"reciepes",$where);
    if($reciepes > 0){
        header("Location: " .ROOT_PATH);
        exit;
    }
}


?>
 <!-- ======= detiles Section ======= -->
 <section id="about" class="about">
        <div class="container" data-aos="fade-up">
  
          <div class="row">
            <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
              <div class="about-img">
                <img src="<?php echo ROOT_PATH; ?>assets/img/menu/<?php echo $reciepe['image_url']; ?>" alt="">
              </div>
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
              <h3> Are you sure delete cooking the<span style="color: chocolate;
    font-size: 30px;font-weight: bold;"><?php echo $reciepe['name_cooking']; ?></span></h3>
              <form action="" method="POST"  id="formreciepe">
              <input type="submit" name="submit" value="delete" id="upload" style=" height: 50px;
              width: 100px;background-color: #cda45e;font-size: 18px;margin-left: 200px;"><br>
              </form>
            </div>
          </div>
  
        </div>
      </section><!-- End  Section -->
<?php } ?>
      </body>