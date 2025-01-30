<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
$cars = array ("volvo","Bmw","Toyota")
?>

<table border="2" >
<tr>
    <td> no </td>
    <td> car </td>
</tr>
<tr>
    <td>1</td>
    <td> <?php echo $cars[0] ?> </td>
</tr>
<tr>
    <td>2</td>
    <td> <?php echo $cars[1] ?> </td>
</tr>
<tr>
    <td>3</td>
    <td> <?php echo $cars[2] ?> </td>
</tr>
</table>
</body>
</html>