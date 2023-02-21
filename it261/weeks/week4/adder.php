<!DOCTYPE html>
<head>
<title>My Adder Assignment</title>
<link href="css/styles.css" type="text/css" rel="stylesheet">


</head>
<body>


<h1>Adder.php</h1> <form method ="post" action="">
<label>Enter the first number:</label><input type="text" name="num1"><br>
<label>Enter the second number:</label><input type="text" name="num2"><br>
<input type="submit" value="Add Em!!"> </form>

<?php
if (isset($_POST['num1'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $myTotal = $num1 + $num2;

    echo '<h2>You added '.$num1." and ".$num2. '</h2>';
    echo '<p> and the answer is <br> 
    <span style="color:red;">' .$myTotal.'</span></p>';
    
    echo '<p><a href="">Reset page</a></p>';
    }
?>

<!-- I also change -->
<!--On line 5 two typo error  -->
<!--On line 6 unclosed quote and quotation errors-->
<!--On line 8 I added span tag and,
 I changes the double quote after ">" to single quote, I put "."(concatenation) before $myTotal and
erase the double quote  and finally put a single quote '</span></p>'. -->

<!--On line 9  closing p tag missing-->
<!--On line 19 the opening form tag is missing-->
<!--On line 20 spelling error & method post missing -->
<!--20 and 21 opening and closing label tag was missing -->

</body>
</html>
