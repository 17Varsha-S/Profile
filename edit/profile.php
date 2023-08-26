<?php  

session_start();
$USERID = $_SESSION["USERID"];

if($USERID == '')
{
    session_destroy();

    header('location:index.php');
}

// Fetch User All data using USERID

include('config.php');

$query = "SELECT USERNAME,EMAIL,PASSWORD,AGE,DOB,GENDER,CONTACT FROM users WHERE USER_ID = '$USERID'";


$result = mysqli_query($conn,$query);

if($result)
{

   $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

   $USERNAME = $row["USERNAME"];
   $EMAIL = $row["EMAIL"];
   $PASSWORD = $row["PASSWORD"];
   $AGE= $row["AGE"];
   $DOB = $row["DOB"];
   $GENDER = $row["GENDER"];
   $CONTACT = $row["CONTACT"];
   
   
}
else
{
    echo "<script> alert('Unexpected Error'); </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User profile</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet"href="profile.css?v=1692974722">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.all.min.js"></script>


</head>
<body>
<Body background="https://wallpaperaccess.com/full/2314983.jpg">

<div class="container">
    <div class="main-body">
    
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php" style="color: black;"><b><h2>Logout</h2></b></a></li>

                            
            </ol>
          </nav>
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="img.jpg" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4>Varsha S</h4>
                      <p class="text-secondary mb-1">B.Tech</p>
                      <p class="text-secondary mb-1">MKCE</p><br>


                      <!-- <p class="text-muted font-size-sm"></p> -->
                      <!-- <button class="btn btn-primary">Follow</button>
                      <button class="btn btn-outline-primary">Message</button> -->
                    </div>
                  </div>
                </div>
              </div>
               <div class="card mt-3">
             
              </div>
            </div> 
            
 
<div class="col-md-8" id="Login_form">
        <div class="card mb-3">
        <div class="card-body">
        
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Full Name</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                Varsha S                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Email</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                123@gmail.com                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Password</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                123                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Age</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Date of Birth</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Gender</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                                 </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Contact</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                                </div>
              </div>
              <hr>

              <!-- edit button -->
                <div class="row">
                <div class="col-sm-12">
                  <a class="btn btn-info " href="#" id="showFormLink"> Edit </a>
                </div>
                </div>
          </div>
        </div>
        </div>

        <!-- edit form -->



      <div class="col-md-8" id="hiddenForm" hidden>
        <div class="card mb-3">
        <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Full Name</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                <input type="text" class="form-control" value="Varsha S" id="exampleFormControlInput1" name="FullName" placeholder="Ex: Vijay" required>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Email</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                <input type="email" class="form-control" value="123@gmail.com" id="exampleFormControlInput1" name="Email" placeholder="name@example.com" required>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Password</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                <input type="text" class="form-control" value="123" id="exampleFormControlInput1" name="Password" placeholder="password" required>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Age</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                <input type="number" class="form-control" value="" id="exampleFormControlInput1" name="Age" placeholder="Age" required>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Date of Birth</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                <input type="date" class="form-control" value="" id="exampleFormControlInput1" name="Dob" required >
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Gender</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                <input type="text" class="form-control"  value="" id="exampleFormControlInput1" name="Gender" placeholder="Gender" required>
              


                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Contact</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                <input type="number" class="form-control" value="" id="exampleFormControlInput1" name="Contact" placeholder="Mobile Number" required>
                </div>
              </div>
              <hr>
              <!-- edit button -->
                <div class="row">
                <div class="col-sm-12">
                  <a class="btn btn-info " href="#" onclick="Update()">Update</a>
                  <a class="btn btn-info " id="showLogLink" href="#" >Back</a>
                </div>
                </div>
          </div>
        </div>
        </div>



               
<script>
    function Update(){
      Swal.fire({
            title: 'Updated successfully',
            text: 'successful',
            icon: 'success'
        });

        var FullName = $("input[name=FullName]").val();
        var Email = $("input[name=Email]").val();
        var Password = $("input[name=Password]").val();
        // var Age = $("input[name=Age]").val();
        // var Date of Birth= $("input[name=Date of Birth]").val();
        // var Gender = $("input[name=Gender]").val();
        // var Contact = $("input[name=Contact]").val();
 
        var user_info = {
            FullName : FullName,
            Email:Email,
            Password:Password,
            // Age:Age,
            // Date:Date,
            // Gender:Gender,
            // Contact:Contact,
            
             
            UserId:28        }

        $.ajax({
                type: "POST",
                url: 'update.php',
                data: user_info,
                success: function(response)
                {
                    var response = JSON.parse(response);
                    if(response)
                    {
                        console.log(response.status);

                        if(response.status == 'success')
                        {
                                alert('The Record has been Updated.....');
                                location.reload();
                        }
                        else if(response.status == 'failed')
                        {
                                alert(response.error);
                        }
                    }
                    else
                    {
                        console.log('Error');
                    }
                }
        });
    }
    document.addEventListener("DOMContentLoaded", function () {
    const formContainer = document.getElementById("container1");
    const showFormLink = document.getElementById("showFormLink");
    const hiddenForm = document.getElementById("hiddenForm");
    const Login_form=document.getElementById("Login_form");
    const showLogLink =document.getElementById("showLogLink");
    showFormLink.addEventListener("click", function (event) {
        event.preventDefault(); // Prevent the default link behavior
        hiddenForm.toggleAttribute("hidden");
        Login_form.style.display="none";
    });
    showLogLink.addEventListener("click", function (event) {
        event.preventDefault(); // Prevent the default link behavior
        Login_form.style.display="block";
        hiddenForm.toggleAttribute("hidden");
        
    });

});
</script>
</body>
 </html>