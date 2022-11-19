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
            include_once("../View/UpdateStudentList.php");
        }  
        else if(isset($_POST['updatee']))
        {
            $id = $_REQUEST['idd'];
            $name = $_REQUEST['namee'];
            $age = $_REQUEST['agee'];
            $university = $_REQUEST['universityy'];
            $student = new Model_Student();
            $student->updateStudent($id, $name, $age, $university);
            header("Location: C_Student.php?mod2='1'");
        }
        else if(isset($_GET['stid_fix']))
        {
            $modelStudent = new Model_Student();
            $student = $modelStudent->getStudentDetail($_GET['stid_fix']);
            include_once("../View/StudentUpdate.php");
        }



        // Xóa sinh viên

        else if(isset($_GET['mod3']))
        {
            $modelStudent = new Model_Student();
            $studentList = $modelStudent->getAllStudent();
            include_once("../View/DeleteStudentList.php");
        }  
        else if(isset($_GET['stid_del']))
        {
            $id = $_GET['stid_del'];
            $student = new Model_Student();
            $student->deleteStudent($id);
            header("Location: C_Student.php?mod3='1'");
        }




        //Tìm kiếm sinh viên



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