
<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>WebChat</title>
  </head>
  <body>
        <header>
            
            <nav>
                <!--nav will go here -->
            </nav>
        </header>

        <article name = "login" id = "login">
            <?php
            include("php/login.php");
            ?>
        </article>

        <article name = "register" id = "register">
            <?php
            include("php/register.php");
            ?>
        </article>

        <article name = "information" id = "information">
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

        <footer>
            <ul>
                <li>Oliver Werlen</li>
                <li>Sven Guggisberg</li>
                <li>WebTech</li>
            </ul>
        </footer>

  </body>
</html>