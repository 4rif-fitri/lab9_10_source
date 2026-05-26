<html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../style/format.css">
    <style>
        .date {
            /* background-color: #fff; */
            text-align: end;
        }

        .h1,
        .h4 {
            text-align: center;
        }
    </style>
</head>

<body>
    <header>
        <?php
        /*output date, subject code, subject name, your name and matric number */
        $day = Date("l");
        $date = Date("d");
        $month = Date("m");
        $year = Date("Y");
        $subjectCode = "DITM2123";
        $subjectName = "WEB PROGRAMMING";
        $studentName = "Your Name";
        $studentMatricNumber = "Your Matric Number";

        echo "<h3 class='date'>" . $day . " " . $date . "/" . $month . "/" . $year . "</h3>";
        echo "<h1 class='h1'>" . $subjectCode . ": " . $subjectName . "</h1>";
        echo "<h4 class='h4'>" . "Name: " . $studentName . "</h4>";
        echo "<h4 class='h4'>" . "Matric Number: " . $studentMatricNumber . "</h4>";

        ?>
        <p class="center">
            <a href="../pages/welcome.php"> HOME </a> |
            <a href="../pages/UserForm.php"> FORM </a> |
            <a href="../pages/calculationForm.php"> ORDER FORM </a> |
            <a href="../pages/read.php"> READ FILE </a> |
            <a href="../pages/writeText.php"> WRITE FILE </a> |
            <a href="../pages/viewMember.php"> VIEW MEMBER </a> |
            <a href="../pages/view.php"> VIEW PROFILE </a> |
            <a href="../pages/update.php"> UPDATE PROFILE </a> |
            <a href="../pages/logout.php"> LOGOUT </a> |
        </p>
    </header>
</body>

</html>

<?php 
// echo Date("d") . "<br>";
// echo Date("D") . "<br>";
// echo Date("j") . "<br>";
// echo Date("l") . "<br>";
// echo Date("N") . "<br>";
// echo Date("S") . "<br>";
// echo Date("w") . "<br>";
// echo Date("z") . "<br>";
// echo Date("F") . "<br>";
// echo Date("m") . "<br>";
// echo Date("M") . "<br>";
// echo Date("n") . "<br>";
// echo Date("t") . "<br>";
// echo Date("L") . "<br>";
// echo Date("o") . "<br>";
// echo Date("Y") . "<br>";
// echo Date("y") . "<br>";
// echo Date("a") . "<br>";
// echo Date("A") . "<br>";
// echo Date("B") . "<br>";
// echo Date("g") . "<br>";
// echo Date("G") . "<br>";
// echo Date("h") . "<br>";
// echo Date("H") . "<br>";
// echo Date("s") . "<br>";
// echo Date("u") . "<br>";
// echo Date("e") . "<br>";
// echo Date("I") . "<br>";