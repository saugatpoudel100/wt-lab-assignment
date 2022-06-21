<?php

$num =10;
$num2 = 20 ;
$choice =1;


switch($choice)
{
    case '1':
        $sum = $num + $num2;
        echo "$sum";
        break :
     
        case '2':
            $sub = $num - $num2;
            echo "$sub";
            break :

            case '2':
                $mult = $num*  $num2;
                echo "$mult";
                break :                  

                defult :
                echo "nothing";

}

?>