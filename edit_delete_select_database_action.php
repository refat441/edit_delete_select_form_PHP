<?php
include("db.php");

if (!empty($_POST['std_name']) && !empty($_POST['std_id'])) {

    $edit_id = $_POST['edit_id'];
    $std_name = $_POST['std_name'];
    $std_id = $_POST['std_id'];
    $class_name = $_POST['class_name'];
    $dept_name = $_POST['dept_name'];
    $catagory = $_POST['catagory'];

    //for Edit or update
if(!empty($_POST['edit_id'])){
    $sql = $connect ->prepare(" UPDATE `students_data` 
        SET
            `std_name` = '". $std_name ."',
            `std_id` = '".$std_id."',
            `class_name`= '".$class_name."',
            `dept_name`='".$dept_name."',
            `catagory`='".$catagory."'
            WHERE id = '".$edit_id."' 
            ");
    $sql->execute();

        if($sql){
            print '<script>alert("Update Success!!"); window.location = "edit_delete_select_database.php"; </script>';
        }
        else{
            print '<script>alert("Update faild!!"); window.location = "edit_delete_select_database.php"; </script>';
        }
    } 
    else{  
    $Sql = $connect ->exec("INSERT INTO `students_data`(
        `id`,
        `std_name`, 
        `std_id`, 
        `class_name`, 
        `dept_name`,
        `catagory`, 
        `datetime`) 
        VALUES (
            NULL,
            '".$std_name."',
            '".$std_id."',
            '".$class_name."',
            '".$dept_name."',
            '".$catagory."',
            now())");
    if ($Sql) {
        print '<script>alert("Insert Success!!"); window.location = "edit_delete_select_database.php"; </script>';
    } 
    else {
        print '<script>alert("Insert is failed!!"); window.location = "edit_delete_select_database.php"; </script>';       
        }
    }
}
else{
    print '<script>alert("Form value is Null"); window.location = "edit_delete_select_database.php"; </script>';
}
?>

