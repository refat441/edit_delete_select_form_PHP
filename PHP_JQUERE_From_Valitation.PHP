<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebbok - log in or sign up</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- fontawesome -->
    <link rel="stylesheet" href="css/all.css">
    <link rel="shortcut icon" href="favicon.ico">
    <style>
        body{
           background-color: #F0F2F5;
        }
        input[type=text],
        input[type=password]{
            background-color: #F5F6F7;
        }

        .btn-success {
            color: #fff;
            background-color: #00a400;
            border-color: #00a400;
        }
        a{
            color: darkblue;
        }

        /* input:required:invalid{
            border: 1px solid brown;
        } 
        
        input:required:valid{
            border: 1px solid pink;
        }
         */
    </style>
</head>
<body>
    <div class="container">
        <form action="post_method_action_prectice.php" method="POST" target="_blink">
            <div class="row">
                <div class="col-sm-6 mx-auto">
                    <div class="card mt-5 mb-5">
                        <div class="col-sm-12">
                            <h3>Sign Up</h3>
                            <span class="text-secondary font-weight-bold">It's quick and easy.</span>
                        </div>
                        <hr>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <input type="text" name="first_name" required id="first_name" placeholder="First name" autocomplete="off" class="form-control" data-toggle="tooltip" data-placement="top" title="Enter name">       
                                </div>
    
                                <div class="col-sm-6 form-group">
                                    <input type="text" name="surename" required id="surename" placeholder="Surename" autocomplete="off" class="form-control"> 
                                </div> 
    
                                <div class="col-sm-12 form-group">
                                    <input type="text" name="mail_number" required id="mail_number" placeholder="Mobile number or email address" autocomplete="off" class="form-control"> 
                                </div> 
    
                                <div class="col-sm-12 form-group">
                                    <input type="password" name="password" required id="password" placeholder="New password" autocomplete="off" class="form-control"> 
                                </div>
    
                                <div class="col-sm-12 form-group">
                                    <small class="text-secondary font-weight-bold">Date of birth&nbsp;<i class="fas fa-question-circle"></i></small>
                                    <input type="date" name="date" id="date" required class="form-control"> 
                                </div>
                                
                                <div class="col-sm-12">
                                    <small class="text-secondary font-weight-bold">Gender&nbsp;<i class="fas fa-question-circle"></i></small>
                                </div>

                                <div class="col-sm-4 form-group">
                                    <label class="form-control">
                                        Female &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="radio" name="gender" id="female" value="Female">
                                    </label>
                                </div> 
                                
                                <div class="col-sm-4 form-group">
                                    <label class="form-control">
                                        Male &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;<input type="radio" name="gender" id="male" value="Male" onclick="fn_male_hide()">
                                    </label>
                                </div> 
                                
                                <div class="col-sm-4 form-group">
                                    <label class="form-control">
                                        Custom &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="radio" name="gender" id="custom" value="Custom" onclick="fn_div_show()">
                                    </label>
                                </div>
    
                                <div class="col-sm-12 form-group costom_div">
                                    <select name="costom_select" id="costom_select" class="form-control">
                                        <option value="">Slelect your prououn</option>
                                        <option value="She">She</option>
                                        <option value="He">He</option>
                                        <option value="They">They</option>
                                    </select>
                                </div>
    
                                <div class="col-sm-12 form-group optional_div">
                                    <small class="text-secondary font-weight-bold">Your pronoun is visible to everyone.</small>
                                    <input type="text" name="optional" id="optional" autocomplete="off" class="form-control">
                                </div>
                                <div class="col-sm-12 form-group text-center">
                                    <button class="btn btn-success btn-md px-5" type="button" onclick="fn_sign_up();">Sign Up</button>
                                    <!--

                                    //for php
                                    
                                    //<button class="btn btn-success btn-md px-5" type="submit" onclick="fn_sign_up();">Sign Up</button>
                                     -->
                                </div>
    
                                <div class="col-sm-12 form-group text-center">
                                    <span class="text-secondary" style="font-size:12px;">By clicking Sign Up, you agree to our <a href="#">Terms</a>, <a href="#">Data Policy</a> and <a href="#">Cookie Policy.</a> You may receive SMS notifications from us and can opt out at any time.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script src="js/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/popper.min.js"></script>
    <!-- fontawesome -->
    <script src="js/all.js"></script>
    <script>
        $(document).ready(function () {
            $(".costom_div").hide();
            $(".optional_div").hide();
        });

        function fn_div_show(){
            var gender =  $("#custom").val();

            if(gender == "Custom"){
                $(".costom_div").show();
                $(".optional_div").show();
            }
        }   
        
        // function fn_male_hide(){
        //     var male =  $("#male").val();

        //     if(male == "Male"){
        //         $(".costom_div").hide();
        //         $(".optional_div").hide();
        //     }
        // } 

            
                //jquery form validtion
        function fn_sign_up(){
            var first_name = $("#first_name").val();
            var surename = $("#surename").val();
            var mail_number = $("#mail_number").val();

            if(first_name == ''){
                alert("Enter your First name");
                $("#first_name").focus();
                // $("#first_name").css({"border":"1px solid red","box-shadow":"0 0 3px red"});

                 //callback
                // fn_div_show();
                
                return false;
            }else if(surename == ''){
                alert("Enter your Surename");
                $("#surename").focus();
                return false;
            }else if(mail_number == ''){
                alert("Enter your E-Mail Or phone No.");
                $("#mail_number").focus();
                return false;
            }
        }

    </script>
</body>
</html>