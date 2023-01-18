<?php
// echo $a_id, $a_name, $a_context, $a_pic, $a_location=$_GET["edit"];

// include_once "../model/ConDB.php";
// include_once "../model/Course.php";

// $obj_name=new Course();
// echo $rs2=$obj_name->editCourse($a_id, $a_name, $a_context, $a_pic, $a_location);
?>

<?php 
session_start();
$cs_id = $_GET["cs_id"];
$_SESSION['cs_id'] = $cs_id;
include_once "../model/ConDB.php";
include_once "../model/Course.php";

    $obj_name = new Course();
    $rs2=$obj_name->getCourseDetail($cs_id);
    ?>
<?php 
echo "<form action='../controller/con_edit_course.php' method='post'>
Name: <input type='text' name='cs_name' value= '".$rs2['cs_name']."'><br>
img: <input type='text' name='cs_img' value= '".$rs2['cs_img']."'><br>
Date: <input type='date' name='cs_date' value= '".$rs2['cs_date']."'><br>
Wallet: <input type='text' name='cs_wallet' value= '".$rs2['cs_wallet']."'><br>
<input type='submit'>
</form>
"
;
    ?>

    <!-- // $rs2=$obj_name->editCourse($cs_id);

    // if (isset($_POST['update'])) { 

        // $cs_id = $_GET['cs_id'];
        // $cs_name = $_POST['cs_name'];
        // $cs_img = $_POST['cs_img'];
        // $cs_date = $_POST['cs_date'];
        // $cs_wallet = $_POST['cs_wallet'];
        // $cs_range_date = $_POST['cs_range_date'];
        // $cs_fcourse = $_POST['cs_fcourse'];
        // $cs_time = $_POST['cs_time'];
        // $cs_location = $_POST['cs_location'];
        // $cs_group = $_POST['cs_group'];
        // $cs_detail = $_POST['cs_detail'];
        // $cs_perform = $_POST['cs_perform'];
        // $cs_reward = $_POST['cs_reward'];
        // $cs_schedule = $_POST['cs_schedule'];


        // $userid = $_GET['id'];
        // $fname = $_POST['cs_name'];
        // $lname = $_POST['cs_img'];
        // $email = $_POST['email'];
        // $cs_date = $_POST['cs_date'];
        // $address = $_POST['address'];

        $sql = $updatedata->update($cs_name,$cs_img,$cs_date,$cs_wallet,$cs_range_date,$cs_fcourse,$cs_time,$cs_location,$cs_group,$cs_detail,$cs_perform,$cs_reward,$cs_schedule,$cs_id);
        if ($sql) {
            echo "<script>alert('Updated Successfully!');</script>";
            echo "<script>window.location.href='index.php'</script>";
        } else {
            echo "<script>alert('Something went wrong! Please try again!');</script>";
            echo "<script>window.location.href='update.php'</script>";
        }
    }


?> -->