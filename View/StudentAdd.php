<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sinh viên</title>
</head>
<body>
    <h2>Thêm sinh viên: </h2>
    <form action="C_Student.php" method="post">
        <table>
            <tr>
                <td>Name: </td>
                <td><input type="text" name="namee"></td>
            </tr>
            <tr>
                <td>Age: </td>
                <td><input type="text" name="agee"></td>
            </tr>
            <tr>
                <td>University: </td>
                <td><input type="text" name="universityy"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="insertt" value="Insert"></td>
            </tr>
        </table>
    </form>
</body>
</html>