<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sinh viên</title>
</head>
<body>
    <h2>Danh sách sinh viên:</h2>
    <?php
    for($i = 1; $i <= sizeof($studentList); $i++)
    {
        echo"<p><a href='?stid=" .$studentList[$i] ->id ."'>".$studentList[$i]->name ."</a></p>";
    }
    ?>
    <br>
    <p><a href="../index.php">Home page</a></p>
</body>
</html>