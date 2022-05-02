<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- link to external css -->
    <!-- 'index.css' is mainly used for index.html, and some parts of ohter pages.
    whereas another CSS file, 'footer.css' is for footers -->
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/footer.css">

    <!-- This is the icon of the food ordering system. -->
    <link rel="icon" href="/Ebus_asm2/image/icon.jpg/">

    <!-- This is the title -->
    <title>Burger Hub</title>

    <!-- CSS for the background image of the home page. -->
    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('image/bg.jpg');
            background-repeat: no-repeat;
            background-attachment: scroll;
            background-size: 100vw 100vh;
        }
    </style>
</head>

<body>
    <!-- This div contains top navigation bar. -->
    <div class="top-nav">
        <nav class="navbar navbar-expand-sm navbar-light bg-light" id="top-nav">
            <!-- below are the 'a' tags to direct users to different pages of the food ordering system. -->
            <div class="container">
                <a class="navbar-brand" href="">Burger Hub</a>
                <!-- an unordered list would be suitable to store the links -->
                <div class="collapse navbar-collapse" id="top-nav">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="html/login.php/">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="html/register.php/">Register</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!-- As the name implies, this div contains the main-content -->
    <div class="main-content" style="min-height: 0vh !important;">
        <div class="container">
            <p class=" big-title text-light">Burger Hub</p>
        </div>
        <div class="container">

        </div>
    </div>

    <!-- This div contains the footer. -->
    <div>
        <footer class="text-center text-lg-start footer-background">
            <div class="container p-4">
                <div class="row">
                    <div class="col-md-6 col-12 mb-0">
                        <h5><b>Order now!</b> <small>from Burger Hub</small></h5>
                        <p>Burger Hub is a local burger restaurant located in Hung Hom. You may nowe order our freshly made burgers without needing to go to our physical store. We provide free shipping to your location. Do not hesitate and order!</p>
                    </div>

                    <!-- these 3 pages are not the focus of my website, they are just to make the website realistic
                    So I simply make them ordering systems for other food. -->
                    <div class="col-md-6 col-12 mb-0">
                        <h5>Other ordering systems...</h5>
                        <a href="html/toBeContinued.html"><i>Ramen Hub</i></a><br>
                        <a href="html/toBeContinued.html"><i>Ice Cream Hub</i></a><br>
                        <a href="html/toBeContinued.html"><i>Curry Hub</i></a>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>