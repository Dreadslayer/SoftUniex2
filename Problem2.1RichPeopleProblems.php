
<form>
    <div>
        Enter cars:
        <input type=text step=any name="cars" /><br>
    </div>
    <div><input type="submit" value="Show result"></div>
    <br>
</form>

<?php
$cars_joined = $_GET['cars'];
$coma = ",";
$cars_non_filtered = explode($coma , $cars_joined);
$count = count($cars_non_filtered);
$colors = array();
$colors[0] = "red";
$colors [1] = "black";
$colors [2] = "yellow";
$colors [3] = "white";
$colorgen = array_rand($colors , $count);

echo "<table border ='2'>";
echo "<tr><td><b>Car</b></td><td><b>Count</b></td><td><b>Color</b></td></tr>";
for ($i =0; $i< $count; $i++ )
{

    $colorgen1 = $colors[$colorgen[$i]] . "\n";
    $numgen = rand(1,5);

    echo "<tr><td>$cars_non_filtered[$i]</td><td>$numgen</td><td>$colorgen1</td></tr>";

}

?>
