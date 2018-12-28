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
            <form action="#" method="post">
				
				<div class="grup">
						<input type="text" placeholder="Email">
					</div>
				
                <div class="grup">
                    <input type="password" placeholder="Password">
				</div>
				
                <div class="row">
                    <div class="col-lg-6">
                        <input type="checkbox" name="" id=""> Remember Me
                    </div>
                    <div class="col-lg-6">
                        <a href="" style="color: #777;">Forgot Password?</a>
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
                           <img src="{{asset('asset/images/fb.png')}}" alt="">
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
                    <p style="color :#777;">Dont have an account ? <a href="" style="color:#666;">Sign Up</a> </p>
               </div>
               
    
</div>
    

<script src="{{asset('asset/js/bootstrap.min.js')}}" type="text/javascript"></script>
</body>
</html>
