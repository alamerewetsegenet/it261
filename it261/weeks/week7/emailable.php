<?php
ob_start();

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


if(empty($_POST['phone'])) {//if empty, type in your number
$phone_err = 'Your phone number please!';
} elseif(array_key_exists('phone',$_POST)) {
if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/',$_POST['phone']))
{//if you are not typing the requested format of xxx-xxx-xxxx, display invalid format
$phone_err ='Invalid format!';
} else{
$phone = $_POST['phone'];
}//end else
}//end mainif

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

}//end of the function 

if(isset($_POST['first_name'],
$_POST['last_name'],
$_POST['email'],
$_POST['contact'],
$_POST['brand'],
$_POST['returns'],
$_POST['comments'],
$_POST['privacy'],
$_POST['phone'])){

$to = 'bw.etsegenetalamerew.com';
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
'From' => 'noreply@etsegenet.com'
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
}//end isset

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 1 in week 6</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])  ;?>" method="post">
<fieldset>
<legend><b>Contact Etsegenet</b></legend>

<label>First Name</label>
<input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name'])  ;?>">
<span class="error"><?php echo $first_name_err  ;?></span>
<label>Last Name</label>
<input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name'])  ;?>">
<span class="error"><?php echo $last_name_err  ;?></span>

<label>Email</label>
<input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email'])  ;?>">
<span class="error"><?php echo $email_err  ;?></span>

<label>Phone</label>
<input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']) ;?>">
<span class="error"><?php echo $phone_err  ;?></span>

<label>Favorite Brand</label>
<ul>
<li>
<input type="checkbox" name="brand[]" value="air" <?php if(isset($_POST['brand']) && in_array('air', $brand)) echo 'checked ="checked"'  ;?>>Air Jordan
</li>
<li>
<input type="checkbox" name="brand[]" value="golf" <?php if(isset($_POST['brand']) && in_array('golf', $brand)) echo 'checked ="checked"'  ;?>> Golf
</li>
<li>
<input type="checkbox" name="brand[]" value="force" <?php if(isset($_POST['brand']) && in_array('force', $brand)) echo 'checked ="checked"'  ;?>>Force
</li>
<li>
<input type="checkbox" name="brand[]" value="blazers" <?php if(isset($_POST['brand']) && in_array('blazers', $brand)) echo 'checked ="checked"'  ;?>>Blazers
</li>
<li>
<input type="checkbox" name="brand[]" value="pro" <?php if(isset($_POST['brand']) && in_array('pro', $brand)) echo 'checked ="checked"'  ;?>>Pro
</li>
</ul>
<span class="error"><?php echo $brand_err  ;?></span>



<label>Contact</label>
<ul>
<li>
<input type="radio" name="contact" value="customer" <?php if(isset($_POST['contact']) && $_POST['contact'] == 'customer') echo 'checked ="checked"'     ;?>>Customer Service
</li>
</ul>
<ul>
<li>
<input type="radio" name="contact" value="seller" <?php if(isset($_POST['contact']) && $_POST['contact'] == 'seller') echo 'checked ="checked"'     ;?>>Contact Seller
</li>
</ul>
<ul>
<li>
<input type="radio" name="contact" value="trader" <?php if(isset($_POST['contact']) && $_POST['contact'] == 'trader')echo 'checked ="checked"'     ;?>>Contact Trader
</li>
</ul>
<span class="error"><?php echo $contact_err  ;?></span>




<label>Returns or replace items</label>
<select name="returns">
<option value="" NULL <?php if(isset($_POST['returns']) && $_POST['returns'] == NULL) echo 'selected = "unselected"';?>>Select One!</option>
<option value="price" <?php if(isset($_POST['returns']) && $_POST['returns'] == 'price') echo 'selected = "selected"';?>>Inaccurate website description!</option>
<option value="wrong" <?php if(isset($_POST['returns']) && $_POST['returns'] == 'wrong') echo 'selected = "selected"';?>>Wrong items was sent!</option>
<option value="mistake" <?php if(isset($_POST['returns']) && $_POST['returns'] == 'mistake') echo 'selected = "selected"';?>>Better price avaliable!</option>
<option value="missing" <?php if(isset($_POST['returns']) && $_POST['returns'] == 'missing') echo 'selected = "selected"';?>>Missing parts!</option>
</select>
<span class="error"><?php echo $returns_err  ;?></span>



<label>Comments</label>
<textarea name="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments'])  ;?></textarea>
<span class="error"><?php echo $comments_err  ;?></span>
<label>Privacy</label>
<ul>
<li>
<input type="radio" name="privacy"  value="yes" <?php if(isset($_POST['privacy']) && $_POST['privacy'] == 'yes')
 echo 'checked = "checked" '     ;?>>Privacy
</li>
</ul>
<span class="error"><?php echo $privacy_err  ;?></span>

<input type="submit" value="Send it!">
<input type="button" onclick="window.location.href='<?php echo $_SERVER['PHP_SELF'];  ?>'" value="Reset">
</fieldset> 
</form> 
</body>
</html>
    


