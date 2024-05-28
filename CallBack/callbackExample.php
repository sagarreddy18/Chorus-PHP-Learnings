<!DOCTYPE html>
<html>
    <body>
        <?php 
        function Greeting($str){
            echo "<h1>Hello " . $str. "</h1>";
        }
        function Bye($str){
            echo "Okay Bye " . $str;
        }
        function printData($str,$format){
            echo $format($str);
        }

        printData("Good Morning!","Greeting");
        printData("Good night!","Bye");
        ?>
    </body>
</html>