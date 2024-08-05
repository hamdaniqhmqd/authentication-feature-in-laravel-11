<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

</head>

<body>
    <div class="wrapper">
        <div class="title">Login</div>
        <div class="desc">Enter the correct username and password</div>
        <form action="{{ url('process_login') }}" method="POST">
            @csrf
            <div class="input-box">
                <input type="text" name="username" id="name" required value="{{ old('name') }}" />
                <label for="name" id="labeluser">Username</label>
                <i class="fa fa-user" id="user_icon"></i>
            </div>
            <div class="input-box">
                <input type="password" name="password" id="pass" required />
                <label for="pass" id="labelpass">Password</label>
                <i class="fa fa-eye-slash" id="pass_icon"></i>
            </div>
            <div class="forget">
                <label>
                    <input type="checkbox" id="checkbox" /> Remember me
                </label>
            </div>
            <div class="input-box button">
                <input id="button" type="submit" value="Submit" class="" required />
            </div>
            <div class="register">
                <span class="text">Don't have an account? </span><a href="{{ url('/register') }}"
                    class="link">Register</a>
            </div>
        </form>
    </div>
    <script src="{{ asset('js/login.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        @if (session('success'))
            Swal.fire({
                icon: "success",
                title: "BERHASIL",
                text: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @elseif (session('error'))
            Swal.fire({
                icon: "error",
                title: "PERINGATAN",
                text: "{{ session('error') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @endif
    </script>
</body>

</html>
