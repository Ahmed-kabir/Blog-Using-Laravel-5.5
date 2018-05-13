<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Flat HTML5/CSS3 Login Form</title>
  
  
  
      <link rel="stylesheet" href="{{asset('login/css/style.css')}}">

  
</head>

<body>
  {!!Form::open(['url'=>'/welcome','method'=>'POST'])!!}
  <div class="login-page">
  <div class="form">
    
    <form class="login-form">
      <input type="text" placeholder="username"/>
      <input type="password" placeholder="password"/>
      <button>login</button>
      <p class="message">Not registered? <a href="{{url('/register')}}">Create an account</a></p>
    </form>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="{{asset('login/js/index.js')}}"></script>



  {!!Form::close()!!}
</body>

</html>
