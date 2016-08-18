<!DOCTYPE html>
<html>

<head>
    <title>Sign-Up</title>
</head>

<body id="body-color">
    <div id="Sign-Up">
        <fieldset style="width:30%">
            <legend>Registration Form</legend>
            <table border="0">
                <form method="POST" action="connect.php">
                    <tr>
                        <td>firstname</td>
                        <td>
                            <input type="text" name="name">
                        </td>
                    </tr>
                    <tr>
                        <td>lastname</td>
                        <td>
                            <input type="text" name="lastname">
                        </td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>
                            <input type="text" name="email">
                        </td>
                    </tr>
                    <tr>
                        <td>UserName</td>
                        <td>
                            <input type="text" name="user">
                        </td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>
                            <input type="password" name="pass">
                        </td>
                    </tr>
                    <tr>
                        <td>Confirm Password </td>
                        <td>
                            <input type="password" name="cpass">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input id="button" type="submit" name="submit" value="Sign-Up">
                        </td>
                    </tr>
                </form>
            </table>
        </fieldset>
    </div>
</body>

</html>
