<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIP INSERT FORM</title>
</head>

<body>
    <form method="post" action="insertPro.php">
        <table border="1">
            <tr>
                <td>Email</td>
                <td><input type="text" name="id" size="20" placeholder="ppp@gmail.com" required onfocus></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="passwd" size="20" placeholder="6~16 symbol" required></td>
            </tr>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" size="20" placeholder="Jhon Smith" required></td>
            </tr>
            <tr>
                <td>Phone Number</td>
                <td><input type="text" name="tel" size="20" placeholder="010-1111-2222"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Register">
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>

</body>

</html>