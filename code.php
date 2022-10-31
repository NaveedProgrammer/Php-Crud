<?php
session_start();
    include 'header.php';
    if(isset($_POST['addStd'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $course=$_POST['course'];
        $query="INSERT INTO `students`(`std_name`, `std_email`, `std_pass`, `std_course`) VALUES ('$name','$email','$pass','$course')";
        $res=mysqli_query($conn,$query);
        if($res){
            header("location:crud.php");
        }
    }else if(isset($_POST['isEdit'])){
        $id=$_POST['EditId'];
        $query="SELECT * FROM students WHERE std_id='$id'";
        $res=mysqli_query($conn,$query);
        if(mysqli_num_rows($res)>0){
            $row=mysqli_fetch_assoc($res);
            echo json_encode($row);
        }else{
            echo "RECORD NOT FOuNDED";
        }
    }else if(isset($_POST['isDelete'])){
        $id=$_POST['DelId'];
        $query="DELETE FROM students WHERE std_id='$id'";
        $res=mysqli_query($conn,$query);
        if($res){
            echo "Student Deleted";
        }else{
            echo "RECORD NOT FOuNDED";
        }
    }else if(isset($_POST['isUpdate'])){
        $id=$_POST['id'];
        $name=$_POST['name'];
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $course=$_POST['course'];
        $query="UPDATE `students` SET `std_name`='$name',`std_email`='$email',`std_pass`='$pass',`std_course`='$course' WHERE `std_id`='$id'";
        $res=mysqli_query($conn,$query);
        if($res){
            echo $name." Updated";
        }else{
            echo "OOPs Updation Failed";
        }
    }else{
        header("location:crud.php");
    }
?>