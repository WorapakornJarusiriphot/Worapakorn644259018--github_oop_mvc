<?php 
$cs_img=$_POST["cs_img"];
$cs_name=$_POST["cs_name"];
$cs_date=$_POST["cs_date"];
$cs_wallet=$_POST["cs_wallet"];
// $cs_img="images/12.png";
// $cs_name="อบรมเชิงปฏิบัติการ<br/>การผลิตปุ๋ยมูลไส้เดือนดินเพื่อกำจัดขยะอินทรีย์และเพื่อการค้า";
// $cs_date="30-31 ก.ค. 65";
// $cs_wallet="1,990 บ.";
?>

<?php
$course=array();
$course["cs_img"]=$cs_img;
$course["cs_name"]=$cs_name;
$course["cs_date"]=$cs_date;
$course["cs_wallet"]=$cs_wallet;
print_r($course);
?>

<?php
include_once "../model/ConDB.php";
include_once "../model/Course.php";
$obj_name=new Course();
$rs2= $obj_name->addCourse($course);
?>

<?php
if($rs2){
include "../view/view_course_card.php";
}
?>
