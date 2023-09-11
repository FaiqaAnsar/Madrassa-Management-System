<?php
include ("../include/config.php");
?>





 
<?php
$nameError = "";
$emailError = "";
$passError = "";
$errors = "";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($name)) {
        $nameError = "Name is required";
    } else {
        $name = trim($name);
        $name = htmlspecialchars($name);
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameError = "Only letters and white space allowed";
        }
    }

    if (empty($email)) {
        $emailError = "Email is required";
    } else {
        $email = trim($email);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailError = "Invalid email format";
        }else{
            $email = trim($email);
            
            $query = "SELECT * FROM staff WHERE email= '$email' ";
  $result = mysqli_query($conn, $query);
 
  if (mysqli_num_rows($result) > 0) {
           
            $emailError = "Email already exists. Please choose a different email.";
            }
            

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
        $stmt = $conn->prepare("INSERT INTO staff (name, email, password) VALUES (?,?,?)");
        $stmt->bind_param("sss", $name, $email, $password);

        // Execute the statement
        if ($stmt->execute()) {
            echo "Data inserted into MySQL successfully";
            header("Location: ../html/signin_staff.php");
        } else {
            echo "Error inserting data into MySQL: " . $stmt->error;
        }

        // Close the statement and connection
        $stmt->close();
        $conn->close();
    }
}
?>



<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>signup</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>

		<style>

.form-box{
    
  max-width:  658px;
  height: 400px;
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
.submit-btn1{
width:50%;
padding: 10px 30px;
cursor: pointer;
margin-left: 23%;

background: linear-gradient(to right,#7810ff,#06eeff);
border: 0;
outline: none;
border-radius:30px ;
}
.submit-btn1:hover{
   
    color: white;}


#form{
 left:50px;
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


    


        </style>
	</head>

	<body>
 
        
         
         
            <div class="form-box">
                <div class="header">
                    <h1>SIGN UP </h1>
                </div>

                
             
            
            <form  id="form" class="form" method="POST">
                <div class="section">
                    <input type="text" class="input-field" placeholder="Name" id="name" name="name" >
                   <small><?php echo $nameError ?></small>
                  </div>
               <div class="section">
              <input type="text" class="input-field" placeholder="Email ID" id="Email" name="email">
              <small><?php echo $emailError ?></small>
            </div>
            <div class="section">
              <input type="password" class="input-field" placeholder="Password" id="password" name="password">
              <small><?php echo $passError ?></small>
            </div>
           
            
              <button type="submit" class="submit-btn1" name="submit" id="btn1">Sign Up</button>
              
           
            </form>
          
            </div>


        
           
    






    
    
    
            
    </body>

</html>