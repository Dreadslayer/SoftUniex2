<form>
    <div>
        Input string:
        <input type=text step=any name="string"/>
    </div>

    <div>Check Palindrome:
        <input type="radio" name="operation" value="Checkpalindrome">
    </div>
    <div>Reverse string:
        <input type="radio" name="operation" value="Reversestring">
    </div>
    <div>Split:
        <input type="radio" name="operation" value="Split">
    </div>
    <div>Hash string:
        <input type="radio" name="operation" value="Hashstring">
    </div>
    <div>Shuffle string:
        <input type="radio" name="operation" value="Shufflestring">
    </div>

    <div><input type="submit" value="Submit"></div>


</form>

<?php
if (isset($_GET['string'])) {
    $text = $_GET['string'];
    $operation = $_GET["operation"];

    if (isset($operation) && $operation == "Checkpalindrome")
    {
        $reverse = strrev($text);
        if ($reverse == $text){
            echo $text. " is palindrome ";
        } else if ($reverse != $text){
            echo $text. " is not palindrome ";
        }

    }

    if (isset($operation) && $operation == "Reversestring")
    {
        $reverse = strrev($text);
        echo $reverse;
    }
    if (isset($operation) && $operation == "Split"){
        $split = implode(' ',str_split($text));
        echo $split;

    }
    if (isset($operation) && $operation == "Hashstring") {
        $hashtext = md5($text);
        echo $hashtext;
    }

    if (isset($operation) && $operation == "Shufflestring"){
        $shuffletext = str_shuffle($text);
        echo $shuffletext;
    }

}