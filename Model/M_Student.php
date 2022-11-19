<?php
include_once("E_Student.php");
class Model_Student
{
    public function __construct(){}
    
    public function getAllStudent()
    {
        $link = mysqli_connect('localhost','root','') or die('Could not connect:' .mysqli_error());
        mysqli_select_db($link,'DULIEU');
        $rs = mysqli_query($link,"SELECT * FROM SINHVIEN");
        $i = 0;
        while($row = mysqli_fetch_array($rs))
        {
            $id = $row['id'];
            $name = $row['name'];
            $age = $row['age'];
            $university = $row['university'];
            while($i!=$id)    $i++;
            $students[$i++] = new Entity_Student($id, $name, $age, $university);
        }
        return $students;
    }

    public function getStudentDetail($stid)
    {
        $allStudent = $this->getAllStudent();
        return $allStudent[$stid];
    }

    public function addStudent($name, $age, $university)
    {
        $link = mysqli_connect('localhost','root','') or die('Could not connect:'.mysqli_error());
        mysqli_select_db($link,'DULIEU');
        $rs = mysqli_query($link,"INSERT INTO SINHVIEN (`name`, age, university) VALUES ('$name', $age ,'$university')");
        mysqli_close($link);
    }

    public function updateStudent($id, $name, $age, $university)
    {
        $link = mysqli_connect('localhost','root','') or die('Could not connect:'.mysqli_error());
        mysqli_select_db($link,'DULIEU');
        $rs = mysqli_query($link,"UPDATE SINHVIEN SET `name` = '".$name."', age = '".$age."', university = '".$university."' WHERE id = '".$id."'");
        mysqli_close($link);
    }

    public function deleteStudent($id)
    {
        $link = mysqli_connect('localhost','root','') or die('Could not connect:'.mysqli_error());
        mysqli_select_db($link,'DULIEU');
        $rs = mysqli_query($link,"DELETE FROM sinhvien WHERE id = '".$id."'");
        mysqli_close($link);
    }
}
?>