<?php
    if(isset($_POST['add'])){
        $num1 = $_POST['num_1'];
        $num2 = $_POST['num_2'];
        $result = $num1 + $num2;
    }
    if(isset($_POST['sub'])){
        $num1 = $_POST['num_1'];
        $num2 = $_POST['num_2'];
        $result = $num1 - $num2;
    }
    if(isset($_POST['multi'])){
        $num1 = $_POST['num_1'];
        $num2 = $_POST['num_2'];
        $result = $num1 * $num2;
    }
    if(isset($_POST['divide'])){
        $num1 = $_POST['num_1'];
        $num2 = $_POST['num_2'];
        $result = $num1 / $num2;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calculator</title>
    
    <style type="text/css">
    
        *{
            margin: auto;
        }
        title{
            font-size: 100%;
        }
        table{
            margin-bottom: 200px;
            margin-top: 200px;
            width: 45%;
        }
        th{
            font-size: 60px;
            font-variant-caps: all-small-caps;
        }
        td{
            padding: 10px;
        }
        input{
            width: 80%;
            padding: 20px;
            background-color: darkgray;
        }
        button{
            padding: 20px;
            width: 90%;
            background-color: #ff8100;
        }
        body{
            background: #000000;
            color: white;
        }
    </style>
</head>
<body>
    <form action="calculator.php" method="POST">
        <table>
            <tr>
                <th colspan="3">CALCULATOR</th>
            </tr>
            <tr>
                <td><input type="number" name="num_1" placeholder="Enter Number" required></td>
                <td><button type="submit" name = "add">+</button></td>
                <td><button type="submit" name = "sub">-</button></td>
            </tr>
            <tr>
                <td><input type="number" name="num_2" placeholder="Enter Number" required></td>
                <td><button type = "submit" name = "multi">x</button></td>
                <td><button type = "submit" name = "divide">/</button></td>
            </tr>
            <tr>
                <td><input type = "number" placeholder="Result" value="<?php echo $result; ?>" readonly></td>
                <td><button type = "submit" href = "calculator.php">clear</button></td>
            </tr>
        </table>
    </form>
</body>
</html>
