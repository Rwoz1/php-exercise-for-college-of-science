<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<div>
<?php
// هذي المحاضره تجريبيه 

# هذا امر الطباعه 
echo "My first PHP script!";
?>
</div>
<div>
<?php 

/*
المتغيرات 
*/
$love ="pip install love";
echo $love;


$x = 5;
$y = 4;
echo $x + $y;
?>
</div>
<div>
<?php

$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";

print '<h2>' . $txt1 . '</h2>';
print '<p>Study PHP at ' . $txt2 . '</p>';

?>
</div>

</body>
</html>