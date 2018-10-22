<!DOCTYPE html>
<html>
    <body>

        <h2>Login Page</h2>

        <form action="/auth/auth-login" method="POST">
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
            Email:<br>
            <input type="email" name="email">
            <br>
            Password:<br>
            <input type="password" name="password">
            <br><br>
            <input type="submit" value="Submit">
        </form>
        <a href="/auth/register">Register</a>
    </body>
</html>