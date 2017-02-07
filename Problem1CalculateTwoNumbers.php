<!DOCTYPE html>
<html>
<head>
    <title>Calculate nums</title>
</head>
<body>

<form>

    <input type=number step=any name="number1" placeholder="Number1"/><br>
    <input type="number" step=any name="number2" placeholder="Number2"/><br>
    <input type="radio" name="operation"
        <?php if (isset($operation) && $operation == "Sum") echo "checked"; ?>
           value="sum">Sum <br>
    <input type="radio" name="operation"
        <?php if (isset($operation) && $operation == "Subtract") echo "checked"; ?>
           value="subtract">Subtract
    <div><br><input type="submit" value="submit"></div>
    <br>
</form>

<?php
if (isset($_GET['number1']) && isset($_GET['number2'])) {


    $n1 = $_GET['number1'];
    $n2 = $_GET['number2'];
    $operation1 = $_GET['operation'];
if ($operation1 == "sum")
{
echo "==" . ($n1 + $n2);

} elseif ($operation1 == "subtract"){
    echo "==". ($n1 - $n2);

}



}
?>

</body>
</html>