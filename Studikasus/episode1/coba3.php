<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <label for="bil1">Bilangan 1</label>
    <input id="bil1" type="text" name="bil1">

    <label for="bil2">Bilangan 2 </label>
    <input id="bil2" type="text" name="bil2">

    <label for="bil3">Bilangan 3</label>
    <input id="bil3" type="text" name="bil3">
    
    <label for="bil4">Bilangan 4</label>
    <input id="bil4" type="text" name="bil4">
    <button name="submit">Submit</button>
    </form>
</body>
</html>


<?php
if (isset($_POST["submit"])) {
    

$bilangan1 =$_POST['bil1']; 
$bilangan2 = $_POST['bil2'];
$bilangan3 = $_POST['bil3'];
$bilangan4=$_POST['bil4'];
$i=" adalah angka terbesar";
if ($bilangan1>$bilangan2) {
    if ($bilangan1>$bilangan3) {
        if ($bilangan1>$bilangan4) {
            echo $bilangan1 .$i;
        }else {
            echo $bilangan4 .$i;
    }
}else{
    if ($bilangan3>$bilangan4) {
        echo $bilangan3 . $i;
    }else{
        echo $bilangan4 . $i;
    }
}
}else if ($bilangan2>$bilangan3) {
    if ($bilangan2>$bilangan4) {
        echo $bilangan2 . $i;
    }else{
        echo $bilangan4 . $i;
    }
}else if($bilangan3>$bilangan4){
    echo $bilangan3 . $i;
}else{
    echo $bilangan4 .$i;
}
}