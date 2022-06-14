<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login or SignUp</title>
    <link rel="stylesheet" href="css/auth.css">

</head>

<body>
    <div class="main">
        <!-- SiginUp Form -->
        <div class="container a-container" id="a-container">
            <form class="form" method="post" action="{{ route('signup') }}">
                @csrf
                <h2 class="form_title title">Create Account</h2>
                <span class="form__span">or use email for registration</span>
                <input class="form__input" name="name" type="text" placeholder="Name">
                <input class="form__input" name="email" type="text" placeholder="Email">
                <input class="form__input" name="password" type="password" placeholder="Password">
                <input class="form__input" name="address" type="text" placeholder="Address">
                <input class="form__input" name="phone" type="number" placeholder="phone">
                <input type="submit" class="form__button button" value="SIGN UP">
                <div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <h4 style="color:red">{{ $error }}</h4>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </form>
        </div>
        <!-- End SiginUp Form -->

        <!-- Login Form -->
        <div class="container b-container" id="b-container">
            <form class="form" id="b-form" method="post" action="{{ route('login') }}">
                @csrf
                <span class="form__span">or use your email account</span>
                <input class="form__input" name="email" type="text" placeholder="Email">
                <input class="form__input" name="password" type="password" placeholder="Password">
                <button class="form__button button">SIGN IN</button>
                <div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <h4 style="color:red">{{ $error }}</h4>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </form>
        </div>
        <!-- End Login Form -->

        <div class="switch" id="switch-cnt">
            <div class="switch__circle"></div>
            <div class="switch__circle switch__circle--t"></div>
            <div class="switch__container" id="switch-c1">
                <h2 class="switch__title title">Welcome Back !</h2>
                <p class="switch__description description">To keep connected with us please login with your personal
                    info</p>
                <button class="switch__button button switch-btn">SIGN IN</button>
            </div>
            <div class="switch__container is-hidden" id="switch-c2">
                <h2 class="switch__title title">Hello Friend !</h2>
                <p class="switch__description description">Enter your personal details</p>
                <button class="switch__button button switch-btn">SIGN UP</button>
            </div>
        </div>
    </div>
    <script src="js/auth.js"></script>
</body>

</html>
