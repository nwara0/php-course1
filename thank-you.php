<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>Data</h1>

<?php
//
//$email = $_GET['email_address'];
//$password = $_GET['password'];
//?>
<!---->
<!--<p>Successful login for the email address --><?php //echo $email ?><!--</p>-->


<?php
// add comment
$email = $_POST['email_address'];
$password = $_POST['password'];
?>

<p>Successful login for the email address <?php echo $email ?></p>
</body>
</html>
