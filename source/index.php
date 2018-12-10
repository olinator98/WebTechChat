
<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel = "stylesheet" type = "text/css" href = "css/page.css"/>
    <link rel="stylesheet" href="css/font-awsome.min.css">
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