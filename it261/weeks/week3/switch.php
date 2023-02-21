<?php

// if(isset($variable)){
//     echo 'Variable has been set';
// } else

// echo 'Variable has not been set!';

// echo '<br>';

// if(isset($_GET['today'])) {
//     echo 'Today has been set';
// } else {
//     echo 'NOT!!!';
// }

if(isset($_GET['today'])) {
 $today = $_GET['today'];
} else {
    $today = date('l');
}

switch ($today) {
 case 'Friday' :
$coffee = '<h2>Friday is Our Pumpkin Latte Day!</h2>';
$pic = 'pumpk.jpg';
$alt = 'pumpkin Latte';
$content = '<p> A green tea latte</b> is simply a latte made with green tea 
instead of espresso. Traditional lattes are a blend of steamed milk and espresso,
but in a green tea latte, we remove the coffee and use tea in its place.</p>';
break;

case 'Saturday' :
$coffee = '<h2>Saturday is Our Green Tea Latte Day!</h2>';
$pic = 'green.jpg';
$alt = 'Green Tea';
$content = '<p>
A green tea latte</b> is simply a latte made with green tea 
instead of espresso. Traditional lattes are a blend of steamed milk and espresso,
but in a green tea latte, we remove the coffee and use tea in its place.</p>';
break;

case 'Sunday' :
$coffee = '<h2>Sunday is Our Regular Joe Day!</h2>';
$pic = 'coffe.jpg';
$alt = 'Regular Coffee';
$content = '<p>
<b>Regular coffee served</b> is a medium roast coffee called Pike Place, but Starbucks offers other 
varieties as well. Read the list of roasts above the counter ahead of time, because they may not ask you which you would like.</p>';
break;

case 'Monday' :
$coffee = '<h2>Monday is our Latte Day!</h2>';
$pic = 'lattee.jpg';
$alt = 'Latte';
$content = '<p> <b>What does a latte</b> do to your body?
A cup of latte in moderation helps in preventing cardiovascular disorders and aid in burning fat. Turmeric, beetroot or any other natural flavoured lattes make your skin glow, work as memory boosters,
relieve muscle pains and fight infections.</p>';
break;

case 'Tuesday' :
$coffee = '<h2>Tuesday is Our Americano Day!</h2>';
$pic = 'americano.jpg';
$alt = 'Americano';
$content = '<p> <b>Caffè Americano</b> is a type of coffee drink prepared by diluting an espresso with hot water, giving it a similar strength to, but different flavor from, traditionally brewed coffee. Its strength varies with the 
number of shots of espresso and amount of water added..</p>';
break;

case 'Wednesday' :
$coffee = '<h2>Wednesday is Our Frapaccino Day!</h2>';
$pic = 'frapp.jpg';
$alt = 'Americano';
$content = '<p> <b>Frappuccino is a line of blended iced coffee</b> drinks sold by Starbucks. It consists of coffee or crème base, blended with ice and ingredients such as flavored syrups and usually topped with whipped cream and or .</p>';
break;

case 'Thursday' :
$coffee = '<h2>Thursday is Our Cappuccino Day!</h2>';
$pic = 'capp.jpg';
$alt = 'Americano';
$content = '<p> <b>A cappuccino is an espresso-based coffee</b> drink that originated in Austria and was later popularized in Italy and is prepared with steamed milk foam. Variations of the drink involve the use of cream instead of milk, using non-dairy milk substitutes and flavoring with cinnamon or chocolate powder. .</p>';
break;

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatable" content="ie=edge">
    <title>Switch Classwork Exercise</title>
    <style>
    * {
        padding:0;
        margin:0;
        box-sizing:border-box;
    }
#wrapper {
    width:940px;
    margin:20px auto;
}

h1, h2, img {
    margin-bottom:10px;
}
p {
    margin-bottom:20px;
}
    </style>
</head>
<body>
<div id="wrapper">
<h1>My Wonderful Switch Classwork Exercise (Not the daily homework)</h1>
<?php
echo $coffee;
?>
<img src="./images/<?php echo $pic;?>" alt="<?php echo $alt;?>">
<?php echo $content; ?>
<h2>Check out our Daily Specials!</h2>
<ul>
    <h1>Days of the week</h1>
 <li><a href="switch.php?today=Sunday">Sunday</a></li>
 <li><a href="switch.php?today=Monday">Monday</a></li>
 <li><a href="switch.php?today=Tuesday">Tuesday</a></li>
 <li><a href="switch.php?today=Wednesday">Wednesday</a></li>
 <li><a href="switch.php?today=Thursday">Thursday</a></li>
 <li><a href="switch.php?today=Friday">Friday</a></li>
 <li><a href="switch.php?today=Saturday">Saturday</a></li>

</ul>
</div>
<!---end wrapper--->
</body>
</html>






