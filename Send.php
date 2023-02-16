<?php
    if(isset($_POST['name']) and isset($_POST['surname']) and isset($_POST['email']) and isset($_POST['title']) and isset($_POST['message'])){
        $name=$_POST['name'];
        $sname=$_POST['surname'];
        $email=$_POST['email'];
        $title=$_POST['title'];
        $mess=$_POST['message'];
        mail("slenzak2115@gmail.com,".$email,$title,$mess);}
?>