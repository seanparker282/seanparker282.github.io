<Doctype! html>
<html>
 <head>
   <title>Sean Parker</title>
 </head>
 <body>
   <h1> Guess the number between 1 and 100!</h1>
   <?php if ( !isset($_GET['guess']) ) {
     echo("Missing guess parameter");
      }
      else if ( strlen($_GET['guess']) < 1 ) {
        echo("Your guess is too short");
      }
      else if ( !is_numeric($_GET['guess']) ) {
        echo("Your guess is not a number");
      }
      else if ( $_GET['guess'] < 72 ) {
        echo("Your guess is too low");
      }
      else if ( $_GET['guess'] > 72 ) {
        echo("Your guess is too high");
      }
      else {
        echo("Congratulations - You are right");
      }
    ?>
 </body>
</html>
