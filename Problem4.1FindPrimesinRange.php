<form>
    <div>
        Starting index:
        <input type=number step=any name="numberstart"/><br>
    </div>
    <div>
        End:
        <input type=number step=any name="numberend"/><br>
    </div>
    <div><input type="submit" value="Submit"></div>
    <br>
</form>


<?php
if (isset($_GET['numberstart']) && isset($_GET['numberend'])) {
    $start = $_GET["numberstart"];
    $end = $_GET["numberend"];


    for ($i = $start; $i <= $end; $i++) {
        if ($i == 1) {
            echo 1 .",";

        }

        if ($i == 2) {
            echo "<b>" . 2 . "</b>". ",";


        } else if ($i > 2) {
            $bCheck = True;


            for ($j = 2; $j < $i; $j++) {


                if ($i % $j == 0) {
                    $bCheck = False;

                }


            }
            if ($bCheck == true) {
                echo "<b>" . $i . "</b>".",";

            } else {
                echo $i . ",";

            }

        }


    }


}


