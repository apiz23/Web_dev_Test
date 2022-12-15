<?php 
    $car = array("Volvo","BMW","Toyota","Proton","Perodua");
    $monthly_sales = array(10,30,50,15,5);
    $sales_executives = array("Ahmad","Daniel","John","Darren","Lisa");
?>

<style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        text-align: center;
    }
    th{
        background-color: grey;
    }
</style>

<table>
    <tr>
        <th>Car</th>
        <th>Monthly Salary</th>
        <th>Sales Executives</th>
    </tr>
    <?php
            for($i = 0; $i < count($car); $i++){
                echo '<tr>';
                echo '<td>'. $car[$i] . '</td>';
                echo '<td>'. $monthly_sales[$i] . '</td>';
                echo '<td>'. $sales_executives[$i] . '</td>';
                echo '</tr>';
            }
    ?>
</table>

