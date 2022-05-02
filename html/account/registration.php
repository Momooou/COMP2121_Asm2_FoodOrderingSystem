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
    session_start();

    $servername = 'localhost';
    $dbusername = 'root';
    $dbpassword = '';
    $dbname = 'ebusasm2';

    $conn = mysqli_connect($servername, $dbusername, $dbpassword);
    mysqli_select_db($conn, 'ebusasm2');

    // get the information of customer and store in db
    // then create an account for him/her
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $s = " select * from usertable where phone = '$phone'";
    $result = mysqli_query($conn, $s);
    $num = mysqli_num_rows($result);

    // checks if the phone number has been registered before
    if ($num == 1) {
        echo "This phone number has been registered before."; ?>
        <br>
        <a href="../register.php/">back to register</a>
    <?php } else { 
        $reg = "insert into usertable(username,password,email,phone) values ('$username','$password','$email','$phone')";
        mysqli_query($conn, $reg);
        echo "Registration Sucessful"; ?>
        <br>
        <a href="../login.php/">back to login</a>
    <?php }
    ?>
</body>

</html>