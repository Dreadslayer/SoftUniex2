<!DOCTYPE html>
<html>
<head>
    <title>Largest of three</title>
</head>
<body>

<form>

    <input type=number step=any name="number1" placeholder="Number1"/><br>
    <input type="number" step=any name="number2" placeholder="Number2"/><br>
    <input type="number" step=any name="number3" placeholder="Number3"/><br>

    <div><br><input type="submit" value="submit"></div>
    <br>
</form>

<?php
if (isset($_GET['number1']) && isset($_GET['number2']) && isset($_GET['number3'])) {


    $n1 = $_GET['number1'];
    $n2 = $_GET['number2'];
    $n3 = $_GET['number3'];

 if ($n1 >= $n2 && $n1 >= $n3){

     echo "The largest number is " . $n1;
 } else if ($n2 > $n1 && $n2 >= $n3 ) {

     echo "The largest number is " . $n2;

 } else if ($n3 > $n1 && $n3 > $n2){
     echo "The largest number is " . $n3;
 }



}
?>

</body>
</html>