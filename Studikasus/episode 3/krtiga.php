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
            <td><label for="sisi1">SISI 1</label></td>
            <td><input type="number" name="sisi1" id="sisi1"></td>
        </tr>
        <tr>
            <td><label for="sisi2">SISI 2</label></td>
            <td><input type="number" name="sisi2" id="sisi2"></td>
        </tr>
        <tr>
            <td><label for="sisi3">SISI 3</label></td>
            <td><input type="number" name="sisi3" id="sisi3"></td>
        </tr>
        <tr>
            <td><button type="submit" name="submit">Kirim</button></td>
        </tr>
    </table>
</form>



<?php
if(isset($_GET["submit"])){
    $sisi1 = $_GET["sisi1"];
    $sisi2 = $_GET["sisi2"];
    $sisi3 = $_GET["sisi3"];

if ($sisi1 == $sisi2 && $sisi2 == $sisi3) {
  
    echo "SAMA SISI";
} elseif ($sisi1 == $sisi2 || $sisi2 == $sisi3 || $sisi1 == $sisi3) {

    echo "SAMA KAKI";
} else {

    echo "SEMBARANG";
}
}
?>
