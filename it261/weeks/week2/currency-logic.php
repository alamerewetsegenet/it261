<?php
// $ruble_rate = 0.017;
// $pound_rate = 1.15;
// $canadian_rate = .76;
// $euro_rate =1.00;
// $yen_rate = .0074;

// $ruble = 10007;
// $pound = 500;
// $canadian = 5321;
// $euro = 1291;
// $yen = 4030;

// $ruble_converted = $ruble * $ruble_rate;
// $pound_conerted = $pound * $pound_rate;
// $canadian_conerted = $canadian * $canadian_rate;
// $euro_conerted = $euro * $euro_rate;
// $yen_conerted = $yen * $yen_rate;

// $total = $ruble_converted +  $pound_converted + $canadian_converted + $euro_converted + $yen_converted;
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, inital-scale=1.0">
        <meta http-equiv="X-UA-Compatable" content="ie=edge">
        <title>Currency Logic Exercise</title>
    <style>
* {
    padding: 0;
    margin: 0;
    box-sizing: border box;    
}
#wrapper {
    width: 500px;
    margin: 30px auto;    
}
table {
    border: 1px solid orange;
    border-collapse:collapse;
    width: 500px;
}
th, td {
    border:1px solid orange;
    padding: 8px;    
}
h1, h2, h3 {
    text-align:center;
}
    </style>
</head>
<body>
<div id="wrapper">
<h1>After our world-wind travels, we have returned home with the following currencies</h1>
<u1>
<li>Rubles</li>
<li>Pound sterling</li>
<li>Canadian Dollar</li>
<li>Euros</li>
<li>Yens</li>

</ul>
<h2>Whatever shall we do?</h2>

<table>
<tr>
<th colspan="2">Currency</th>
<th>Dollars</th>

</tr>
<tr>
<th>Rubles</th>
<td>10007</td>
<td>117.11</td>
</tr>
<tr>
<th>Pound sterlings</th>
<td>500</td>
<td>575</td>
</tr>
<tr>
<th>Canadian Dollars</th>
<td>5000</td>
<td>3800</td>
</tr>
<tr>
<th>Euros</th>
<td>1200</td>
<td>1200</td>
</tr>
<tr>
<th>Yens</th>
<td>2000</td>
<td>14.80</td>
</tr>
</table>
</div>
<!--end wrapper -->

</body>
</html>