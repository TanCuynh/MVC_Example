<?php
include_once("../Model/M_Student.php");
class Ctrl_Student
{
    public function __invoke()
    {
        if(isset($_GET['stid']))
        {
            $modelStudent = new Model_Student();
            $student = $modelStudent->getStudentDetail($_GET['stid']);
            include_once("../View/StudentDetail.php");
        }



        // Thêm sinh viên

        else if(isset($_GET['mod1']))
        {
            include_once("../View/StudentAdd.php");
        }  
        else if(isset($_POST['insertt']))
        {
            $name = $_REQUEST['namee'];
            $age = $_REQUEST['agee'];
            $university = $_REQUEST['universityy'];
            $student = new Model_Student();
            $student->addStudent($name, $age, $university);
            header("Location: C_Student.php");
        }


        // Sửa sinh viên

        else if(isset($_GET['mod2']))
        {
            $modelStudent = new Model_Student();
            $studentList = $modelStudent->getAllStudent();
            include_once("../View/PickStudentToUpdate.php");
        }  
        else if(isset($_POST['updatee']))
        {
            $id = $_REQUEST['idd'];
            $name = $_REQUEST['namee'];
            $age = $_REQUEST['agee'];
            $university = $_REQUEST['universityy'];
            $student = new Model_Student();
            $student->updateStudent($id, $name, $age, $university);
            $studentList = $student->getAllStudent();
            include_once("../View/StudentList.php");
        }
        else if(isset($_POST['chooseToUpdatee']))
        {
            $id = $_REQUEST['idd'];
            $modelStudent = new Model_Student();
            $student = $modelStudent->getStudentDetail($id);
            include_once("../View/StudentUpdate.php");
        }



        // Xóa sinh viên

        else if(isset($_GET['mod3']))
        {
            $modelStudent = new Model_Student();
            $studentList = $modelStudent->getAllStudent();
            include_once("../View/PickStudentToDelete.php");
        }  
        else if(isset($_POST['chooseToDeletee']))
        {
            $id = $_REQUEST['idd'];
            $student = new Model_Student();
            $student->deleteStudent($id);
            $studentList = $student->getAllStudent();
            include_once("../View/StudentList.php");
        }




        //Tìm kiếm sinh viên

        else if(isset($_GET['mod4']))
        {
            $modelStudent = new Model_Student();
            $studentList = $modelStudent->getAllStudent();
            include_once("../View/SearchStudent.php");
        }  
        else if(isset($_POST['searchh']))
        {
            $option = $_REQUEST['optionSearch'];
            $value = $_REQUEST['valuee'];
            $student = new Model_Student();
            $studentList = $student->searchStudent($option, $value);
            include_once("../View/StudentList.php");
        }


        else
        {
            $modelStudent = new Model_Student();
            $studentList = $modelStudent->getAllStudent();
            include_once("../View/StudentList.php");
        }   
    }
};
$C_Student = new Ctrl_Student();
$C_Student->__invoke();
?>