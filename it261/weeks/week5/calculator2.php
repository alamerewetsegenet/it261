<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">

</head>
<body>

    <h1>My Travel Calculator</h1>
<form action="<?php echo $_SERVER['PHP_SELF'] ;?>" method="post">
<fieldset>
    <label>Name</label>
    <input type="text" name="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']) ;?>">

    <label>Total miles driving </label>
    <input type="number" name="total_miles" value="<?php if(isset($_POST['total_miles'])) echo htmlspecialchars($_POST['total_miles']) ;?>">
    
    <label>How fast do you typically drive </label>
    <input type="number" name="average_speed" value="<?php if(isset($_POST['average_speed'])) echo htmlspecialchars($_POST['average_speed']) ;?>">

    <label>How many hours per day do you plan on driving?</label>
    <input type="number" name="hours_per_day" value="<?php if(isset($_POST['hours_per_day'])) echo htmlspecialchars($_POST['hours_per_day']) ;?>">


    <label>Price of gas</label>
    <ul>
    <li><input type="radio" name="gas_price" value="3.00" <?php if(isset($_POST['gas_price']) && $_POST['gas_price'] == 3.00)  echo 'checked="checked"';?>> $3.00 </li>
    <li><input type="radio" name="gas_price" value="3.50" <?php if(isset($_POST['gas_price']) && $_POST['gas_price'] == 3.50)  echo 'checked="checked"';?>> $3.50 </li>
    <li><input type="radio" name="gas_price" value="4.00" <?php if(isset($_POST['gas_price']) && $_POST['gas_price'] == 4.00)  echo 'checked="checked"';?>> $4.00 </li>

</ul>
    <label>Fuel efficiency</label>
    <select name="fuel_efficiency"> 
    <option value=""  NULL<?php if(isset($_POST['fuel_efficiency']) && $_POST['fuel_efficiency'] == NULL) echo 'selected = unselected"' ;?>>Select one!</option>
    <option value="40" <?php if(isset($_POST['fuel_efficiency']) && $_POST['fuel_efficiency'] == '40') echo 'selected = selected"' ;?>>Great @ 40mpg</option>
    <option value="10" <?php if(isset($_POST['fuel_efficiency']) && $_POST['fuel_efficiency'] == '10') echo 'selected = selected"' ;?>>Terrible @ 10mpg</option>
    </select>

    <input type="submit" value="Convert it">

    <p><a href="">Reset it!</a></p>
</fieldset>
</form>
<?php


if($_SERVER['REQUEST_METHOD'] == 'POST') {

if(empty($_POST['name'])){
    echo '<p class="error">Please fill out your name!</p>';

}
if(empty($_POST['total_miles'])){
    echo '<p class="error">Please fill out your total driving!</p>';

}
if(empty($_POST['average_speed'])){
    echo '<p class="error">Please fill out how fast will you be driving!</p>';

}
if(empty($_POST['hours_per_day'])){
    echo '<p class="error">How many hours per day would like to drive?</p>';

}
if(empty($_POST['gas_price'])){
    echo '<p class="error">Your cost of gas, please!</p>';
}
if($_POST['fuel_efficiency'] == NULL){
    echo '<p class="error">Please select your car\'s efficiency!</p>';
}

if(isset($_POST['name'],
$_POST['total_miles'],
$_POST['average_speed'],
$_POST['gas_price'],
$_POST['hours_per_day'],
$_POST['fuel_efficiency'])){
$name = $_POST['name'];
$total_miles= floatval($_POST['total_miles']);
$average_speed = floatval($_POST['average_speed']);
$gas_price = floatval($_POST['gas_price']);
$hours_per_day = floatval($_POST['hours_per_day']);
$fuel_efficiency = floatval($_POST['fuel_efficiency']);

$total_gallons = $total_miles / $fuel_efficiency;
$total_cost = $total_gallons * $gas_price;
$total_hours = $total_miles/50;
$total_days = $total_hours / $hours_per_day;

if(!empty($name && $hours_per_day && $total_days && $total_gallons && $total_cost)){

echo '
<div class="box">
<h2>Hello '.$name.',</h2>
<p>You will be travelling a total of <b>'.number_format($total_hours, 2).' hours, </b> taking <b>'.number_format($total_days).' days
</b> And, you will be using <b> '.$total_gallons.'gallons</b> of gas, costing you <b>$'.number_format($total_cost).' dollars</b>!</p>
</div>

';

}
}
}

?>
<footer>
        <ul>
            <li>Copyright &copy;2022</li>
            <li>All Rights Reserved</li>
            <li><a href="../index.php">Web Design by Etsegenet Alamerew</a></li>
            <li><a id="html-checker" href="#">HTML Validation</a></li>
            <li><a id="css-checker" href="#">CSS Validation</a></li>
        </ul>
            
            <script>
                    document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
                    document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);
            </script>
</footer>
</body>
</html>