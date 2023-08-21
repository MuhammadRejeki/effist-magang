<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/mystyle-login.css') }}">
</head>

<body>
    <div class="wrapper">
        <div class="container main">
            <div class="row">
                <?php $image = url('assets/images/login-page.png'); ?>
                <div class="col-md-6 side-image" style="background-image:url(<?= $image ?>)"> <!-- pake blade template ga tw knp error di vscode jadi php manual -->
                    <div class="text">
                        <i>Development Magang Test </i>
                    </div>
                    <!-- asd -->
                </div>
                <div class="col-md-6 right">

                    <div class="input-box">

                        <header>Login</header>
                        <div class="input-field">
                            <input type="text" class="input" id="email" name="email" required="" autocomplete="off">
                            <label for="email">Email</label>
                        </div>
                        <div class="input-field">
                            <input type="password" class="input" id="password" name="password" required="">
                            <label for="password">Password</label>
                        </div>
                        <div class="input-field">

                            <input type="submit" class="submit" value="Sign Up">
                        </div>
                        <div class="signin">
                            <span>user : admin@dev.com / admin</span>
                        </div>


                    </div>
                </div>
            </div>
        </div>
</body>

</html>