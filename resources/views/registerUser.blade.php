<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
</head>

<body style="margin:0;
font-family:Arial, Helvetica, sans-serif;
background:linear-gradient(135deg,#89f7fe,#66a6ff,#fbc2eb,#a18cd1);
background-size:400% 400%;
height:100vh;
display:flex;
justify-content:center;
align-items:center;">

<div style="
width:420px;
background:white;
padding:30px;
border-radius:20px;
box-shadow:0 15px 35px rgba(0,0,0,0.25);
">

<h1 style="
text-align:center;
margin-bottom:8px;
color:#5b21b6;">
🏠 Hostel Registration
</h1>

<p style="
text-align:center;
color:#666;
margin-bottom:25px;">
Create your student account
</p>

<form action="/register" method="POST">
@csrf
<label style="font-weight:bold;">Full Name</label><br>
<input type="text"
placeholder="Enter your full name" name="name"
style="
width:100%;
padding:12px;
margin-top:8px;
margin-bottom:18px;
border:2px solid #cbd5e1;
border-radius:10px;
font-size:15px;
box-sizing:border-box;
outline:none;
">

<label style="font-weight:bold;">Mobile Number</label><br>
<input type="text"
placeholder="Enter mobile number" name="mobile"
style="
width:100%;
padding:12px;
margin-top:8px;
margin-bottom:18px;
border:2px solid #cbd5e1;
border-radius:10px;
font-size:15px;
box-sizing:border-box;
outline:none;
">

<label style="font-weight:bold;">Address</label><br>
<textarea
placeholder="Enter your address" name="address"
style="
width:100%;
padding:12px;
margin-top:8px;
margin-bottom:18px;
border:2px solid #cbd5e1;
border-radius:10px;
font-size:15px;
height:80px;
resize:none;
box-sizing:border-box;
outline:none;
"></textarea>

<label style="font-weight:bold;">Password</label><br>
<input type="password"
placeholder="Create password" name="password"
style="
width:100%;
padding:12px;
margin-top:8px;
margin-bottom:18px;
border:2px solid #cbd5e1;
border-radius:10px;
font-size:15px;
box-sizing:border-box;
outline:none;
">

<label style="font-weight:bold;">Confirm Password</label><br>
<input type="password" name="confirm_password"
placeholder="Confirm password"
style="
width:100%;
padding:12px;
margin-top:8px;
margin-bottom:25px;
border:2px solid #cbd5e1;
border-radius:10px;
font-size:15px;
box-sizing:border-box;
outline:none;
">

<button
type="submit"
style="
width:100%;
padding:14px;
border:none;
border-radius:12px;
background:linear-gradient(to right,#ff6a00,#ee0979);
color:white;
font-size:17px;
font-weight:bold;
cursor:pointer;
transition:0.3s;">
Register
</button>
  @if(session('success'))
        <div style="background:#d4edda; color:#155724; padding:10px; border-radius:5px; margin-top:15px; text-align:center;">
            {{ session('success') }}
        </div>
    @endif
        @php
        $ers = ['name','mobile','password','address','confirm_password'];
    @endphp

    <ul style="padding-left:20px;">
        @foreach($ers as $er)
            @error($er)
                <li style="color:red;">{{ $message }}</li>
            @enderror
        @endforeach
    </ul>


<p style="
text-align:center;
margin-top:20px;
font-size:14px;
color:#666;">
Already have an account?
<a href="/login" style="
text-decoration:none;
color:#6d28d9;
font-weight:bold;">
Login
</a>
</p>

</form>

</div>

</body>
</html>