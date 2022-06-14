<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>Login Admin</title>
    <link href="https://fonts.googleapis.com/css?family=Asap" rel="stylesheet">
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>
    <form class="login" method="POST" action="{{ route("login_admin") }}">
        @csrf
        <h3>Login Admin</h3>
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <button>Login</button>
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
</body>
</html>
