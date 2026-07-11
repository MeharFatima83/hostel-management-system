<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
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
✏️ Edit Student
</h2>

<p style="
text-align:center;
color:#666;
margin-bottom:25px;">
Update the student details
</p>

<form action="/students/update/{{ $student->id }}" method="POST">
@csrf

<label style="font-weight:bold;">Student Name</label><br>
<input type="text" name="name" value="{{ $student->name }}"
style="
width:100%;
padding:12px;
margin-top:8px;
margin-bottom:18px;
border:2px solid #ddd;
border-radius:10px;
box-sizing:border-box;">

<label style="font-weight:bold;">Mobile Number</label><br>
<input type="text" name="mobile" value="{{ $student->mobile }}"
style="
width:100%;
padding:12px;
margin-top:8px;
margin-bottom:18px;
border:2px solid #ddd;
border-radius:10px;
box-sizing:border-box;">

<label style="font-weight:bold;">Address</label><br>
<textarea name="address"
style="
width:100%;
height:80px;
padding:12px;
margin-top:8px;
margin-bottom:18px;
border:2px solid #ddd;
border-radius:10px;
box-sizing:border-box;
resize:none;">{{ $student->address }}</textarea>

<label style="font-weight:bold;">Room Number</label><br>
<input type="text" name="room_number" value="{{ $student->room_number }}"
style="
width:100%;
padding:12px;
margin-top:8px;
margin-bottom:18px;
border:2px solid #ddd;
border-radius:10px;
box-sizing:border-box;">

<label style="font-weight:bold;">Course</label><br>
<input type="text" name="course" value="{{ $student->course }}"
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

<option value="Male" {{ $student->gender == 'Male' ? 'selected' : '' }}>Male</option>
<option value="Female" {{ $student->gender == 'Female' ? 'selected' : '' }}>Female</option>
<option value="Other" {{ $student->gender == 'Other' ? 'selected' : '' }}>Other</option>

</select>

<label style="font-weight:bold;">Parent Contact</label><br>
<input type="text" name="parent_contact" value="{{ $student->parent_contact }}"
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

<option value="Paid" {{ $student->fees_status == 'Paid' ? 'selected' : '' }}>Paid</option>
<option value="Pending" {{ $student->fees_status == 'Pending' ? 'selected' : '' }}>Pending</option>

</select>

<button type="submit"
style="
width:100%;
padding:14px;
border:none;
border-radius:12px;
background:linear-gradient(to right,#f59e0b,#ea580c);
color:white;
font-size:17px;
font-weight:bold;
cursor:pointer;">
💾 Update Student
</button>

<br><br>

<a href="/students"
style="
display:block;
text-align:center;
text-decoration:none;
background:#6c757d;
color:white;
padding:12px;
border-radius:10px;">
⬅ Back to Student List
</a>

</form>

</div>

</body>
</html>