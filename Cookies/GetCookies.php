<html>
<body>
    <?php
    if (isset($_COOKIE['Username'])) {
        echo "The Username is " . $_COOKIE['Username'];
        echo "<br>";
        echo " Age: " . $_COOKIE['Age'];
        echo "<br>";
        echo " Mobile: " . $_COOKIE['Mobile'];
        echo "<br>";
        echo " Email: " . $_COOKIE['Email'];
    } else {

        echo "No Username is found, might be cookies expired!";
    }    
    ?>
</body>

</html>