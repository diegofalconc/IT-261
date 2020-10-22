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
    <!--
1)If statement should be placed below the form, so that it appears on the refresh in the right position
2)$num2 is capped in the instance assignment of $myTotal, it should be $num2;
3)The h2 closing tag is missing and the double and single quotation marks are mixed. 
4)The <p> quotations most be changed to allow php variable input.
5) There is a dot missing before $myTotal, also changing the double quotes to single quote identation around the variable
6)Opening form tag has a misplaced slash
7)one of the inputs have Num1 capped, it should be lowercase
8)The third submit input is missing a double quotation in the value attribute
9) the puntuation after the html closing tag most be deleted
10) The label opening tags are missing and the closing ones are misplaced
11) the method attribute was missing in the form tag
12) one of the paragraphs break statement should be inside the paragraph, not outside
13) Style should be in the headers, no need to have inline
14) negative sign in the definition of myTotal most be removed
15) missing href in the Reset Page
16) Wrong symbols at the end of the html tag
-->
</body>

</html>