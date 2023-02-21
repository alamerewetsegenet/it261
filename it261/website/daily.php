
<?php 
include('config.php');
include('./includes/header.php'); ?>
<div id="wrapper">

    <main>
       <?php echo $coffee; ?>
       <?php echo $content; ?>
    <ul>   
        <li><a style="color:<?php
             if($today == 'Sunday' ) {
                echo 'Orange';
             } else{
                echo 'blue';
             } ; ?>" href="daily.php?today=Sunday">Sunday</a></li>

            <li><a style="color:<?php
             if($today == 'Monday' ) {
                echo 'yellow';
             } else{
                echo 'blue';
             } ; ?>" href="daily.php?today=Monday">Monday</a></li>

            <li><a style="color:<?php
             if($today == 'Tuesday' ) {
                echo 'red';
             } else{
                echo 'blue';
             } ; ?>" href="daily.php?today=Tuesday">Tuesday</a></li>

             <li><a style="color:<?php
             if($today == 'Wednesday' ) {
                echo 'white';
             } else{
                echo 'brown';
             } ; ?>" href="daily.php?today=Wednesday">Wednesday</a></li>

             <li><a style="color:<?php
             if($today == 'Thursday' ) {
                echo 'green';
             } else{
                echo 'green';
             } ; ?>" href="daily.php?today=Thursday">Thursday</a></li>

             <li><a style="color:<?php
             if($today == 'Friday' ) {
                echo 'aqua';
             } else{
                echo 'blue';
             } ; ?>" href="daily.php?today=Friday">Friday</a></li>

             <li><a style="color:<?php
             if($today == 'Saturday' ) {
                echo 'brown';
             } else{
                echo 'blue';
             } ; ?>" href="daily.php?today=Saturday">Saturday</a></li>
</ul>
</main>
<aside>  
<img src="<?php echo $pic ;  ?>" alt="<?php echo $alt; ?>">
    </aside>
            </div>

   
        
    <!--end-->
    <?php
    
    include('./includes/footer.php');


    