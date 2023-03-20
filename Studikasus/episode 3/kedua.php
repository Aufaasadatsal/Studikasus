<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1-2</title>
</head>
<body>
    
<form action="" method="get">
    <table>
        <tr>
            <td><label for="n1">Nilai 1</label></td>
            <td><input type="number" name="n1" id="n1"></td>
        </tr>
        <tr>
            <td><label for="n2">Nilai 2</label></td>
            <td><input type="number" name="n2" id="n2"></td>
        </tr>
        <tr>
            <td><label for="n3">Nilai 3</label></td>
            <td><input type="number" name="n3" id="n3"></td>
        </tr>
        <tr>
            <td><button type="submit" name="submit">Kirim</button></td>
        </tr>
    </table>
</form>


<?php
if(isset($_GET["submit"])){
$n1=$_GET["n1"];
$n2=$_GET["n2"];
$n3=$_GET["n3"];

$numbers=array($n1,$n2,$n3);
sort($numbers);


echo "Ini adalah bilangan menengah " . $numbers[1];
}
?>