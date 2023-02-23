<?php
include('config.php');
include('./includes/header.php');
?>

<div id="wrapper">
<main> 
<h1>Welcome to Our People Database Classs Exercise!</h1>
<?php      
$sql = 'SELECT *FROM people';

//we have to connect to our database

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) //If we cannot extract data....
or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

//we are asking if the number of rows is greater than 0

if(mysqli_num_rows($result) > 0) {
//we will be reading those rows with a while loop

while($row = mysqli_fetch_assoc($result)) {

    echo '
    <h2>Information about: '.$row['first_name'].'</h2>
    <ul>
    <li><b>First Name:  </b> '.$row['first_name'].'</li>
    <li><b>Last Name:  </b> '.$row['last_name'].'</li>
    <li><b>BirthDate:  </b> '.$row['birthdate'].'</li>
    </ul>
    <p>For more information about '.$row['first_name'].', click <a href="people-view.php?id='.$row['people_id'].' ">here</a> </p>
    ';
}//end while



} else {//end if number of rows is greater than 0

echo 'Nobody is home';
}

//we are going to release the server 
@mysqli_free_result($result);

//close the connection
@mysqli_close($iConn);

?>
</main>
<aside>
    <h3>I willl display my random images here!</h3>
    <?php
    $photos[0] = 'photo1-1';
    $photos[1] = 'photo2-1';
    $photos[2] = 'photo3-1';
    $photos[3] = 'photo4-1';
    $photos[4] = 'photo5-1';

    function random_images($photos){
      $my_return ='';
      $i = rand(0,4); 
      $selected_image =''.$photos[$i].'.jpg';
      $my_return = '<img src="./images/'.$selected_image.'" alt="'.$photos[$i].'">';
      return $my_return;
 
    }//end function
    echo random_images($photos);
    ?>

</aside>
</div>
<!---end wrapper-->

<?php
include('./includes/footer.php');