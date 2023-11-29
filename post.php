<!DOCTYPE html>
<html lang="en">
<head>
	<title>Document</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body { 
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row mt-4">
        <div class="col-sm-7">
            <div class="p-5 my-4">
                <p style="font-size: 30px;" class="text-danger"><b>Sign Up</b></p>
                <form action="post_action.php" method="GET">
                    <div class="form-group">
                        <label class="text-success" style="font-size: 22px;"><b>Username</b></label>
                        <input type="text" class="form-control form-control-lg" style="background: rgb(235, 232, 232);" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label class="text-success" style="font-size: 22px;"><b>Password</b></label>
                        <input type="password" class="form-control form-control-lg" id="password" name="password" style="background: rgb(235, 232, 232);">
                    </div>
                   <button type="submit" class="btn btn-success btn-sm" value="HHG">Sign up</button>
                </form>
            </div>
        </div>
    </div>
</div>





<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/popper.min.js"></script>
</body>
</html>