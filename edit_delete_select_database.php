<?php include ("db.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <!--For Delete-->
<?php
if(!empty($_GET['confirm']) and $_GET['confirm'] == 'yes' and !empty($_GET['id'])){
    $sql = $connect->prepare("DELETE FROM `students_data` WHERE `id` = '".$_GET['id']."' ");
    $sql->execute();
}
?>

    <!--for selecet query-->
<?php
if(!empty($_GET['id'])){
    $sql =  $connect->prepare("SELECT * FROM `students_data` WHERE id='".$_GET['id']."' ORDER BY id ASC ");
    $sql->execute();
    $fetch_list = $sql->fetch(PDO::FETCH_ASSOC);
}

if(!empty($fetch_list['id'])){
    $edit_id = $fetch_list['id'];
}
else{
    $edit_id = '';
}

if(!empty($fetch_list['std_name'])){
    $std_name = $fetch_list['std_name'];
}
else{
    $std_name = '';
}

if(!empty($fetch_list['std_id'])){
    $std_id = $fetch_list['std_id'];
}
else{
    $std_id='';
}

if(!empty($fetch_list['class_name'])){
    $class_name = $fetch_list['class_name'];
}
else{
    $class_name = '';
}

if(!empty($fetch_list['dept_name'])){
    $dept_name = $fetch_list['dept_name'];
}
else{
    $dept_name = '';
}

if(!empty($fetch_list['catagory'])){
    $catagory = $fetch_list['catagory'];
}
else{
    $catagory = '';
}
?>

<div class="container">
<form action="edit_delete_select_database_action.php" method="POST" target="_blink">
    <div class="row">
        <div class="col-sm-6 mx-auto">
            <div class="card mt-5 mb-5">
                <div class="card-header">
                    <h4 class="text-center">Student Information</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <input type="hidden"  name="edit_id" id="edit_id" value="<?php print $edit_id;?>">
                            <input type="text" name="std_name" required id="std_name" value="<?php print $std_name;?>" placeholder="First Name" autocomplete="off" class="form-control text-capitalize">
                        </div>

                        <div class="col-sm-6 form-group">
                            <input type="text" name="std_id" required id="std_id" value="<?php print $std_id;?>" placeholder="Student ID" autocomplete="off" class="form-control"> 
                        </div> 

                        <div class="col-sm-12 form-group">
                            <input type="text" name="class_name" required id="class_name" value="<?php print $class_name;?>" placeholder="Class Name" autocomplete="off" class="form-control text-capitalize"> 
                        </div> 

                        <div class="col-sm-12 form-group">                           
                            <select class="form-control  text-capitalize" name="dept_name" required id="dept_name">
                            <option value="">Select</option>
                            <option value="Large select" <?php if($dept_name == "Large select") { ?> selected <?php } ?> >Large select</option>
                            <option value="SM select" <?php if($dept_name == "SM select") { ?> selected <?php } ?>>SM select</option>
                            <option value="SSM select" <?php if($dept_name == "SSM select") { ?> selected <?php } ?>>SSM select</option>
                            </select>
                        </div>

                        <!-- 
                        <div class="col-sm-12 form-group">
                            <select class="form-control text-capitalize" name="catagory" require id="catagory">
                                <option value="">choose</option>
                                <optiom value="Book"  <#?php if($catagory == "Book") {?> selected <#?php } ?> >Book</optiom>
                                <option value="Car" <#?php if($catagory == "Car") {?> selected <#?php } ?>>Car</option>
                            </select>
                        </div>
                        -->
                    
                        <div class="col-sm-12 form-group"> 
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="catagory" id="catagory" value="mobile">
                            <label class="form-check-label" >mobile</label>
                            </div>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="catagory" id="catagory" value="laptop">
                            <label class="form-check-label" >laptop</label>
                            </div>
                        </div>
                        


                        <div class="col-sm-12 form-group text-center">
                            <input class="btn btn-success btn-md px-5" type="submit" name="submit" id="submit" value="Sign Up">
                        </div>
                    </div>
                </div>						
            </div>
        </div>
    </div>
</form>
</div>


<div class="table-responsive">
    <table width="100%" class="table table-sm table-bordered table-hover">
        <thead>
            <h3 class="text-center text-success"><u>Information</u></h3>
            <tr class="text-center">
                <th class="text-info">ID</th>
                <th class="text-info">First Name</th>
                <th class="text-info">Student ID</th>
                <th class="text-info">Class Name</th>
                <th class="text-info">Department Name</th>
                <th class="text-info">Device</th>
                <th class="text-info">EDIT</th>
                <th class="text-info">Delete</th>
                
            </tr>
        </thead>
            <!--for select-->
        <tbody> 
            <?php  
                $sql = $connect->prepare("SELECT * FROM `students_data`  ORDER BY id ASC");
                $sql->execute();
                $fetch_list = $sql->fetchAll(PDO::FETCH_ASSOC);
                foreach ($fetch_list AS $new_value) {
            ?>
            <tr>
                <td><?php print $new_value['id']; ?></td>
                <td><?php print $new_value['std_name'] ;?></td>
                <td><?php print $new_value['std_id'] ;?></td>
                <td><?php print $new_value['class_name'] ;?></td>
                <td><?php print $new_value['dept_name'] ;?></td>
                <td><?php print $new_value['catagory'] ;?></td>
                <td><a href="edit_delete_select_database.php?id=<?php print $new_value['id'] ;?>">EDIT</a></td>
                <td style="text-align:center; vertical-align: middle;">
                <a style="text-decoration:none;" href="javascript:confirmtest('<?php print $new_value['id']; ?>');"> Delete </a>
                </td>
            </tr>
            <?php   
            }
            ?>

        </tbody>
    </table>
</div>

<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/popper.min.js"></script>
<script>
    function  confirmtest(id){
        var x = window.confirm("Are you sure to delete ID " + id + "?")
        if (x){
            location.replace('edit_delete_select_database.php?confirm=yes&id=' + id);
        }
        else{

        }
    }
</script>
</body>
</html>