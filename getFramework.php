<!DOCTYPE html>


<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Framework</title>
    <meta name="description" content="Home - Framework Baier Binet">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/main.css">
</head>
<body>

<h2> Baier Binet Framework </h2>
<ul class="navbar">
    <li><a href="index.html"> Home </a> </li>
    <li><a href="typo.html"> Typography </a> </li>
    <li><a href="buttons.html"> Buttons </a> </li>
    <li><a href="alerts.html"> Alerts </a> </li>
    <li><a href="grid.html"> Grid </a> </li>
    <li><a href="list.html"> Lists elements </a> </li>
    <li><a class="active" href="getFramework.php"> Download </a> </li>
</ul>

<div class="container">
    <h5>Please choose the download type file.</h5>
    <?php
        echo '<a href="https://github.com/baier2u/Baier_Binet_Framework/archive/v1.0.0-beta.zip"><button>Download (.zip)</button></a>';
        echo '<a href="https://github.com/baier2u/Baier_Binet_Framework/archive/v1.0.0-beta.tar.gz"><button>Download (.tar.gz)</button></a>';
    ?>
    <h5>Then, include files in your project and use Framework CSS or SASS version to develop your Website.</h5>
</div>
</body>
</html>
