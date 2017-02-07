<form>
    <div>
        Enter number of years:
        <input type=number step=any name="years"/><br>
    </div>
    <div><input type="submit" value="Show costs"></div>
    <br>
</form>


<?php
if (isset($_GET['years'])) {
    $n = $_GET["years"];
    $year = 2010;
    echo "<table border ='14'>";
    echo "<tr><td><b>Year</b></td><td><b>January</b></td><td><b>February</b></td><td><b>March</b></td>
<td><b>April</b></td><td><b>May</b></td><td><b>June</b></td><td><b>July</b></td><td><b>August</b></td>
<td><b>September</b></td><td><b>October</b></td><td><b>November</b></td><td><b>December</b></td><td><b>Total:</b></td></tr>";

    for ($i = 0; $i <= $n; $i++) {


        $year;
        $year = $year + 1;

        $staticyear = 2010;
        $staticyear++;
        for ($j = 2010; $j < $staticyear; $j++) {
            $january = rand(1, 999);

            $february = rand(1, 999);

            $march = rand(1, 999);

            $april = rand(1, 999);

            $may = rand(1, 999);

            $june = rand(1, 999);

            $july = rand(1, 999);

            $august = rand(1, 999);

            $september = rand(1, 999);

            $october = rand(1, 999);

            $november = rand(1, 999);

            $december = rand(1, 999);

            $sum = ($january + $february + $march + $april + $may + $june + $july + $august + $september + $october + $november + $december);
            echo "<tr><td>$year</td><td>$january</td><td>$february</td><td>$march</td><td>$april</td><td>$may</td>
<td>$june</td><td>$july</td><td>$august</td><td>$september</td><td>$october</td><td>$november</td><td>$december</td>
<td>$sum</td></tr>";

        }

    }

}