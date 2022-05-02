<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="/Ebus_asm2/css/form.css">

    <link rel="icon" href="/Ebus_asm2/image/icon.jpg/">

    <title>Register</title>

    <style>
        .register-form {
            width: 30%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
</head>

<body>
    <div class="top-nav">
        <nav class="navbar navbar-expand-sm navbar-light bg-light" id="top-nav">
            <!-- below are the 'a' tags to direct users to different pages of the food ordering system. -->
            <div class="container">
                <a class="navbar-brand" href="../../">Burger Hub</a>
                <!-- an unordered list would be suitable to store the links -->
            </div>
        </nav>
    </div>

    <div class="main-content">
        <div class="container">
            <div class="register-form">
                <!-- This form is for registration. Customers can create their account by filling in their information. -->
                <form action="../account/registration.php" method="post">
                    <div class="form-group row mb-2">
                        <label for="inputUsername" class="col-sm-2 col-form-label">Username</label>
                            <input type="text" class="form-control" id="inputUsername" name="username" placeholder="Username" required>
                    </div>
                    <div class="form-group row mb-2">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                            <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group row mb-2">
                        <label for="inputPhone" class="col-sm-2 col-form-label">Phone</label>
                            <input type="number" class="form-control" id="inputPhone" name="phone" placeholder="Phone Number" required>
                    </div>
                    <div class="form-group row mb-2">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                            <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>