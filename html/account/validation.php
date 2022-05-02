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

    $username = $_POST['username'];
    $password = $_POST['password'];
    // $email = $_POST['email'];
    // $phone = $_POST['phone'];

    $s = " select * from usertable where username = '$username' && password = '$password'";
    $result = mysqli_query($conn, $s);
    $num = mysqli_num_rows($result);

    $resultArr = mysqli_fetch_all($result, MYSQLI_ASSOC);

    if ($username == "admin" && $num == 1) {
        $_SESSION['username'] = $username;
        $_SESSION['uid'] = $resultArr[0]['uid'];
        // print_r($resultArr[0]['uid']);
        header('location: ../users/admin.php/');
    } elseif ($num == 1) {
        $_SESSION['username'] = $username;
        $_SESSION['uid'] = $resultArr[0]['uid'];
        header('location: ../users/customers.php/');
    } else {
        // handling invalid username or pw
        echo "<script>
        alert('Invalid username or password.');
        window.location.href='/Ebus_asm2/html/login.php/';
        </script>";
    }
    ?>
</body>

</html>