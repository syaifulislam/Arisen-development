<!DOCTYPE html>
<html>
    <body>

        <h2>Change Password Page</h2>

        <form action="/auth/change-password" method="POST">
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
            <input name="user_id" type="hidden" value="{{ $user->id }}"/>
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