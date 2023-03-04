<?php

ob_start();

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE) {
    case 'index.php' :
    $title = 'Home page of our Website Project';
    $body = 'home';
    break;

    case 'about.php' :
    $title = 'About page of our Website Project';
    $body = 'about inner';
    break;

    case 'daily.php' :
    $title = 'Daily page of our Website Project';
    $body = 'daily inner';
    break;

    case 'project.php' :
    $title = 'Project page of our Website Project';
    $body = 'project inner';
    break;

    case 'contact.php' :
    $title = 'Contact page of our Website Project';
    $body = 'contact inner';
    break;

    case 'gallery.php' :
    $title = ' Gallerypage of our Website Project';
    $body = 'gallery inner';
    break;

}
//our  navigational array
$nav = array(
    'index.php' => 'Home',
     'about.php' => 'About',
      'daily.php' => 'Daily',
       'athletes.php' => 'Athletes',
        'contact.php' => 'Contact',
         'gallery.php' => 'Gallery',     
);
function make_links($nav){
$myreturn = '';
foreach($nav as $key => $value) {
if(THIS_PAGE == $key) {
$myreturn .= '<li><a class="current" href="'.$key.'">'.$value.'</a><li>';
}else{
$myreturn .= '<li><a href="'.$key.' ">'.$value.' </a></li>';

}

}//end foreach

return $myreturn;

}//end function
    

//this the begining of the switch for homework 3

if(isset($_GET['today'])) {
    $today = $_GET['today'];
   } else {
       $today = date('l');
   }
   
   switch ($today) {
   case 'Friday' :
   $coffee = '<h2>Friday is our Chicken and Waffles Day !</h2>';
   $pic = './images/waffel.jpg';
   $alt = 'Waffel';
   $content = '<p> While you may find <b>chicken and waffles </b>appearing on many brunch menus, it is typically 
   appropriate to order it either day or night. This means you have a great excuse to enjoy crispy fried chicken for breakfast or
   a sweet waffle for dinner any time you want..</p>';
    break;
   
   case 'Saturday' :
   $coffee = '<h2>Saturday is our Breakfast Sandwitch Day!</h2>';
   $pic = './images/sandwitch.jpg';
   $alt = 'Sandwitch';
   $content = '<p>
   <b>A breakfast sandwich</b> is any sandwich filled with foods associated with breakfast.
    Breakfast sandwiches are served at fast food restaurants and delicatessens, sold in
    supermarkets, or commonly made at home..</p>';
   break;
   
   case 'Sunday' :
   $coffee = '<h2>Sunday is Our German Pancake Day!</h2>';
   $pic = './images/pancake.jpg';
   $alt = 'Pancake';
   $content = '<p>
   Piping hot and puffy from the oven,<b> this golden pancake</b> made a pretty presentation for a skier\'s theme breakfast I hosted. Served with homemade buttermilk syrup, it\'s an eye-opening treat. 
   Make several German pancakes if you\'re feeding a crowd, and keep in mind that my easy syrup
   tastes great on waffles and French toast, too. —Renae Moncur, Burley, Idaho</p>';
   break;
   
   case 'Monday' :
   $coffee = '<h2>Monday is our Cream Cheese & Chive Omelet Day!</h2>';
   $pic = './images/omelete.jpg';
   $alt = 'Omlete';
   $content = '<p> <b>The first bite of creamy</b> filling lets you know this isn’t any old omelet. 
   Make it once, and we suspect 
   you will be fixing it often. —Anne Troise, Manalapan, New Jersey.</p>';
   break;
   
   case 'Tuesday' :
   $coffee = '<h2>Tuesday is Our Cereal Day!</h2>';
   $pic = './images/cereal.jpg';
   $alt = 'Cereal';
   $content = '<p> <b>Whats better than exploring the cereal</b> aisle at a grocery store? With a large variety of 
   flavors, theres a cereal option out there for everyone. Cereal is another quick and easy breakfast option, 
   particularly when trying to get kids out the door in the morning – just add milk and enjoy!</p>';
   break;
   
   case 'Wednesday' :
   $coffee = '<h2>Wednesday is Our Avocado Toast Day!</h2>';
   $pic = './images/avacado.jpg';
   $alt = 'Avocado';
   $content = '<p> With new health food trends emerging in America all the time, avocado toast has found a place on this list. Not only is this a delicious breakfast choice, but it also contains a ton of nutrients and antioxidants your body needs to function.
   <b>Avocado toast </b>is also easy to customize. Choose your favorite type of bread and top it off with vegetables and seasonings of your liking.
   Colony Diner Favorite:Avocado Toast </p>';
   break;

   case 'Thursday' :
   $coffee = '<h2>Thursday is Our Oatmeal Day!</h2>';
   $pic = './images/oatmeal.jpg';
   $alt = 'Oatmeal';
   $content = '<p> <b>Oatmeal is a preparation </b> of oats that have been de-husked, steamed, and flattened, or a coarse flour of hulled oat
   grains that have either been milled or steel-cut. Ground oats are also called white oats. Steel-cut oats are known as coarse oatmeal,
   Irish oatmeal, or pinhead oats.</p>';
   break;
   
   case 'Friday' :
   $coffee = '<h3>Friday is Our French Toast Day!</h3>';
   $pic = './images/toast.jpg';
   $alt = 'Toast';
   $content = '<p> Don\'t be confused by the name,<b> “French” Toast  Americans</b> love it too! This sweet, 
   flavorful breakfast meal is adored by breakfast lovers everywhere. Many people find it to be a comforting option, 
   reminding them of their childhood and happy Sunday mornings</p>';
   break;
   
   
   }


   //myform's PHP 

