
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
        <title><?php echo $title; ?> </title>
        <link href="css/styles.css" type="text/css" rel="stylesheet">

    </head>
    <body class="<?php echo $body ;?>">
    <header>
    <div class="inner-header">
    <a href="index.php">
    <img id="logo" src="http://en.wikipedia.org/wiki/Special:FilePath/PHP-logo.svg" alt="Logo">
    </a>
    <!-- <nav>
        <ul>
            <li><a hrfe="">Home</a></li>
            <li><a hrfe="">About</a></li>
            <li><a hrfe="">Daily</a></li>
            <li><a hrfe="">Project</a></li>
            <li><a hrfe="">Contact</a></li>
            <li><a hrfe="">Gallery</a></li>

        </ul>
    </nav> -->
<nav>
<ul>
<?php
echo make_links($nav);
?>
</ul>
</nav>
</div>
<!--end inner header-->
    </header>
