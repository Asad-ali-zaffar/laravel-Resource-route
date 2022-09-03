<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="{{url('css/style1.css')}}">
</head>
<body>
    <h2>Login Page</h2><br>
    <div class="login">
    <form id="login" method="post" action="{{route('admin.store')}}">
        @csrf
        <label><b>User Email
        </b>
        </label>
        <input type="email" name="Uname" id="Uname" placeholder="User @ name">
        <br><br>
        <label><b>Password
        </b>
        </label>
        <input type="Password" name="Pass" id="Pass" placeholder="Password">
        <br><br>
        <input type="submit">
        <br><br>
        {{-- <input type="checkbox" id="check">
        <span>Remember me</span>
        <br><br>
        Forgot <a href="#">Password</a> --}}
    </form>
</div>
</body>
</html>
