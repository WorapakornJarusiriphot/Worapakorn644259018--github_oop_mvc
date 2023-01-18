<?php
$cs_id=$_GET["cs_id"];

include_once "../model/ConDB.php";
include_once "../model/Course.php";
$obj_name=new Course();
$rs2=$obj_name->getCourseDetail($cs_id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 50%;
        
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
    .center {
        margin-left: auto;
        margin-right: auto;
    }   
    </style>
</head>
    <table class="center">
    <tr>
        <th>Name</th>
        <th>Date</th>
        <th>Wallet</th>
        <th>Image</th>
    </tr>
    <tr>
        <td><?=$rs2["cs_name"];?></td>
        <td><?=$rs2["cs_img"];?></td>
        <td><?=$rs2["cs_date"];?></td>
        <td><?=$rs2["cs_wallet"];?></td>
    </tr>

<body>
    
</body>
</html>