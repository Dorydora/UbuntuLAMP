<!DOCTYPE html>
<html>
   <head>
       
      <link href="styles.css"rel="stylesheet" type="text/css">
      <title> Index</title>
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
         <p>
         This is index page. Welcome.
         </p>
        

         <h3> Sample Form </h3>
         <table class="formtab">
            <tr>
               <td>
                  <form>
                     <p>Name:<input type = "text" name="name"> </p>
                     <p>Email:<input type = "text" name= "email"> </p>
                     <input type="submit" value = "submit" name="submit">
                  <form>
               </td>
            </tr>
         </table>
         </div></div>
         <div class="footer">
            <p id = "copyright">Copyright statement.</p>
            <a id = "login" href = "adminLogin.php">Login</a>
         </div>  
   </body>
</html>