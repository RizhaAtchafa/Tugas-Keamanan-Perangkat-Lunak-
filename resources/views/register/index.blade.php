<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}">

	<title>Register</title>
</head>
<body>
	<div class="container">
		<form action="/register" method="POST" class="login-email">
      @csrf
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
			<div class="input-group">
				<input type="text" placeholder="Username" class="form-control @error('username')is-invalid @enderror" name="username"autocomplete="off">
        @error('username')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
			</div>
			<div class="input-group">
				<input type="number" placeholder="No Handphone" class="form-control @error('nomer')is-invalid @enderror" name="nomer" autocomplete="off">
        @error('nomer')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" class="form-control @error('email')is-invalid @enderror" name="email" autocomplete="off">
        @error('email')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" class="form-control @error('password')is-invalid @enderror" name="password" autocomplete="off">
        @error('password')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="input-group">
        <input type="datetime-local" class="form-control" placeholder="Enter Date">
      </div>
          <script type="text/javascript">
            $(function() {
                $('#datepicker').datepicker();
            });
          </script> 
			<div class="input-group">
				<button name="submit" class="btn">Register</button>
			</div>
			<p class="login-register-text">Have an account? <a href="/">Login Here</a>.</p>
		</form>
	</div>
</body>
</html>