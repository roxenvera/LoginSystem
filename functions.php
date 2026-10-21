<?php

// STRING FUNCTIONS

$username = " john doe. The quick brown fox jumps over the lazy dog";

$sample = "  Mal0ngg@y Pand3sal   ";

// echo str_replace("  Mal0ngg@y Pand3sal   ", "Malunggay Pandesal", $sample);

$url = "www.facebook.com/john/doe/ambot/ano/na";

$words = explode(" ", $username);




$email = "   JOHN_DOE.ComputerScience2026!!!!*com__ ";
// expected output: john.doe@cs2026.com

// STRICTLY FOLLOW THIS RULES:
// 1. YOU MUST USE 4 OR MORE str_replace and other string functions
// 2. code (or answer) must be in one line with one semi colon
// 3. You must use preg_replace
// 4. You must if else 

preg_replace("/[\W]/", "", $email);

// echo (strtolower(str_replace("_DOE", ".doe", str_replace(".", "@", str_replace("Computer", "c", str_replace("Science", "s", str_replace(".doe", "@", preg_replace('/[!*]+/', "", $email)))))))) ?: "";



rtrim
ltrim
trim
str_replace
preg_match
preg_replace
ucfirst
ucwords
str_starts_with
str_ends_with
str_shuffle
strtolower
strtoupper
explode
implode
str_contains
str_word_count
str_repeat
strlen
and regular expressions
var_dump


// echo preg_replace('/[\W_]+/', "", $email);



// var_dump(str_starts_with($username, " "));

// echo str_shuffle($username);
// echo str_replace('/[.!]+/', "", $username);

// echo preg_replace('/[.!]+/', "", $username);

// echo strtoupper($username);
// echo strtolower($username);

// echo ucwords();


// $exploded = explode("/", $url);

// foreach ($exploded as $e) {
//     echo $e;
// }

// $var = str_contains($username, "cat");

// var_dump($var);

// echo str_word_count($username);

// echo str_replace(" ", " MALUNGGAY ", "'" . $username . "'");

// print ("'" . $username . "'") . "<br>";

// $trimmed = rtrim($username);

// echo "'" . $trimmed . "'" . "<br>";




// $password = " Jino 123 ";

// $phrase = "jinoandjames jollibee mcdo";

// // $trimmed =  trim($password);

// $newpass = str_replace(" ", "", $password);

// $url = "www.facebook.com/jeno/james/sioson";

// $test = explode("/", $url);

// // foreach ($test as $t) {
// //     echo $t . "<br>";
// // }


// $imp = implode(" ", $test);

// var_dump($imp);


// // var_dump($test);

// // echo "'" . $newpass . "'";
// // echo ucwords($phrase);

// if ($_SERVER['REQUEST_METHOD'] == "POST") {
//     // calculate($_GET['num1'], $_GET['num2']);
//     $num1 = (int)$_POST['num1'];
//     $num2 = (int)$_POST['num2'];


//     (int) $sum = $num1 + $num2;

//     if ($_POST['op'] == 'sum') {
//         echo $sum;
//     }
// }

// function calculate($num1, $num2)
// {

//     $op = $_GET['op'];
//     switch ($op) {
//         case 'sum':
//             echo $_GET['num1'] + $_GET['num2'];
//             break;
//         case 'sub':
//             echo $_GET['num1'] - $_GET['num2'];
//             break;
//     }
// }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <input type="text" name="num1">
        <br><br>
        <input type="text" name="num2">
        <br><br>
        <select name="op" id="">
            <option value="sum">Add</option>
            <option value="sub">Subtract</option>
        </select>
        <button type="submit">Calculate</button>
    </form>

    <?php
    // if (isset($_GET['submit'])) {
    //     calculate($_GET['num1'], $_GET['num2']);
    // }

    ?>
</body>

</html>

<!-- echo (strtolower(str_replace("_DOE.C", "doe", str_replace("!!!", "", str_replace("_", "", str_replace("ComputerScience2026", "@cs2026", preg_replace('/[!*]+/', "", $email))))))) ?: ""; -->