<!DOCTYPE html>
<html>
    <body>

        <h2>Forgot Password Page</h2>

        <form action="forgot-password" method="POST">
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
            Email:<br>
            <input type="email" name="email">
            <br>
            <br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>