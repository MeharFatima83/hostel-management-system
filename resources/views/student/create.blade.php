<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
</head>

<body style="
margin:0;
font-family:Arial, Helvetica, sans-serif;
background:linear-gradient(135deg,#74ebd5,#9face6,#fbc2eb);
background-size:400% 400%;
display:flex;
justify-content:center;
align-items:center;
min-height:100vh;">

<div style="
width:500px;
background:#fff;
padding:30px;
border-radius:20px;
box-shadow:0 15px 35px rgba(0,0,0,0.25);">

<h2 style="
text-align:center;
color:#4f46e5;
margin-bottom:10px;">
🎓 Add Student
</h2>

<p style="
text-align:center;
color:#666;
margin-bottom:25px;">
Fill the student details below
</p>

<form action="/students/store" method="POST">
@csrf

<label style="font-weight:bold;">Student Name</label><br>
<input type="text" name="name" placeholder="Enter Student Name"
style="
width:100%;
padding:12px;
margin-top:8px;
margin-bottom:18px;
border:2px solid #ddd;
border-radius:10px;
box-sizing:border-box;">

<label style="font-weight:bold;">Mobile Number</label><br>
<input type="text" name="mobile" placeholder="Enter Mobile Number"
style="
width:100%;
padding:12px;
margin-top:8px;
margin-bottom:18px;
border:2px solid #ddd;
border-radius:10px;
box-sizing:border-box;">

<label style="font-weight:bold;">Address</label><br>
<textarea name="address" placeholder="Enter Address"
style="
width:100%;
height:80px;
padding:12px;
margin-top:8px;
margin-bottom:18px;
border:2px solid #ddd;
border-radius:10px;
box-sizing:border-box;
resize:none;"></textarea>

<label style="font-weight:bold;">Room Number</label><br>
<input type="text" name="room_number" placeholder="Enter Room Number"
style="
width:100%;
padding:12px;
margin-top:8px;
margin-bottom:18px;
border:2px solid #ddd;
border-radius:10px;
box-sizing:border-box;">

<label style="font-weight:bold;">Course</label><br>
<input type="text" name="course" placeholder="Enter Course"
style="
width:100%;
padding:12px;
margin-top:8px;
margin-bottom:18px;
border:2px solid #ddd;
border-radius:10px;
box-sizing:border-box;">

<label style="font-weight:bold;">Gender</label><br>
<select name="gender"
style="
width:100%;
padding:12px;
margin-top:8px;
margin-bottom:18px;
border:2px solid #ddd;
border-radius:10px;">

<option value="">Select Gender</option>
<option value="Male">Male</option>
<option value="Female">Female</option>
<option value="Other">Other</option>

</select>

<label style="font-weight:bold;">Parent Contact</label><br>
<input type="text" name="parent_contact" placeholder="Enter Parent Contact"
style="
width:100%;
padding:12px;
margin-top:8px;
margin-bottom:18px;
border:2px solid #ddd;
border-radius:10px;
box-sizing:border-box;">

<label style="font-weight:bold;">Fees Status</label><br>
<select name="fees_status"
style="
width:100%;
padding:12px;
margin-top:8px;
margin-bottom:25px;
border:2px solid #ddd;
border-radius:10px;">

<option value="">Select Fees Status</option>
<option value="Paid">Paid</option>
<option value="Pending">Pending</option>

</select>

<button type="submit"
style="
width:100%;
padding:14px;
border:none;
border-radius:12px;
background:linear-gradient(to right,#4f46e5,#7c3aed);
color:white;
font-size:17px;
font-weight:bold;
cursor:pointer;">
➕ Add Student
</button><br>
@if(session('success'))
    <div style="
        background:#d4edda;
        color:#155724;
        padding:10px;
        margin-bottom:15px;
        border-radius:5px;">
        {{ session('success') }}
    </div>
@endif
</form>

</div>

</body>
</html>