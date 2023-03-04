<?php
include('config.php');
include('./includes/header.php');
?>

<div id="wrapper">
<main> 
<h1>Welcome to Our athletes Database!</h1>
<?php      
$sql = 'SELECT *FROM athletes';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));
$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0) {

while($row = mysqli_fetch_assoc($result)) {

    echo '
    <h2>Information about: '.$row['first_name'].'</h2>
    <ul>
    <li><b>First Name:  </b> '.$row['first_name'].'</li>
    <li><b>Last Name:  </b> '.$row['last_name'].'</li>
    <li><b>BirthDate:  </b> '.$row['birthdate'].'</li>
    </ul>
    <p>For more information about '.$row['first_name'].', click <a href="athletes-view.php?id='.$row['athletes_id'].' ">here</a> </p>
    ';
}
} else {

echo 'Nobody is home';
}
@mysqli_free_result($result);
@mysqli_close($iConn);

?>
</main>
<aside>
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
 
    }
    echo random_images($photos);
    ?>

</aside>
</div>

<?php
include('./includes/footer.php');
