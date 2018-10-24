<!DOCTYPE html>
<html>
    <body>

        <h2>Register Page</h2>

        <form action="register" method="POST">
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
            First Name:<br>
            <input type="text" name="first_name">
            <br>
            Last Name:<br>
            <input type="text" name="last_name">
            <br>
            Birth Date:<br>
            <input type="text" name="birth_date">
            <br>
            Gender:<br>
            <input type="text" name="gender">
            <br>
            Email:<br>
            <input type="email" name="email">
            <br>
            Password:<br>
            <input type="password" name="password">
            <br>
            Confirm Password:<br>
            <input type="password" name="confirmPassword">
            <br><br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>