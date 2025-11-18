<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            height: 100vh;
            background: linear-gradient(135deg, #ffffff, #ffffff);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-box {
            width: 350px;
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.2);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border: none;
            border-bottom: 2px solid #ccc;
            outline: none;
        }

        .forgot {
            font-size: 13px;
            margin-top: 5px;
        }

        .btn {
            width: 100%;
            margin-top: 20px;
            background: #da0d0d;
            padding: 12px;
            border-radius: 25px;
            border: none;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        .signup {
            text-align: center;
            margin-top: 15px;
        }

        .error {
            color: red;
            text-align: center;
            margin-top: 10px;
        }
    </style>

</head>
<body>

<div class="login-box">
    <h2>Login</h2>

    {{-- ERROR LOGIN --}}
    @if ($errors->any())
        <p class="error">{{ $errors->first() }}</p>
    @endif

    {{-- FORM LOGIN --}}
    <form action="{{ route('login.post') }}" method="POST">
        @csrf

        <input type="text" name="username" placeholder="Username" required>

        <input type="password" name="password" placeholder="Password" required>

        <p class="forgot">Forgot Password?</p>

        <button type="submit" class="btn">Login</button>
    </form>

    <p class="signup">Not a member? <a href="/register">Signup</a></p>
</div>

</body>
</html>
