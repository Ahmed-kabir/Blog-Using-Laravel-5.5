<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">

  
  
  
      <link rel="stylesheet" href="{{asset('login/css/style.css')}}">

  
</head>

<body>
  {!!Form::open(['url'=>'/save_user','method'=>'POST'])!!}
  <h3 class="text-success text-center">{{Session::get('message')}}</h3>
  <div class="login-page">
  <div class="form">
<!--<form class="register-form">-->
      <input type="text" placeholder="name" name="name"/>
      <input type="password" placeholder="password" name="password"/>
      <input type="text" placeholder="email address" name="email_address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="{{url('/add_user')}}">Sign In</a></p>
    <!--</form>-->
      </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="{{asset('login/js/index.js')}}"></script>



  {!!Form::close()!!}
</body>