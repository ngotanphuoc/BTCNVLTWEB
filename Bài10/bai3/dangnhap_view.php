<html>
    <head>
        <title>dang nhap</title>
    </head>
    <body>
        <form action="xulidangnhap.php" method="post">
            <table>
                <tr>
                    <td><label for="user">Tai khoan: </label></td>
                    <td><input type="text" name="username" id="user"></td>
                </tr>

                <tr>
                    <td><label for="pass">Mat khau: </label></td>
                    <td><input type="password" name="pass" id="pass"></td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="checkbox"
                        name="remember"><span>Remember</span>
                    </td>
                </tr>

                <tr>
                    <td><input type="submit" value="dang nhap" name="login"></td>
                    <td><input type="submit" value="huy" name="cancel"></td>
                </tr>
            </table>
        </form>
    </body>
</html>