$first_name ='';
$last_name = '';
$email = '';
$phone = '';
$brand = '';
$contact = '';
$returns = '';
$privacy = '';
$comments = '';
$first_name_err ='';
$last_name_err ='';
$email_err ='';
$phone_err ='';
$brand_err ='';
$contact_err ='';
$privacy_err ='';
$returns_err ='';
$comments_err ='';


if($_SERVER['REQUEST_METHOD'] == 'POST'){

if(empty($_POST['first_name'])){
$first_name_err = 'please fill out first name';
} else {
    $first_name = $_POST['first_name'];
}

if(empty($_POST['last_name'])){
$last_name_err = 'please fill out lats name';
} else {
    $last_name = $_POST['last_name'];
}

if(empty($_POST['email'])){
$email_err = 'please fill out your email so that we can span you!';
} else {
    $email = $_POST['email'];
}
if(empty($_POST['contact'])){
$contact_err = 'please fill out last contact';
} else {
    $contact = $_POST['contact'];
}
if(empty($_POST['brand'])) {
$brand_err = 'What, no brand?';
} else {
     $brand =$_POST['brand'];
}


if(empty($_POST['phone'])) {
$phone_err = 'Your phone number please!';
} elseif(array_key_exists('phone',$_POST)) {
if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/',$_POST['phone']))
{
$phone_err ='Invalid format!';
} else{
$phone = $_POST['phone'];
}
}

if(empty($_POST['comments'])){
$comments_err = 'describe what\'s wrong with items:';
} else {
    $comments = $_POST['comments'];
}

if(empty($_POST['privacy'])){
$privacy_err = 'please agree to our privacy policy';
} else {
    $privacy = $_POST['privacy'];
}


if($_POST['returns'] == NULL) {
$returns_err = 'please select your reason!';
} else {
    $returns = $_POST['returns'];
}

//brand function

function my_brand($brand) {
$my_return = '';

if(!empty($_POST['brand'])) {
$my_return = implode(', ', $_POST['brand']);
}else {
    $brand_err = 'Please fill out your brand brand!';
}
return $my_return;

} 

if(isset($_POST['first_name'],
$_POST['last_name'],
$_POST['email'],
$_POST['contact'],
$_POST['brand'],
$_POST['returns'],
$_POST['comments'],
$_POST['privacy'],
$_POST['phone'])){

$to = 'szemeo@mystudentswa.com';
$subject = 'Test Email on' .date('m/d/y, h i A');
$body = '
First Name : '.$first_name.' '.PHP_EOL.'
Last Name : '.$last_name.' '.PHP_EOL.'
Email: '.$email.' '.PHP_EOL.'
Contact: '.$contact.' '.PHP_EOL.'
Phone: '.$phone.' '.PHP_EOL.'
Returns: '.$returns.' '.PHP_EOL.'
Brand: '.my_brand($brand).' '.PHP_EOL.'
Comments: '.$comments.' '.PHP_EOL.'
';

$headers = array(
'From' => 'noreply@mystudentswa.com'
);
if(!empty($first_name && 
$last_name && 
$email && 
$contact && 
$phone && 
$returns && 
$brand && 
$comments)){

mail($to, $subject, $body, $headers);
header('Location:thx.php');

}
}

}
?>
<?php

//config file

ob_start();  // prevents header errors before reading the whole page!
define('DEBUG', 'TRUE');  // We want to see our errors

include('credentials.php');

 

 

 

 

 

 

 

 

function myError($myFile, $myLine, $errorMsg)
{
if(defined('DEBUG') && DEBUG)
{
 echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
      echo 'Error message: <b> '.$errorMsg.'</b>';
      die();
  }  else {
      echo ' Houston, we have a problem!';
      die();
  }
    
    
}




