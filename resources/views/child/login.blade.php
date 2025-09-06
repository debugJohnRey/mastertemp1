<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>UEP PORTAL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      body{
        height: 100vh;
        margin: 0;
        display:  flex;
      }
      .left-side{
        flex: 1;
        background: url('{{asset ("images/background.png")}}') no-repeat center center;
        background-size: cover;
        width: 70%;   
      }
      .right-side{
        display: flex;
        align-items: center;
        justify-content: center;
        background: white;
        width: 600px;
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

      .input {
        border: 1px solid #eee;
        background-color: #F1F3F4;
        color: #48547C;
        padding: .67857143em 1em;
        border-radius: .28571429rem;
        font-size: 17px;
        line-height: 1.21428571em;
        font-weight: 400;
      }

      .input:focus {
        outline: none;
      }

      .login-box {
        width: 80%;
        max-width: 400px;
      }

      .logo {
        display: block;
        margin: 0 auto 1.5rem auto;
        max-width: 500px;
      }
      .welcome {
        color: #202124;
        font-weight: 400;
        font-size: 28px;
      }
    </style>
  </head>
  <body>
    {{-- left side background --}}
    <div class="left-side"></div>

    {{-- right side login form --}} 

    <div class="right-side">
      <div class="login-box">
        <img src="{{asset ('images/logouep.png')}}" class="logo" alt="ueplogo">
        <h4 class="welcome text-left mb-3">Welcome!</h4>
        <form onsubmit="return false;">
          <div class="form-floating mb-3">
            <input type="text" class="input w-100" id="username" placeholder="Username">
          </div>

          <div class="mb-3 password-wrapper">
            <div class="form-floating">
              <input type="password" class="input w-100" id="password" placeholder="Password">
              <!-- <button type="button" class="toggle-pass" aria-label="Show/Hide password" onclick="togglePassword()"></button> -->
            </div>
          </div>
          
          <button type="button" class="btn btn-danger w-100 mb-3">Login</button>
        </form>
        <div class="text-center">
          <a href="#" class="frgt-pass d-block mb-2">Forgot Password?</a>
          <small class="tos small-note">
            by logging in , you agree with <a href="#" class="tos"> Terms and Conditions</a>
          </small>
        </div>
      </div>
    </div>
  </body>
</html>