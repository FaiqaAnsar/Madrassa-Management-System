<?php
include ("../include/config.php");
?>


<?php

$emailError = "";
$passError = "";
$errors = "";

if (isset($_POST['submit'])) {
   
    $email = $_POST['email'];
    $password = $_POST['password'];

   
    if (empty($email)) {
        $emailError = "Email is required";
    } else {
        $email = trim($email);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailError = "Invalid email format";
        }
    }

    if (empty($password)) {
        $passError = "Password is required";
    } else {
        if (strlen($password) < 6 || strlen($password) > 20) {
            $passError = "Password should be between 6 and 20 characters";
        }
    }

    // If there are no errors, proceed with inserting into MySQL
    if (empty($nameError) && empty($emailError) && empty($passError)) {
        

        // Prepare and bind the insert statement
        $query = mysqli_query($conn,"SELECT * FROM admission WHERE `email` = '$email' AND `password` = '$password'");
       

        // Execute the statement
        if(mysqli_num_rows($query) > 0)
        {
          $user = mysqli_fetch_object($query);
            echo "Data inserted into MySQL successfully";
            header("Location: ../html/form.php");
        } else {
            echo "User does not exit: " ;
        }

        // Close the statement and connection
        $query->close();
        $conn->close();
    }
}
?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>signin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

		<style>

.form-box{
    
  max-width:  658px;
  height: 420px;
  margin: auto;
margin-top: 6%;
background: #fbfbfc;
border: 1px solid #2b62f8;;
}
.header{
   
   padding: 0.5px;
   
    
}
.header h1{
    margin-left: 37.5%;
    color: #2b62f8;
   
   
}
.form{
    padding: 20px 40px;
}


.input-field{
width: 100%;
padding: 10px 0;
margin: 5px 0;
border-left: 0;
border-top: 0;
border-right: 0;
border-bottom: 1px solid #999;
outline: none;
background: transparent;

}
.section button{
 
width:50%;
padding: 10px 30px;
cursor: pointer;
display: inline;
margin-left: 25%;
background: linear-gradient(to right,#7810ff,#06eeff);
border: 0;
outline: none;
border-radius:30px ;

}



.section p{
 padding: 10px;
 margin-left: 23%;
}


.section{
    display: block;
	margin-bottom: 10px;
    color: #070506;
}
.section input {
    display: block;
    width: 100%;
    padding: 10px;
    border-radius: 4px;
    border-bottom:2px solid #d8d1d1;
}
.section.success input{
    border-bottom:2px solid rgb(26, 167, 26);
}

.section.error input{
    border-bottom:2px solid rgb(228, 29, 22);
}
.section small{
    margin: 5px;
   
    position: relative;
     color: red;
}



 button:hover{
   
    color: white;}
 

   


        </style>
	</head>

	<body>
       
      
            <div class="form-box">
                <div class="header">
                    <h1>SIGN IN </h1>
                </div>
             
            
            <form  id="form" class="form" method="POST">
               <div class="section">
              <input type="text" class="input-field" placeholder="Email ID" id="Email" name="email">
              <small><?php echo $emailError ?></small>
            </div>
            <div class="section">
              <input type="password" class="input-field" placeholder="Password" id="password" name="password">
              <small><?php echo $passError ?></small>
            </div>
           
           <div class="section">
           
              <button type="submit" class="submit-btn1" name="submit" id="btn1">Log In</button>
              <p>Don't have Account ? Create Account</p>
              <button type="submit" class="submit-btn2"  id="btn2">Create Account</button>
            </div>
         
          
            </div>
          </div>
             
       
        
            <script>
           
          
           

 
            const form = document.getElementById("form");
   
            document.getElementById("btn2")
       .addEventListener('click',(event)=>{
      
             event.preventDefault();
             location.href='signup.php';
            form.reset();
            window.close();
       });



      
   
            </script>
    

 
    
    
    
            
    </body>

</html>