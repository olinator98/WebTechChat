
<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel = "stylesheet" type = "text/css" href = "css/page.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>WebChat</title>
  </head>
  <body>

        <header>
            
            <nav class = "navigation" name = "navigation" id = "navigation">
                <a href="index.php" class="active">Home</a>
                <a href="#login">Login</a>
                <a href="#information">Information</a>
                <a href="registration.php">Register</a>
                <a href="php/logout.php">Logout</a>
                <a href="javascript:void(0);" class="icon" onclick="toggleMenu()">
                <i class="fa fa-bars"></i></a>
            </nav>
        </header>


        <article class = "login" name = "login" id = "login">
            <?php
                include("php/login.php");
            ?>
        </article>

        <article class = "information" name = "information" id = "information">
           <p>
           Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy 
           eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam 
           voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet 
           clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit 
           amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam 
           nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, 
           sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
            Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
            </p>
        </article>
        
        <script>
        function toggleMenu() {
            var x = document.getElementById("navigation");
            if (x.className === "navigation") {
                x.className += " responsive";
            } else {
                x.className = "navigation";
            }
        }
        </script>

        <footer class = "footer">
            <p>Oliver Werlen | Sven Guggisberg</p>
            <p>Webtech</p>
        </footer>



        


  </body>
</html>