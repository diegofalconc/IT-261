<html>
<head>
<title>Team Adder Assignment</title>
<style>
    p {
        color:red;
        text-align: center;
    }
    
    h1 {
        color:green;
    }
    
    h2 {
        font-size:1.5em;
        text-align: center;
        color: #800020;
    }

    form {
        width:350px;
        margin:0 auto;
        border:1px solid red;
        padding:10px;
    }
    
    h1 {
        text-align: center;
    }
    
</style>
</head>
<body>
<h1>Adder TEAMS.php</h1>

<form action="" method="post">
<label>Enter the first number:</label> 
<input type="text" name="num1"> <br> 
<label>Enter the second number: </label>
<input type="text" name="num2"> <br>
<input type="submit" value="Add Em!!"> 
</form>


<?php   //adder
 
 //code for quotes starts here
    //please put your part in the array below. 
        //Make sure to start the very first word with lower case and add <br> after quote and fill out the form
 $quotes[] = 'From the errors of others, a wise man corrects his own. <br> Please fill out all the fields.';
 $quotes[] = 'Errors are not in the art but in the artificers. <br> Please fill out all the fields.';
 $quotes[] = 'There is a disturbance in the Force. <br> Please fill out all the fields. ';
 $quotes[] = 'Houston, we have a problem. <br> Please fill out all the fields.';
 $quotes[] = 'Wow wow wow! Hold up! Fix yo errors.';
 $quotes[] = 'The greatest mistake is to imagine that we never err.';
 $quotes[] = 'Wow wow wow! Hold up! Fix yo errors, fill out all the fields.';
 $quotes[] = 'Seems that you\'ve been on the computer whole day! Please fill out all the fields.';

 srand ((double) microtime() * 1000000);
 $random_number = rand(0,count($quotes)-1);
 //code for quotes ends here


 //if isset starts here
if (isset($_POST['num1'],
          $_POST['num2'] 
         ) //end of isset function parameter
   )    { //define what to do if isset "works"
        $num1 = $_POST['num1']; //we define var1
        $num2 = $_POST['num2']; //we define var2
        //we also define either of below two, if empty then put error, if not empty - calculate
        if (empty($num1 && $num2)){
                    echo '<h2> Stranger... '.$quotes[$random_number].' </h2>';
                 } 
        else {
            $myTotal = $num1 + $num2; 
            echo '<h2>You added '. $num1 .' and '.$num2.' </h2>'; 
            echo '<p> and the answer is <br> '.$myTotal.'! </p>'; 
            echo'<p><a href="">Reset page</a></p>'; 
            } //end of else
        } //end of is isset
?> 

</body>
</html>

