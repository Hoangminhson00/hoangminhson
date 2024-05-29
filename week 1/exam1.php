<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <script>
        </script>
        <?php
        $color =  "red";
        $COLOR =  "blue";
        $coLOR =  "green";
        echo "My car is". $color ."<br>";
        echo "My house is". $COLOR ."<br>";
        echo "My boat is". $coLOR ."<br>";
        ?>

        <?php 
        $txt = "Hanoi";
        echo "I love $txt!";
        ?>
         <?php 
        $txt = "Hanoi";
        echo "<br>";
        echo "I love" . $txt. "!";
        ?>
        <?php 
        $x =5;
        $y= 4;
        echo "<br>";
        echo $x +$y;
        ?>
        <?php 
        $x =5;
        $y= "John";
        echo "<br>";
        echo $x ;
        echo "<br>" ;
        echo $y;
        ?>
        <?php 
        var_dump(5);
        var_dump("John");
        var_dump(3.14);
        var_dump(true);
        var_dump([2,3,56]);
        var_dump(NULL);
        echo "<br>"
        ?>
        <?php 
        $x = $y =$z ="Fruit";

        echo $x;
        echo $y;
        echo $z;
        ?>
        <?php 
        $x = 5;

        function myTest(){
            global $x;
            echo "<p>Variable x inside function is: $x</p>";
        }
        
        myTest();
        echo "<p>Variable x outside function is: $x</p>";
        ?>
        <?php 
        $x = 5;
        $y = 16;
        function myTest1() {
            global $x, $y;
           $y = $x + $y;
        }
        
        myTest1();
        echo $y;
        ?>
        <?php 
        echo "<br>";
        function myTest2() {
            static $x =0;
           echo $x;
           $x++;
        }
        
        myTest2();
        echo "<br>";
        myTest2();
        echo "<br>";
        myTest2();
        ?>
    <?php 
    echo "<br>";
      $x = "Hello world!";
      $x = null;
      var_dump($x);

      
      ?>
<?php 
    echo "<br>";
      echo "Hello";
      echo 'Hello';

      ?>
      <?php 
    echo strlen("Hello world!");


      ?>
 <?php 
        $x = 5985;
        var_dump(is_numeric($x));
        echo"<br>";
        $x = "5985";
        var_dump(is_numeric($x));
        echo"<br>";

        $x ="59.85"+100;
        var_dump(is_numeric($x));
        
        ?>   
<?php 
    define("Daihochalong", "KHMTK6B");
    echo Daihochalong;
?> 

<?php
echo"<br>";
$sinh_vien = array("Nguyễn A", "Nguyễn B", "Nguyễn C", "Nguyễn D", "Nguyễn E");
foreach ($sinh_vien as $ten) {
    echo $ten . "<br>"; 
}

?>
<?php

$khach_hang = array(
    "ten" => "Hoàng Minh Sơn",
    "dia_chi" => "Quảng Ninh",
    "gioi_tinh" => "Nam",
    "so_dien_thoai" => "0123456789",
    "tuoi" => 21
);

foreach ($khach_hang as $key => $element) {
    echo $key . ": " . $element . "<br>";
}

?>
<?php

function danhgiadiem($diem) {
    if ($diem >= 9) {
        return 'A+';
    } elseif ($diem >= 8) {
        return 'A';
    } elseif ($diem >= 7) {
        return 'B';
    } elseif ($diem >= 6) {
        return 'C';
    } elseif ($diem >= 5) {
        return 'D';
    } else {
        return 'F';
    }
}
$diem = 7;
$diemchu = danhgiadiem($diem);
echo "Điểm số $diem tương ứng với điểm chữ là: $diemchu";
?>

<?php 
function familyName($fname){
    echo "$fname Refsnes.<br>";
}
familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");

?>
<?php 
function add_five(&$value){
$value +-5;
}
$num =2;
add_five($num);
echo $num;
?>
<?php 
function sumMyNumbers(...$x){
    $n = 0;
    $len = count($x);
    for($i = 0;$i< $len; $i++){
        $n +=$x[$i];
    }
return $n;
}
$a = sumMyNumbers( 5, 2, 6, 2 ,7,7);
echo $a;
?>

<?php 
$car = array("Volvo", "BMW", "Toyota");
array_splice($car, 1,1);
echo $cars[0],",",$cars[1];
?>
<?php 
$car = array("Volvo", "BMW", "Toyota");
array_shift($cars);
array_pop($cars);
echo $cars[0],$cars[1],$cars[2];
?>
 </body> 

        <header>
            <!-- place navbar here -->
        </header>
        <main></main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
    