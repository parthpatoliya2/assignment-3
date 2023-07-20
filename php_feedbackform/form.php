<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CDNForm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
		
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" type="text/javascript"></script>
		
    <script type="text/javascript">
        
        var $FNameLNameRegEx = /^([a-zA-Z]{2,20})$/;
        var $FullNameRegEx = /^([a-zA-Z ]{2,40})$/;
        var $BankAccountNameRegEx = /^([a-zA-Z ]{2,60})$/;
        var $PasswordRegEx = /^(?=.?[A-Z])(?=.?[a-z])(?=.?[0-9])(?=.?[^\w\s]).{8,12}$/;

        var $EmailIdRegEx = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,8}\b$/i;
        var $ConNoRegEx = /^([0-9]{10})$/;
        var $AgeRegEx = /^([0-9]{1,2})$/;
        var $AadhaarNoRegEx = /^([0-9]{12})$/;
        var $GSTNoRegEx=/^[0-9]{2}[A-Z]{5}[0-9]{4}[A-Z]{1}[1-9A-Z]{1}Z[0-9A-Z]{1}$/;
        var $IndianDrivingLicenseNoRegEx = /^([A-Z]{2,3}[-/0-9]{8,13})$/;
        var $IndianVehicleRegNoRegEx = /^([A-Z]{2}[0-9]{1,2}[A-Z]{1,3}[0-9]{1,4})$/;
        var $PincodeRegEx = /^[1-9][0-9]{5,6}$/;
        var $PANNoRegEx = /^[A-Z]{3}[ABCFGHLJPT][A-Z][0-9]{4}[A-Z]$/;
        var $IFSCCodeRegEx = /^[A-Za-z]{4}0[A-Z0-9a-z]{6}$/;
        var $BankAccountNoRegEx = /^([0-9]{9,18})$/;
        var $LatitudeLongitude=/^(-?(?:1[0-7]|[1-9])?\d(?:\.\d{1,8})?|180(?:\.0{1,8})?)$/;
        
        $(document).ready(function(){

            $("#fname").blur(function(){
                $("#TxtfNameValidation").empty();
                if($(this).val()=="" || $(this).val()==null){
                    $("#TxtfNameValidation").html("(*) Name required..!!");
                }
                else{
                    if(!$(this).val().match($FullNameRegEx)){
                        $("#TxtfNameValidation").html("(*) Invalid name..!!");
                    }
                }
            });

            $("#fname").keypress(function(e){
                $("#TxtfNameValidation").empty();
                var Flag=((e.which>=65 && e.which<=90) || (e.which>=97 && e.which<=121));
                if(Flag==false){
                    $("#TxtfNameValidation").html("Invalid Input..!!");
                }
                return Flag;
            });

            $("#lname").blur(function(){
                $("#TxtlNameValidation").empty();
                if($(this).val()=="" || $(this).val()==null){
                    $("#TxtlNameValidation").html("(*) Name required..!!");
                }
                else{
                    if(!$(this).val().match($FullNameRegEx)){
                        $("#TxtlNameValidation").html("(*) Invalid name..!!");
                    }
                }
            });

            $("#lname").keypress(function(e){
                $("#TxtlNameValidation").empty();
                var Flag=((e.which>=65 && e.which<=90) || (e.which>=97 && e.which<=121));
                if(Flag==false){
                    $("#TxtlNameValidation").html("Invalid Input..!!");
                }
                return Flag;
            });

            $("#contactno").blur(function(){
                $("#TxtContactNoValidation").empty();
                if($(this).val()=="" || $(this).val()==null){
                    $("#TxtContactNoValidation").html("(*) Contact no. required..!!");
                }
                else{
                    if(!$(this).val().match($ConNoRegEx)){
                        $("#TxtContactNoValidation").html("(*) Invalid contact no..!!");
                    }
                }
            });

            $("#contactno").keypress(function(e){
                $("#TxtContactNoValidation").empty();
                var Flag=(e.which>=48 && e.which<=57);
                if(Flag==false){
                    $("#TxtContactNoValidation").html("Invalid Input..!!");
                }
                return Flag;
            });


            $("#mail").blur(function(){
                $("#TxtEmailIdValidation").empty();
                if($(this).val()=="" || $(this).val()==null){
                    $("#TxtEmailIdValidation").html("(*) Email id required..!!");
                }
                else{
                    if(!$(this).val().match($EmailIdRegEx)){
                        $("#TxtEmailIdValidation").html("(*) Invalid email id..!!");
                    }
                }
            });

            var fnameFlag=false,contactnoFlag=false,mailFlag=false;

            $("#BtnSubmit").click(function(){
                $("#TxtfNameValidation").empty();
                if($("#fname").val()=="" || $("#fname").val()==null){
                    $("#TxtfNameValidation").html("(*) Name required..!!");
                    fnameFlag=false;
                }
                else{
                    if(!$("#fname").val().match($FullNameRegEx)){
                        $("#TxtfNameValidation").html("(*) Invalid name..!!");
                        fnameFlag=false;
                    }
                    else{
                        fnameFlag=true;
                    }
                }
                $("#TxtlNameValidation").empty();
                if($("#lname").val()=="" || $("#lname").val()==null){
                    $("#TxtlNameValidation").html("(*) Name required..!!");
                    lnameFlag=false;
                }
                else{
                    if(!$("#lname").val().match($FullNameRegEx)){
                        $("#TxtlNameValidation").html("(*) Invalid name..!!");
                        lnameFlag=false;
                    }
                    else{
                        lnameFlag=true;
                    }
                }
               $("#TxtContactNoValidation").empty();
					if($("#contactno").val()=="" || $("#contactno").val()==null){
						$("#TxtContactNoValidation").html("(*) Contact no. required..!!");
						contactnoFlag=false;
					}
					else{
						if(!$("#contactno").val().match($ConNoRegEx)){
							$("#TxtContactNoValidation").html("(*) Invalid contact no..!!");
							contactnoFlag=false;
						}
						else{
							contactnoFlag=true;
						}
					}
                $("#TxtEmailIdValidation").empty();
                if($("#mail").val()=="" || $("#mail").val()==null){
                    $("#TxtEmailIdValidation").html("(*) Email id required..!!");
                    mailFlag=false;
                }
                else{
                    if(!$("#mail").val().match($EmailIdRegEx)){
                        $("#TxtEmailIdValidation").html("(*) Invalid email id..!!");
                        mailFlag=false;
                    }
                    else{
                        mailFlag=true;
                    }
                }
                if(fnameFlag==true && contactnoFlag==true && mailFlag==true ){
                    $("input,textarea").val("");
                    alert("Form submitted successfully..!!");
                }
                else{
                    alert("Invalid Input..!!");
                }
            });

        });
        
    </script>
	<style>
        legend{font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;  font-size: 30px;}
        hr{height: 2; background-color: #ccc;border: none;}
   </style>
</head>
<body>
    <form class="border p-3" action="formdb.php" method="get">
        
    
        <div class="container mt-2">
            <!-- <form class="border p-3"> -->
                <fieldset>
                    <legend class="text-center">
                        Form
                    </legend>
                </fieldset>
            
        
                        <!-- <form> -->
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label"><i class="fa fa-users"></i> First Name:</label>
                                <!-- <input type="text" name="firstname" class="form-control" id="fname" aria-describedby="emailHelp"> -->
                                <input type="text" name="firstname"/>
                                <small id="TxtfNameValidation"></small>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label"><i class="fa fa-users"></i> Last Name:</label>
                                <!-- <input type="text" name="lastname" class="form-control" id="lname" > -->
                                <input type="text" name="lastname"/>
                                <small id="TxtlNameValidation"></small>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label"><i class="fa fa-envelope"></i> Enter Your Email Id:</label>
                                <!-- <input type="email" name="email" class="form-control" id="mail" > -->
                                <input type="text" name="email"/>
                                <small id="TxtEmailIdValidation"></small>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label"><i class="fa fa-phone"></i> Contact No.</label>
                                <!-- <input type="text" name="contactnum" class="form-control" id="contactno" > -->
                                <input type="text" name="contactnum"/>
                                <small id="TxtContactNoValidation"></small>
                            </div>
                            <div class="form-group">
                                <span class="input-group-addon"><i class="fa fa-male"></i> | <i class="fa fa-female"></i> </span>Gender:
                                <div class="input-group">
                                    <select id="DDL_Gender" class="form-control">
                                        <option value="M">None</option>
                                        <option value="M">♂ Male</option>
                                        <option value="F">♀ Female</option>
                                        <option value="F">Cisgender</option>
                                        <option value="F">Transgender</option>
                                        <option value="F">Nonbinary</option>
                                        <option value="F">Agender</option>

                                    </select>
                                    
                                </div>
                            </div>
                            <hr>
                           
                            
                        <!-- </form> -->
            <!-- </form> -->
            <input type="submit" value="Submit" id="BtnSubmit" class="btn btn-primary"/>
        </div>
    </form>
  
</body>
</html>




















