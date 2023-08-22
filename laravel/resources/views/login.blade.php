<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Dev Test</title>

    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/mystyle-login.css') }}">

    <style>
        .side-image {
            background-image: url("{{ url('assets/images/login-page.png') }}");
        }
    </style>

    <script src="{{ url('assets/js/jquery.min.js') }}"></script>
</head>

<body>
    <div class="wrapper">
        <div class="container main">
            <div class="row">

                <div class="col-md-6 side-image">
                    <div class="text">
                        <i>Development Magang Test </i>
                    </div>
                </div>
                <div class="col-md-6 right">

                    <div class="input-box">
                        <form class="contact100-form validate-form" method="post" action="{{ url('/login') }}" autocomplete="on">
                            @csrf
                            <header>Effist Suite Office</header>
                            <div class="input-field">
                                <input type="text" class="input" id="email" name="email" required="">
                                <label for="email">Email</label>
                            </div>
                            <div class="input-field">
                                <input type="password" class="input" id="password" name="password" required="">
                                <label for="password">Password</label>
                            </div>
                            <div class="input-field">
                                <input type="submit" class="btn btn-primary" value="LOGIN">
                            </div>
                            @if(session()->has('failed'))
                            <p class="signin" style="color: red;">
                                <i>{{ session('failed') }}</i>
                            </p>
                            @else
                            <div class="signin">
                                <span>user : admin@dev.com / admin</span>
                            </div>
                            @endif
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>