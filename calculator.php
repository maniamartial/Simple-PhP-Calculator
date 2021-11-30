<?php
    echo "Relax baby";
if(isset($_GET[' submit'])){
    $result1=$_GET['num1'];
    $result2=$_GET['num2'];
        $operator=$_GET['operator'];
        
        switch($operator){
            case None:
            echo "Error, kindy select one operator please";
            break;
            case Add:
            echo "You need to add";
            echo $resut1+$result2;
            break;

              case Subtract:
            echo "You need to subtract";
            echo $resut1-$result2;
            break;

              case Multiply:
            echo "You need to multiply";
            echo $resut1*$result2;
            break;

              case Divide:
            echo "You need to  divide";
            echo $resut1/$result2;
            break;
            
            default:
            echo "Relax";
            break;
        }
}
?>