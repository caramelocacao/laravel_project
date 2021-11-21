<!--détails dans le fichier login-->
@extends('layout.connexion')
@section('content')
        <div class="contenair_login">
            <div class="formulaire">
                <h2>Reset</h2>
                <form action="/login" method="post">
                    <label for="pass">New Password :</label>
                    <input type="password" placeholder="new password" id="password" name="password" minlength="8" required><br><br>
                    <input type="password" placeholder="confirm password" id="new_password" required><br><br>
                    <label for="email">Email :</label>
                    <input type="email" placeholder="exemple@gmail.com" id="email" name="email"><br><br>
                    <input type="submit" value="Register">
                </form>
            </div>
        </div>
@endsection