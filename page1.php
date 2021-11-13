
<?php
    define("FIVE_DAYS", 60 * 60 * 24 * 5);
    setcookie("name",$_POST["name"], time() + FIVE_DAYS);
    setcookie("password", $_POST['email']);
?>

<!DOCTYPE html>

<html>
    <head>
            <title>Testing Cookies</title>
    </head>

    <body>
        <p>Cookies have been set to the follow data</p>

     <!--   <p> -->
     <!--        Username: <?php echo $_POST["name"]; ?><br> -->
     <!--        Password is: <?php echo $_POST["email"];?><br> -->
       <!-- </p> -->

        <!-- test inputs -->
        <p>
            <?php
                //$user_name = $_POST["name"];
               // $pass_word = $_POST["email"];
                
              //  print("$user_name <br>");
              //  print("$pass_word <br>");
            ?>
        </p>
    </body>
</html>