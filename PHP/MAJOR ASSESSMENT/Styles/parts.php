<!DOCTYPE html>
<html>
   <head>
      <link href="styles.css"rel="stylesheet" type="text/css">
      <title> Parts</title>
   </head>
   <body>
      <div class="container">
         <div class="header">
         <!--you can add your banner in place of mine below-->
         <img src= "banner.jpg"width="900"/>
         </div>
         <!-- note navbar is same width as banner -->
         <div class="navbar">
            <ul class="nav">
               <li><a href="index.php">Index</a></li>
               <li><a href="search.php">Search</a></li>
               <li><a href="parts.php">Parts</a></li>
               <li><a href="partsCategories.php">Parts By Categories</a></li>
               <li><a href="reviews.php">Reviews</a></li>
               <li><a href="contactUs.php">Contact Us</a></li>
            </ul>
         </div>
      <div class="content">
      <div class="innerContent">
         <h3>Parts </h3>

         <?php
         $con = mysqli_connect("localhost","admin","Password1!", "MGCSTools");
         // Check connection
         if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
         }
         $partsResults = mysqli_query($con, "SELECT * FROM PARTS");
         echo "<table border='1'>";
         echo "<thead>";
         echo "<tr>";
         $partsTitles = mysqli_query($con, "SHOW COLUMNS FROM PARTS");
         while ($row = mysqli_fetch_assoc($partsTitles)) {
            echo "<th>" . $row['Field'] . "</th>";
         }
         echo "</tr>";
         echo "</thead>";
         echo "<tbody>";
         while($row = mysqli_fetch_array($partsResults)) {
            echo "<tr>";
            echo "<td>" . $row['PartNum'] . "</td>";
            echo "<td>" . $row['PartName'] . "</td>";
            echo "<td>" . $row['Description'] . "</td>";
            echo "<td>" . $row['Specs'] . "</td>";
            echo "<td>" . $row['OnHand'] . "</td>";
            echo "<td>" . $row['Category'] . "</td>";
            echo "<td>" . $row['Warehouse'] . "</td>";
            echo "<td>" . $row['Price'] . "</td>";
            echo "</tr>";
         }
         echo "</tbody>";
         echo "</table>";
         ?>
         </div></div>
         <div class="footer">
            <p id = "copyright">Copyright statement.</p>
            <a id = "login" href = "adminLogin.php">Login</a>
         </div>
      </div>
   </body>
</html>