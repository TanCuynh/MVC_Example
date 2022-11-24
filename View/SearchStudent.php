<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm kiếm sinh viên</title>
</head>
<body>
    <h2>Tìm kiếm sinh viên</h2>
    <form action="C_Student.php" method="post">
        <table>
            <tr>
                <td>Tìm theo: </td>
                <td>
                    <label for="id">Mã sinh viên</label>
                    <input type=radio name="optionSearch" id="id" value="id"/>
                    <label for="name">Tên sinh viên</label>
                    <input type=radio name="optionSearch" id="name" value="name"/>
                    <label for="university">Trường đại học</label>
                    <input type=radio name="optionSearch" id="university" value="university"/>

                </td>   
            </tr>
            <tr>
                <td>Giá trị: </td>
                <td><input type="text" name="valuee"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="searchh" value="Tìm kiếm"></td>
            </tr>
        </table>
    </form>
</body>
</html>