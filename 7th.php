<?php
class Month
{
    function showMonth()
    {
        $m = date("n");
        if($m == 6)
        {
            echo "Current Month is June<br>";
        }
        else
        {
            echo "Current Month is not June<br>";
        }
        switch($m)
        {
            case 1:
                echo "Switch: June";
                break;

            default:
                echo "Switch: Other Month";
        }
    }
}

$obj = new Month();
$obj->showMonth();

?>