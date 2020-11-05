<?php

$name = '';
$email = '';
$amount = '';
$bank = '';
$currency = '';

$nameErr = '';
$emailErr = '';
$amountErr = '';
$bankErr = '';
$currencyErr = '';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (empty($_POST['name'])) {
        $nameErr = 'Please fill out your name!';
    } else {
        $name = $_POST['name'];
    }

    if (empty($_POST['email'])) {
        $emailErr = 'Please fill out your email!';
    } else {
        $email = $_POST['email'];
    }
    if (empty($_POST['amount'])) {
        $amountErr = 'Please show me the money!!!';
    } else {
        $amount = $_POST['amount'];
    }
    if ($_POST['bank'] == 'NULL') {
        $bankErr = 'Please check your banking institution';
    } else {
        $bank = $_POST['bank'];
    }
    if (empty($_POST['currency'])) {
        $currencyErr = 'Please check one of the currencies!';
    } else {
        $currency = $_POST['currency'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<script src="confetti.js"></script>
<head>
    <link rel="stylesheet" href="rain.css">
    <meta charset="UTF-8">
    <title>Currency Form</title>

</head>

<body>
    <form action="" method="post">
        <fieldset>
            <label>Name</label>
            <input type="text" name="name" value="<?php
                                                    if (isset($_POST['name'])) echo $_POST['name']; ?>">
            <span><?php echo $nameErr; ?></span>
            <label>Email</label>
            <input type="email" name="email" value="<?php
                                                    if (isset($_POST['email'])) echo $_POST['email']; ?>">
            <span><?php echo $emailErr; ?></span>
            <label>How Much Money do you have?
            </label>
            <input type="text" name="amount" value="<?php
                                                    if (isset($_POST['amount'])) echo $_POST['amount']; ?>">
            <span><?php echo $amountErr; ?></span>

            <label>Choose you Banking Institution!</label>
            <select name="bank">
                <option value="NULL" <?php if (isset($_POST['bank']) && $_POST == 'NULL') {
                                            echo 'selected = "unselected"';
                                        } ?>>
                    Select One

                </option>
                <option value="Bank of America" <?php if (isset($_POST['bank']) && $_POST['bank'] == 'Bank of America') {
                                                    echo 'selected = "selected"';
                                                } ?>>
                    Bank of America

                </option>
                <option value="Chase Bank" <?php if (isset($_POST['bank']) && $_POST['bank'] == 'Chase Bank') {
                                                echo 'selected = "selected"';
                                            } ?>>
                    Chase Bank

                </option>
                <option value="Boeing Credit Union" <?php if (isset($_POST['bank']) && $_POST['bank'] == 'Boeing Credit Union') {
                                                        echo 'selected = "selected"';
                                                    } ?>>
                    Boeing Credit Union

                </option>
                <option value="Wells Fargo" <?php if (isset($_POST['bank']) && $_POST['bank'] == 'Wells Fargo') {
                                                echo 'selected = "selected"';
                                            } ?>>
                    Wells Fargo

                </option>
                <option value="Mattress" <?php if (isset($_POST['bank']) && $_POST['bank'] == 'Mattress') {
                                                echo 'selected = "selected"';
                                            } ?>>
                    Mattress

                </option>
            </select>
            <span><?php echo $bankErr; ?></span>
            <label>Choose your currency</label>
            <ul>
                <li>
                    <input type="radio" name="currency" value="0.013" <?php if (isset($_POST['currency']) && $_POST['currency'] == '0.013') echo 'checked="checked"'; ?>>Rubles
                </li>
                <li>
                    <input type="radio" name="currency" value="0.76" <?php if (isset($_POST['currency']) && $_POST['currency'] == '0.76') echo 'checked="checked"'; ?>>Canadian dollars
                </li>
                <li>
                    <input type="radio" name="currency" value="1.28" <?php if (isset($_POST['currency']) && $_POST['currency'] == '1.28') echo 'checked="checked"'; ?>>Pounds
                </li>
                <li>
                    <input type="radio" name="currency" value="1.18" <?php if (isset($_POST['currency']) && $_POST['currency'] == '1.18') echo 'checked="checked"'; ?>>Euros
                </li>
                <li>
                    <input type="radio" name="currency" value="0.0094" <?php if (isset($_POST['currency']) && $_POST['currency'] == '0.0094') echo 'checked="checked"'; ?>>Yen
                </li>
            </ul>
            <span><?php echo $currencyErr; ?></span>
            <input type="submit" value="Convert it!">
            <p><a href="">Reset me!</a></p>

        </fieldset>

    </form>

    <?php
    if (
        isset($_POST['name'],
        $_POST['email'],
        $_POST['amount'],
        $_POST['bank'],
        $_POST['currency']) &&
        is_numeric($_POST['amount']) &&
        is_numeric($_POST['currency']) &&
        $_POST['amount'] > 750
       
    ) {
        $name = $_POST['name'];
        $bank = $_POST['bank'];
        $email = $_POST['email'];
        $amount = $_POST['amount'];
        $currency = $_POST['currency'];

        $total = $amount * $currency;
        $total_f = number_format($total, 2);
  
    
        echo '<div class="box">';
       
        echo '<h2>Thank you, ' . $name . ' for filling out our form! Your money will be wired to ' . $bank . ' within 24 hours</h2>';
        echo '<p>' . $name . ', you now have $' . $total_f . ' American Dollars!</p>';
        echo '<p> We will be getting back to you via your email: ' . $email . '</p>';
        echo '<script>confetti.start();</script>';
        echo '<h1> Nice Savings <h1>';
        echo '<img src="vandamm.jpg">';
        echo  '</div>';
    } else if (
        isset($_POST['name'],
        $_POST['email'],
        $_POST['amount'],
        $_POST['bank'],
        $_POST['currency']) &&
        is_numeric($_POST['amount']) &&
        is_numeric($_POST['currency']) &&
        $_POST['amount'] < 750
    ) {

        $total = $amount * $currency;
        $total_f = number_format($total, 2);
        echo '<div class="box">';
        echo '<h2>Thank you, ' . $name . ' for filling out our form! Your money will be wired to ' . $bank . ' within 24 hours</h2>';
        echo '<p>' . $name . ', you now have $' . $total_f . ' American Dollars!</p>';
        echo '<p> We will be getting back to you via your email: ' . $email . '</p>';
        echo '<h1>Maybe take a student loan?</h1>';
        echo '<img src="meme.jpg">';
        echo ' </div>';
        echo '<div class="wrap">';
        echo '<div class="drop rain1"></div>';
        echo '<div class="drop rain2"></div>';
        echo '<div class="drop rain3"></div>';
        echo '<div class="drop rain4"></div>';
        echo '<div class="drop rain5"></div>';
        echo '<div class="drop rain6"></div>';
        echo '<div class="drop rain7"></div>';
        echo '<div class="drop rain8"></div>';
        echo '<div class="drop rain9"></div>';
        echo '<div class="drop rain10"></div>';
        echo '<div class="drop rain11"></div>';
        echo '<div class="drop rain12"></div>';
        echo '<div class="drop rain13"></div>';
        echo '<div class="drop rain14"></div>';
        echo '<div class="drop rain15"></div>';
        echo '<div class="drop rain16"></div>';
        echo '<div class="drop rain17"></div>';
        echo '<div class="drop rain18"></div>';
        echo '<div class="drop rain19"></div>';
        echo '<div class="drop rain20"></div>';
        echo '</div>';
    }


        ?>

       

</body>

</html>
