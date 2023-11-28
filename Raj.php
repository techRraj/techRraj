<?php
$str = "coding";
echo "I like $str ";
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="color:red;text-align:center;background:#000;"> ITS MY PHP PAGE </h1>
    
    <?php
    echo "HELLO I AM RAJ <br>";
    echo "HELLO I AM RAJ <br>";
    echo "HELLO I AM RAJ <br>";
    echo "HELLO I AM RAJ <br>";
    echo "HELLO I AM RAJ <br>";

    $intw = 5 + 9;
    $r = 89;
    $c = 90;

    echo "Your total is $intw <br>";
    echo $r + $c;

    $x = 5; // global scope

    function myTest() {
        global $x; // Declare $x as a global variable inside the function
        echo "<p>Variable x inside function is: $x</p>";
    }

    myTest();

    echo "<p>Variable x outside function is: $x</p>";
    ?>

    <h1 style="color:red;text-align:center;background:#000;">Loop Example</h1>
    
    <?php
    function myLoopTest() {
        static $o = 0;
        echo "<p>$o</p>";
        $o++;
    }

    myLoopTest();
    myLoopTest();
    myLoopTest();
    ?>
</body>
</html>
