<?php
session_start();
$cs_id = $_SESSION['cs_id'];
$cs_img=$_POST["cs_img"];
$cs_name=$_POST["cs_name"];
$cs_date=$_POST["cs_date"];
$cs_wallet=$_POST["cs_wallet"];

include_once "../model/ConDB.php";
include_once "../model/Course.php";
$obj_name=new Course();
$rs2=$obj_name->editCourse($cs_id, $cs_name, $cs_img, $cs_date, $cs_wallet);
?>