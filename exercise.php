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
    $minmonth;
    $minval = 1000;
    $totdays = 0;
    $monthDays = array ('Splorch' => 23, 'Sploo' => 28,
                            'Splat' => 2, 'Splatt' => 3,
                            'Spleen' => 44, 'Splune' => 30,
                            'Spling' => 61, 'Slendo' => 61,
                            'Sploctember' => 31, 'Splictember' => 31,
                            'Splanet' => 30, 'TheRest' => 22);
        foreach($monthDays as $x => $xval)
        {
            if($xval <= $minval)
            {
                $minmonth = $x;
                $minval = $xval;
            }
            $totdays += $xval;
        }
     echo "The number of days in the shortest month is $minval."
     <br>".The name of the shortest month is $minmonth."<br>".Total number of days in a year are $totdays;

?>
</body>
</html>