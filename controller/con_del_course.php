<?php
$cs_id=$_GET["cs_id"];

include_once "../model/ConDB.php";
include_once "../model/Course.php";
$obj_name=new Course();
$rs2=$obj_name->delCourse($cs_id);
?>