<?php
// concatenation
// operators - assignment operators
// some preset functions
// arrays 

 $name = 'Etsegeent';
 $first_name = 'Etsegenet';
 $last_name = 'Alamerew';
echo '<br>';
$name = 'Etsegenet';
$name .= ' Alamerew';
echo $name;

echo '<br>';

$color ='red';
echo $color;

echo '<br>';
echo 'Etsegenet\'s  favorite color is '.$color.' ';
echo '<br>';

$x = 20;
$y = 5;
$z = $x + $y;
echo $z;
echo '<br>';

$x =20;
$x += 5;
echo $x;
echo '<br>';

$X = 100;
$x *=10;
echo $x;
echo '<br>';
echo '<h3>Our, product quantity and tax exercise</h3>';
$product = 120;
$quantity = 5;
$total = $product * $quantity;
$total *= 1.097;
echo $total;
echo '<h3>We would like our amount to refelect 2 decimal places -- we are thinking about floats and a new function-number_format()</h3>';

$product = 120;// is our integer
$quantity = 5;
$total = $product * $quantity;
$total *= 1.105;
$total_friendly = number_format($total, 2);
echo 'We have a total of $'.$total_friendly.' dollars';
echo '<br>';

$product = 120;// is our integer
$quantity = 5;
$total = $product * $quantity;
$total *= 1.105;
$total_friendly = number_format($total, 2);
echo 'We have a total of $'.number_format($total, 2).'dollars';
echo '<br>';

echo '<hs>Our second prsent function is our date function!</h3>';
echo '<br>';
echo '<br>';

echo date('Y');
echo '<br>';
echo date('l'); 
echo '<br>';
echo date("l jS \of F Y h:i:s A");
echo '<br>';
echo date("l jS \of  F Y h:i:s A");
echo '<br>';
date_default_timezone_set('America/Los_Angeles');
echo '<br>';
echo date("l jS \of  F Y h:i:s A");
echo '<h3>Time for an array!</h3>';
echo '<h3>Below is an indexed array!</h3>';
//can we echo an array??? no we cannot 
$fruit[]= 'bananas';//0
$fruit[] = 'cherries';//1
$fruit[] = 'melon';//2
$fruit[] = 'kiwi';
$fruit[] = 'oranges';
$fruit[] = 'apples';

echo $fruit;
echo '<br>';
echo $fruit[2];

$fruit = array(
     'bananas',
     'cherries',
     'melon',
     'kiwi',
     'oranges',
     'apples',
);
$fruit = [
    'bananas',
     'cherries',
     'melon',
     'kiwi',
     'oranges',
     'apples'
];
echo '<br>';
print_r($fruit);
echo '<br>';
var_dump($fruit);

echo '<h3>Now we have an associative array</h3>';

$nav = array(
      'index.php' => 'Home', //index 
      'about.php' => 'About',
      'daily.php' => 'Daily',
      'project.php' => 'project',
      'contact.php' => 'Contract',
      'gallery.php' => 'Gallery',
);

echo '<pre>';
var_dump($nav);
echo '</pre>';



