<?php
include('config.php');

if(isset($_GET['id'])){
    $id = (int)$_GET['id'];
}else {
    header('Location:athletes.php');
}

$sql = 'SELECT * FROM athletes WHERE athletes_id = '.$id.'';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) 
or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));


if(mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
$first_name = stripcslashes($row['first_name']);
$last_name = stripcslashes($row['last_name']);
$email = stripcslashes($row['email']);
$birthdate = stripcslashes($row['birthdate']);
$medal = stripcslashes($row['medal']);
$blurb = stripcslashes($row['blurb']);
$details = stripcslashes($row['details']);
$feedack ='';



}

} else { 

$feedback = 'There is a problem!!!';

} 

include('./includes/header.php');
?>

<div id="wrapper">
<main>
<h1>Welcome to our athletes view Page!</h1>  
<h2>Introducing you to <?php  echo $first_name ;?>'s Page</h2>
<ul>
<?php
echo '
<li><b>First Name:  </b>'.$first_name.'</li>
<li><b>Last Name:  </b>'.$last_name.'</li>
<li><b>Email:  </b>'.$email.'</li>
<li><b>Birthdate:  </b>'.$birthdate.'</li>
<li><b>medal:  </b>'.$medal.'</li>
<li>
<p>'.$details.'</p>
</li>
';
?>
</ul>
<p><a href="athletes.php">Return to the peope page!</a></p>
</main>

<aside>
<figure>
<img src="./images/athletes<?php echo $id;?>.jpg" alt="<?php echo $first_name;?>">
<figcaption>
<?php 
    echo '
    '.$first_name.' '.$last_name.', '.$medal.'
    
    ';    
    ?>
    
</figcaption>
</figure>
<p><i><?php 
echo $blurb;

?></i></p>
</aside>



<?php
@mysqli_free_result($result);

@mysqli_close($iConn);

?>

</div>

<?php
include('./includes/footer.php');
?>