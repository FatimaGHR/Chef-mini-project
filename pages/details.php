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
              <h3><?php echo $reciepe['name_cooking']; ?></h3>
              <p class="fst-italic">
              <?php echo $reciepe['descrition']; ?>
              </p>
              <ul>
                <?php 
                $result=explode(',',$reciepe['ingredients']) ;
                foreach($result as $key => $valueli){

                ?>
                
                <li><i class="bi bi-check-circle"></i><?php echo $valueli; ?> </li>
                <!-- <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                 dolor in reprehenderit in voluptate trideta storacalaperda mastiro
                  dolore eu fugiat nulla pariatur.</li> --> <?php }?>
              </ul>
             
            </div>
          </div>
  
        </div>
      </section><!-- End  Section -->
<?php } ?>
      </body>