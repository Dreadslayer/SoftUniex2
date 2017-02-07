<!DOCTYPE html>
<html>
<head>
    <title>Calculate nums</title>
</head>
<body>

<form>

    <input type=number step=any name="number" placeholder="Number"/><br>

    <div><br><input type="submit" value="submit"></div>
    <br>
</form>
<?php
 $n = $_GET["number"];

echo "sqrt ". $n. " =  ";
echo sqrt($n);