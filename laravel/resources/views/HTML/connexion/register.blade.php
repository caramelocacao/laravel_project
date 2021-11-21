<!--détails dans le fichier login-->
@extends('layout.connexion')
@section('content')
@if(session('success'))
<div class="alert alert-success">
        {{ session('success')}}
</div>
@endif 
@if(session('error'))
<div class="alert alert-error">
        {{ session('error')}}
</div>
@endif 
<div class="contenair_login">
    <div class="formulaire">
        <h2>Register</h2>
        <form action="/register" method="post">
            @csrf
            <label for="first name">First name :</label>
            <input type="text" id="name" name="name"><br><br>
            <label for="last name">Last name :</label>
            <input type="text" id="last_name" name="last_name"><br><br>
            <label for="email">Email :</label>
            <input type="email" id="email" name="email"><br><br>
            <label for="pass">Password :</label>
            <input type="password" id="password" name="password" minlength="8" required><br><br>
            <input type="password" placeholder="confirm Password" id="confirmpassword" name="password_confirmation" required><br><br>
            <input type="submit" value="Register">
        </form>
    </div>
</div>
@endsection