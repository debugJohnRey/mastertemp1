<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>UEP PORTAL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            height: 100vh;
            margin: 0;
            display: flex;
        }

        .left-side {
            background: url('{{ asset('images/background.png') }}') no-repeat center center;
            background-size: cover;
            width: 58%;
        }

        .right-side {
            display: flex;
            align-items: center;
            justify-content: center;
            background: white;
            width: 42%;
        }

        .login-container {
            width: 72%;
            height: 70%;
        }

        .logo {
            width: 100px;
            margin: 0 auto;
            display: block;
        }

        .password-wrapper {
            position: relative;
        }

        .uep-logo {
            width: 280px;
            height: 250px;
            margin: 0 auto;
            display: block;
        }

        .custom-large-text {
            font-size: 2.3rem;
        }

        .login-button {
            background-color: #C5172E;
            color: white;
            border: none;
            border-radius: 5px;
            font-weight: bold;
        }

        .text-color {
            color: #C5172E;
        }

        .text-size {
            font-size: 1.1rem;
        }

        .input {
            border: 1px solid #eee;
            background-color: #F1F3F4;
            color: #48547C;
            padding: .67857143em 1em;
            border-radius: .28571429rem;
            font-size: 17px;
            line-height: 1.21428571em;
            font-weight: 400;
            padding-right: 50px;
            /* Make space for the toggle button */
        }

        .input:focus {
            outline: none;
        }

        .btn {
            background-color: #B90003;
            border: none;
            font-size: 16px;
            padding: .78571429em 1.5em .78571429em;
            font-weight: 400;
            font-family: 'Open Sans', sans-serif !important;
            line-height: 1em;
            border-radius: .28571429rem;
        }

        .frgt-pass,
        .tos {
            color: #B90003;
            text-decoration: none;
        }

        .toggle-pass {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            cursor: pointer;
            padding: 5px;
            z-index: 10;
        }

        .toggle-pass:hover {
            opacity: 0.7;
        }

        .toggle-pass svg {
            width: 20px;
            height: 20px;
            fill: #007BFF;
        }
    </style>
</head>

<body>
    {{-- left side background --}}
    <div class="left-side"></div>
    <div class="right-side">
        <div class="login-container">
            <img src="{{ asset('images/logouep.png') }}" class="uep-logo" alt="ueplogo">
            <p class="custom-large-text fw-600">Welcome!</p>
            <form onsubmit="return false;">
                <div class="form-floating mb-3">
                    <input type="text" class="input w-100" id="username" placeholder="Username">
                </div>
                <div class="mb-3 password-wrapper">
                    <div class="form-floating">
                        <input type="password" class="input w-100" id="password" placeholder="Password">
                        <button type="button" class="toggle-pass" aria-label="Show/Hide password"
                            onclick="togglePassword()">
                            <svg class="eye-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z" />
                            </svg>
                            <svg class="eye-slash-icon" style="display: none;" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 7c2.76 0 5 2.24 5 5 0 .65-.13 1.26-.36 1.83l2.92 2.92c1.51-1.26 2.7-2.89 3.43-4.75-1.73-4.39-6-7.5-11-7.5-1.4 0-2.74.25-3.98.7l2.16 2.16C10.74 7.13 11.35 7 12 7zM2 4.27l2.28 2.28.46.46C3.08 8.3 1.78 10.02 1 12c1.73 4.39 6 7.5 11 7.5 1.55 0 3.03-.3 4.38-.84l.42.42L19.73 22 21 20.73 3.27 3 2 4.27zM7.53 9.8l1.55 1.55c-.05.21-.08.43-.08.65 0 1.66 1.34 3 3 3 .22 0 .44-.03.65-.08l1.55 1.55c-.67.33-1.41.53-2.2.53-2.76 0-5-2.24-5-5 0-.79.2-1.53.53-2.2zm4.31-.78l3.15 3.15.02-.16c0-1.66-1.34-3-3-3l-.17.01z" />
                            </svg>
                        </button>
                    </div>
                </div>
                <button type="button" class="btn btn-danger w-100 mb-3">Login</button>
            </form>
            <div class="text-center">
                <p class="fw-700 text-color text-size">Forgot Password?</p>
                <a href="" class="text-decoration-none text-size text-color">By logging in, you agree with Terms
                    and Conditions</a>
            </div>
        </div>
    </div>

    <script>
        function togglePassword() {
            const passwordField = document.getElementById('password');
            const eyeIcon = document.querySelector('.eye-icon');
            const eyeSlashIcon = document.querySelector('.eye-slash-icon');

            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                eyeIcon.style.display = 'none';
                eyeSlashIcon.style.display = 'block';
            } else {
                passwordField.type = 'password';
                eyeIcon.style.display = 'block';
                eyeSlashIcon.style.display = 'none';
            }
        }
    </script>
</body>

</html>
