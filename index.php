<?php
include_once "model/ConDB.php";
include_once "model/Course.php";
$obj_name=new Course();
$rs2=$obj_name->getCourse();
?>
<table>
    <?php foreach($rs2 as $row){?>
    <tr style="boder: 1px;">
        <td><a href="view/view_course.php?cs_id=<?=$row["cs_id"];?>"><?=$row["cs_name"];?></a></td>
        <td><a href="controller/con_del_course.php?cs_id=<?=$row["cs_id"];?>">ลบ</a></td>
        <td><a href="view/view_edit_course.php?cs_id=<?=$row["cs_id"];?>">แก้ไข</a></td>
    </tr>
    <?php
    }
    ?>
</table>
<br>
<br>
<button type="button"><a href="view/form_add_course.php">เพิ่ม</a></button>