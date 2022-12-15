<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 1</title>
</head>
<body>
    <style>
        body{
            text-align: center;
        }
        table{
            border: 1px solid black;
            border-collapse: collapse;
            margin-left: auto;
            margin-right: auto;
        }
        #table {
            border: 1px solid;
            padding: 10px;
            box-shadow: 5px 10px 8px #888888;
        }


    </style>
        <table id="table">
            <tr>
                <th colspan="3">CURRENCY EXCHANGE</th>
            </tr>
            <tr>
                <td>USD</td>    

                <td>
                    <form action="" method="POST">
                        <input type="number" id="inp" name="inp" size="10" value="<?php echo $_POST['inp'] ?>">
                    </form>
                    <?php 
                        $USD = $_POST['inp'];
                    ?>
                </td>

            </tr>
            <tr>
                <td>MYR</td>
                <form>
                    <td>
                        <?php
                            echo $USD * 4.47;
                        ?>
                    </td>
                </form>
            </tr>
        </table>
    
</body>
</html>

