<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật sinh viên</title>
</head>
<body>
    <h2>Cập nhật sinh viên: </h2>
    <form action="C_Student.php" method="post">
        <table>
        <tr>
                <td>ID: </td>
                <td><input type="text" name="idd" readonly value='<?php echo $student->id ?>'></td>   
            </tr>
            <tr>
                <td>Name: </td>
                <td><input type="text" name="namee" value='<?php echo $student->name ?>'></td>
            </tr>
            <tr>
                <td>Age: </td>
                <td><input type="text" name="agee" value='<?php echo $student->age ?>'></td>
            </tr>
            <tr>
                <td>University: </td>
                <td><input type="text" name="universityy" value='<?php echo $student->university ?>'></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="updatee" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>