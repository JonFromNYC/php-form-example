<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    // enable display errors
    ini_set('display_errors', 1);

    // show all possible errors
    error_reporting(E_ALL);

    // create shorthand variables
    $name = $_POST['name'];
    $email = $_POST['e=mail'];
    $response = $_POST['response'];
    $comments = $_POST['comments'];

    // print received data
    print " <p>Thank you, $name, for your comments.</p>
            <p>You stated that you found this example to
            be '$response' and added:<br>$comments</p>";
    ?>
</body>
</html>
