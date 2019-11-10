
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>GET Superglobal</title>
</head>

<body>

<?php
    //Add variable is set check to avoid "variable undefined" error
    if(isset($_GET['name'], $_GET['lang'])){
        //Add name value from $_GET to $name variable 
        $name = $_GET['name'];
        //Add  lang value from $_GET to $lang variable 
        $lang = $_GET['lang'];

        //Echo $name and $lang variables 
        echo '<p>' . $name . '</p>';
        echo '<p>' . $lang . '</p>';
    }
?>


    <!-- Form Input -->
    <form method="get" action="index.php">
    <input type="text" name="name">
    <input type="text" name="lang">
    <input type="submit" value="submit">
    </form>

</body>

</html>