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
$monthDays = array ("January"  => 31 , "February"  => 30 , 
                    "March"  => 31 , "April"  => 30 ,
                    "May"  => 31 , "June"  => 30 , 
                    "July"  => 31 , "August"  => 31 , 
                    "September"  => 30 , "October"  => 31 , 
                    "November"  => 30 , "December"  => 31 );

        echo "<table border='1'><tr><th>Month</th><th>Days</th></tr>";
        foreach($monthDays as $x => $xval)
        {
            if($xval => 30)
            {
                echo "<tr><td>".$x."</td><td>".$xval."</td></tr>";
            }
        }
        echo "</table>";
?>

</body>
</html>