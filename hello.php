<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Greetings!</title>
    <style type="text/css">
      .bold {
        font-weight: bolder;
      }
    </style>
  </head>
  <body>
    <?php
      ini_set('display_errors',1);
      error_reporting(E_ALL);

      $first = $_GET['name'];
      $last = $_GET['last_name']; // will error if not a param in hello.html
      print "<p>Hello, <span class=\"bold\">$first $last</span>!</p>";
    ?>
  </body>
</html>
