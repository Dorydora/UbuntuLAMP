<!DOCTYPE html>
<html>

    <head>
        <title>Multidimensional Array</title>

    </head>

    <body>
        <?php
        $arrCars = array (  "Make" => array("Toyota", "Holden", "Ford", "Nissan", "Chrysler"),
                            "Color" => array("White", "Red", "Yellow", "Blue", "Silver"),
                            "Quantity" => array(5,2,6,1,3)
        
        );
        foreach($arrCars["Make"] as $strKey=>$strMake){
            $strColor = $arrCars["Color"][$strKey];
            $intQuantity = $arrCars["Quantity"][$strKey];
            echo "<p>Make: $strMake Color: $strColor Quantity: $intQuantity</p>";
        }
        ?>
    </body>
</html>    