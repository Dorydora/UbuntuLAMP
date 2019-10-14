<!DOCTYPE html>
<html>

    <head>
        <title>PHP Script</title>

    </head>

    <body>
        <?php

        if (isset($_POST["submit"])) {
            echo("<p>The array contains:</p>");
            $strNames = $+POST['strNames'];
            $arrNames = explode("|",$strNames);
            for($intCount=0 ;$intcount<4 ;$intCount++)
                echo"<p>" . $arrNames[$intCount] . "</p>";
        }
        else {
            $arrNames = array("Angus", "Mike", "Jack", "Ryder");
            $strNames = implode("|",$arrNames);
        }
        ?>

        <h2>A Hidden Array Example</h2>

        <form action ='<?php echo $_SERVER["PHP_SELF"]; ?>'methods='post'>
        <p><input type='hidden' name='strNames' value='<?php echo $strNames ?>'/>
        <input type='submit' name='submit'/></p>
    </form>
    </body>
</html>