<html>
<head>
    <title>Login</title>
	
	<link rel="stylesheet" href="{{asset('asset/css/bootstrap.min.css')}}"  crossorigin="anonymous">
	<link rel="stylesheet" href="{{asset('asset/css/style.css')}}">
</head>
<body>
    <div class="konten">
        <div class="kepala2">

			<img src="{{asset('asset/images/register.png')}}" width="16%">
			<br>
			<h2>LOGIN</h2>
        </div>
        <div class="artikel">
            <form  method="post" action="{{ route('login') }}">
                @csrf
				<div class="grup">
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
				</div>
				
                <div class="grup">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" name="password" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
				</div>
				
                <div class="row">
                    <div class="col-lg-6" style="padding-left: 40px;">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                    </div>
                    <div class="col-lg-6">
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </div>
                <div class="grup">
                    <input type="submit" value="SIGN IN" class="login" style="background-color: #efc404;">
                </div>
                
    </div>
    
               <div style="font-size: 100%;text-align:center;width:100%;">
                <hr>
                   <p style="color: #777;">Or You can login with one of the following</p> 
               </div>  
               <ul class="sosmed">
                   <li>
                       <a href="">
                           <img src="{{asset('asset/images/fb.png')}}" alt="" width="35px">
                       </a>
                   </li>
                   <li>
                        <a href="">
                            <img src="{{asset('asset/images/twitter.png')}}" alt="">
                        </a>
                    </li>
                    <li>
                            <a href="">
                                <img src="{{asset('asset/images/gmail.png')}}" alt="">
                            </a>
                        </li>
               </ul>
               <div style="font-size: 100%;text-align:center;width:100%;"> 
                    <p style="color :#777;">Dont have an account ? <a href="{{url('/register')}} " style="color:#666;">Sign Up</a> </p>
               </div>
               
    
</div>
    

<script src="{{asset('asset/js/bootstrap.min.js')}}" type="text/javascript"></script>
</body>
</html>
