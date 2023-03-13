<?php
include('server.php');
//enentually, we will place our header include here!
include('./includes/header.php');

?>
<div id="wrapper">
<h1 class="center">Register Today!</h1>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post">
<fieldset>


<label>First name</label>
<input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']) ;?>">

<label>Last name</label>
<input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']) ;?>">

<label>Email</label>
<input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']) ;?>">


<label>Username</label>
<input type="text" name="username" value="<?php if(isset($_POST['username'])) echo htmlspecialchars($_POST['username']) ;?>">


<label>Password</label>
<input type="password" name="password_1" value="<?php if(isset($_POST['password_1'])) echo htmlspecialchars($_POST['password_1']) ;?>">

<label>Confirm Password</label>
<input type="password" name="password_2" value="<?php if(isset($_POST['password_2'])) echo htmlspecialchars($_POST['password_2']) ;?>">
<!--- use the reg_user name below!!!-->

<button type="submit" name="reg_user" class="btn">Register</button>

<button type="button" onclick="window.location.href='<?Php echo htmlspecialchars($_SERVER['PHP_SELF'])  ;?>' ">Reset</button>

<?php
include('errors.php');
?>

</fieldset>
</form>

<p class="center">Already have an account? <a href="login.php">Please login!</a></p>
</div>
<!---close wrapper div-->

<?php
include('./includes/footer.php');
