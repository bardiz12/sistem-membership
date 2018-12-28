<html>
<head>
    <title>REGISTER</title>
	
	<link rel="stylesheet" href="{{asset('asset/css/bootstrap.min.css')}}"  crossorigin="anonymous">
	<link rel="stylesheet" href="{{asset('asset/css/style.css')}}">
</head>
<body>
    <div class="konten">
        <div class="kepala">

			<img src="register.png" width="16%">
			<br>
			<h2>REGISTER</h2>
        </div>
        <div class="artikel">
		  <form action="{{ route('register') }}" method="post">
				@csrf
				<div class="grup">
						<input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus placeholder="Nama Lengkap">

						@if ($errors->has('name'))
						    <span class="invalid-feedback" role="alert">
							   <strong>{{ $errors->first('name') }}</strong>
						    </span>
						@endif
				</div>
				<div class="grup">
						<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="Email">

						@if ($errors->has('email'))
						    <span class="invalid-feedback" role="alert">
							   <strong>{{ $errors->first('email') }}</strong>
						    </span>
						@endif
				</div>
				<div class="grup">
						<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password">

						@if ($errors->has('password'))
						    <span class="invalid-feedback" role="alert">
							   <strong>{{ $errors->first('password') }}</strong>
						    </span>
						@endif
				</div>

				<div class="grup">
					<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Password Confirmation">
				</div>


				<div>

				<div>
                <div class="grup">
                    <input type="submit" value="REGISTER NOW" class="register">
				</div>
	</div>
<script src="{{asset('asset/js/bootstrap.min.js')}}" type="text/javascript"></script>
</body>
</html>
