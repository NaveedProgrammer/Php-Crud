<?php
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
            echo json_encode(array("std"=>$row));
        }else{
            echo "NOT FOuNDED";
        }
    }else{
        header("location:crud.php");
    }
?>