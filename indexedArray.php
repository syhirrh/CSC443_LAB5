<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $month = array ("January", "February", "March", "April","May", "June", "July", "August", "September", "October", "November", "December");     
    sort($month);
    foreach($month as $key => $val)
    {
       echo "The value of key $key is: $val<br>";
    }

?>
</body>
</html>