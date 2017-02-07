
<form>
    <div>

        <input type=text step=any name="stringofnums" /><br>
    </div>
    <div><input type="submit" value="Submit"></div>
    <br>
</form>

<?php
if (isset($_GET['stringofnums'])) {
    $string_of_nums = $_GET['stringofnums'];
    $coma = ",";
    $nums_not_filtered = explode($coma, $string_of_nums);
    $count = count($nums_not_filtered);
    echo "<table border ='2'>";

    for ($i = 0; $i < $count; $i++) {
        $sum = array_sum(str_split($nums_not_filtered[$i]));
        if ($sum == 0) {
            $sum = "I cannot sum that";
        }
        echo "<tr><td>$nums_not_filtered[$i]</td><td>$sum</td></tr>";


    }

}