<!DOCTYPE html>
<html>
<head>
<title>LOgin</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-
alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-
KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-
alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-
ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
crossorigin="anonymous"></script>
<link rel="stylesheet" href="/assets/css/style2.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
<!--- <div class="row justify-content-center mt-5">
<div class="col-lg-4">
<div class="card">
<div class="card-header">
<h1 class="card-title text-center">Login</h1>
</div>
<div class="card-body">
@if(Session::has('error'))
<div class="alert alert-danger" role="alert">
{{ Session::get('error') }}
PEMROGRAMAN WEB DAN PERANGKAT BERGERAK
XII RPL 7
</div>
@endif
<form action="{{ route('login') }}" method="POST">
@csrf
<div class="form-group mb-3">
<input type="text" placeholder="Email"
id="email" class="form-control" name="email" required
autofocus>
@if ($errors->has('email'))
<span class="text-danger">{{ $errors->first('email') }}</span>
@endif
</div>
<div class="form-group mb-3">
<input type="password" placeholder="Password"
id="password" class="form-control" name="password" required>
@if ($errors->has('password'))
<span class="text-danger">{{ $errors->first('password') }}</span>
@endif
</div>
<div class="form-group mb-3">
<div class="checkbox">
<label>
<input type="checkbox" name="remember">
Remember Me
</label>
</div>
</div>
<div class="mb-3">
<div class="d-grid">
<button class="btn btn-primary">Login</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div> -->

<!-- Section: Design Block -->

   <body>

      <div class="bg-img">
         <div class="content">
         @if(Session::has('error'))
        <div class="alert alert-danger" role="alert">
        {{ Session::get('error') }}
        
            <header>Login Form</header>
            @endif
            <form action="{{ route('login') }}" method="POST">
            @csrf
              
               <div class="field">
                  <span class="fa fa-user"></span>
                  <input type="text" placeholder="Email" id="email" class="form-control"name="email" required
                  autofocus>
                  @if ($errors->has('email'))
                  <span class="text-danger">{{ $errors->first('email') }}</span>
                  @endif
               </div>
               <div class="field space">
                  <span class="fa fa-lock"></span>
                  <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                  @if ($errors->has('password'))
                  <span class="text-danger">{{ $errors->first('password') }}</span>
                  @endif
                  <span class="show">SHOW</span>
               </div>
               <div class="pass">
                  <a href="#">Forgot Password?</a>
               </div>
               <div class="field">
                  <input type="submit" value="LOGIN">
               </div>
            </form>
            <div class="login">
               Or login with
            </div>
            <div class="links">
               <div class="facebook">
                  <i class="fab fa-facebook-f"><span>Facebook</span></i>
               </div>
               <div class="instagram">
                  <i class="fab fa-instagram"><span>Instagram</span></i>
               </div>
            </div>
            <div class="signup">
               Don't have account?
               <a href="/register">Signup Now</a>
            </div>
         </div>
      </div>


      
      <script>
         const pass_field = document.querySelector('.pass-key');
         const showBtn = document.querySelector('.show');
         showBtn.addEventListener('click', function(){
          if(pass_field.type === "password"){
            pass_field.type = "text";
            showBtn.textContent = "HIDE";
            showBtn.style.color = "#3498db";
          }else{
            pass_field.type = "password";
            showBtn.textContent = "SHOW";
            showBtn.style.color = "#222";
          }
         });
      </script>
   </body>

   
</html>