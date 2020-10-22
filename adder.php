<html>

<head>
    <title>My Adder Assignment</title>
    <style>
        p {
            color: red;
            text-align: center;
        }

        form {
            width: 350px;
            margin: 0 auto;
            border: 1px solid red;
            padding: 10px;
        }

        h1 {
            text-align: center;
            color: green;
        }

        h2 {
            text-align: center;
        }

    </style>
</head>

<body>
    <h1>Adder.php</h1>
    <form action="" method="post">
        <label>Enter the first number:</label>
        <input type="text" name="num1">
        <br>
        <label>Enter the second number:</label>
        <input type="text" name="num2">
        <br>
        <input type="submit" value="Add Em!!">
    </form>
    <?php
    if (isset($_POST['num1'], $_POST['num2'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        

        if(empty($num1 && $num2)){
            echo "<h2>Error, you just got busted by Dami's team</h2>";
            echo '<p class="center">please fill out all of the fields!</p>';
        } else {
            $myTotal = $num1 + $num2;
        echo "<h2>You added  $num1  and $num2 </h2>";
        echo ' <p> and the answer is <br>' . $myTotal . '!</p> ';
        echo '<p><a href="adder.php">Reset page</a>';
        }
    }
    ?>
</body>

</html>
