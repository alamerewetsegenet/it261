<?php 
include('config.php');
include('./includes/header.php'); 
    
   
    $photos[0] = 'photo1';
    $photos[1] = 'photo2';
    $photos[2] = 'photo3';
    $photos[3] = 'photo4';
    $photos[4] = 'photo5';

    function random_images($photos){
      $my_return ='';
      $i = rand(0,4); 
      $selected_image =''.$photos[$i].'.jpg';
      $my_return = '<img src="./images/'.$selected_image.'" alt="'.$photos[$i].'">';
      return $my_return;
 
    }//end function
    echo random_images($photos);
    ?>

    <!--end hero-->
    
    <aside>
       <h3>Space Needle Fun Facts</h3>
       <p>The Space Needle is privately owned by the Wright family and sits on a 120-foot by 120-foot private parcel of land on the Seattle Center campus. The Space Needle is the only private property on the Seattle Center's 74-acre campus. The Space Needle stands at 605 feet tall. </p> 
    </aside>
  
    <!--end-->
    <?php
    include('./includes/footer.php');


    