<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>

<body style="margin:0;
font-family:Arial;
background:linear-gradient(135deg,#89f7fe,#66a6ff,#fbc2eb,#a18cd1);
height:100vh;
display:flex;
justify-content:center;
align-items:center;">

<div style="width:400px;background:#fff;padding:30px;border-radius:20px;">

<h2 style="text-align:center;">User Login</h2>

@if(session('success'))
<div style="color:green;text-align:center;">
{{ session('success') }}
</div>
@endif

<form action="{{ url('/login') }}" method="POST">

@csrf

<label>Name</label>

<input
type="text"
name="name"
value="{{ old('name') }}"
style="width:100%;padding:10px;margin:10px 0;">

@error('name')
<div style="color:red">{{ $message }}</div>
@enderror

<label>Password</label>

<input
type="password"
name="password"
style="width:100%;padding:10px;margin:10px 0;">

@error('password')
<div style="color:red">{{ $message }}</div>
@enderror

<button
type="submit"
style="width:100%;padding:12px;background:#6d28d9;color:white;border:none;">
Login
</button>

</form>

<p style="text-align:center;margin-top:20px;">
Don't have an account?

<a href="{{ url('/register') }}">
Register
</a>

</p>

</div>

</body>
</html>