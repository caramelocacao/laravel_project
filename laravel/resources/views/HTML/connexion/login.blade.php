@extends('layout.connexion')
@section('content')
     <!--encadrement du body-->
        <div class="contenair_login"> <!--encadrement du milleu du site (sans header et footer)-->
            <div class="formulaire"> <!--encadrement du formulaire-->
                <h2>Login</h2>
                <form action="/login" method="post"> 
	                @csrf 
                    <label for="email">Email :</label>
                    <input type="email" id="email" name="email">
                    <label for="pass">Password :</label>
                    <input type="password" id="password" name="password" minlength="8" required>
                    <div class="flex">
                        <a href="reset">forgot password ?</a>
                        <a href="register">sign up</a>
                    </div>
                    <input type="submit" value="Login ">
                </form>
            </div>
        </div>  
@endsection 
