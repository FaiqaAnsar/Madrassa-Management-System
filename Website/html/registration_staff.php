
<?php
include ("../include/config.php");
?>






<?php

$nameError = "";

$ageError = "";

$homecError = "";

$adError = "";

$dateError = "";
$cnError = "";
$QaError = "";

$maError = "";
$courseError = "";
$sessionError = "";
$genderError="";
$errors = "";

if (isset($_POST['submit'])) {
   
    $fullname = $_POST['fullname'];
   
    $age = $_POST['age'];
   
    $hometel = $_POST['hometel'];
    
    $adr = $_POST['adr'];
    
    $date = $_POST['date'];
    $city = $_POST['city'];
    $qualify = $_POST['qualify'];
    $preMd = $_POST['preMd'];
    $courses = $_POST['courses'];
    $session = $_POST['session'];
    $selectedGender = $_POST['gender'];

   
    if (empty($fullname)) {
        $nameError = " required";
    } else {
        $fullname = trim($fullname);
        $fullname = htmlspecialchars($fullname);
        if (!preg_match("/^[a-zA-Z ]*$/", $fullname)) {
            $nameError = "Only letters and white space allowed";
        }
    }
   
    if (empty($age)) {
        $ageError = " required";
    
    }

   
    if (empty($hometel)) {
        $homecError = " required";
    } 
   
    if (empty($adr)) {
        $adError = "Email is required";
    }
   
    if (empty($date)) {
        $dateError = " required";
    }
    if (empty($city)) {
        $cnError = " required";
    }
    if (empty($qualify)) {
        $QaError = " required";
    }
   
    if (empty($preMd)) {
        $maError = " required";
    }
    if ($courses ==="select course") {
        $courseError = " required";
    }
    if ($session ==="choose session") {
        $sessionError = " required";
    }
    if ($selectedGender != "male" && $selectedGender != "female") {
        $genderError = "Please select a  gender";
    }
    

   
    // If there are no errors, proceed with inserting into MySQL
    if (empty($nameError) && empty($fnError) && empty($ageError)&& empty($dobError)&& empty($mobileError)&& empty($homecError)&& empty($gnError)&& empty($gjError)&& empty($adError)&& empty($acError)&& empty($fnError)&& empty($dateError)&& empty($cnError)&& empty($pdError)&& empty($marksError)&& empty($maError)&& empty($courseError)&& empty($sessionError)&& empty($genError)) {
        

        

              
$user_query = 'SELECT * FROM staff  ';

 $user_result = mysqli_query($conn , $user_query);
 while ($users = mysqli_fetch_array($user_result)) 
 $id= $users['id'];
 {  
    
 

   
        
    
        $query = mysqli_query($conn,"UPDATE  staff SET  fullname ='$fullname',age='$age',contact='$hometel',address= '$adr',date='$date',city='$city',qualification='$qualify',madrassa_visited='$preMd',class='$courses',session='$session',gender=' $selectedGender ' WHERE id='$id' ");
 }

        if($query)
        {
          
            echo "Data inserted into MySQL successfully";
           
        } else {
            echo "User does not exit: " ;
        }

        // Close the statement and connection
       
        $conn->close();
    }
}
?>








<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>form</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>


.form-box{
  
max-width:  758px;
margin: auto;
background: #fbfbfc;
border: 1px solid #2b62f8;
}
.header{
   
   padding: 0.5px;
    align-content: center;
    
}
h1{
    
    align-items: center;
    margin-left: 5px;
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

#email{
 left:50px;
}

.section{
    display: block;
    margin-bottom: 20px;
  
    color: #070506;
}
.section input[type=text] {
    display: block;
    width: 100%;
    padding: 10px;
    border-radius: 4px;
    border-bottom:2px solid #d8d1d1;
}
.section input[type=radio]{
   
   margin-bottom: 0px;
   color: #070506;
}

.section.success select{
    border-bottom:2px solid rgb(26, 167, 26);
}

.section.error select{
    border-bottom:2px solid rgb(228, 29, 22);
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

.section button{
  
    margin-left: 20px;
    display: inline;
    background: linear-gradient(to right,#7810ff,#06eeff);
    color:#070606;
    padding: 10px 20px;
    width: 30%;
    border: 0;
  outline: none;
   border-radius:30px ;
    cursor: pointer;
}

.section button:hover{
    background-color: #230257;
    color: white;
}

  

        </style>
    </head>

    <body>
       
      
            <div class="form-box">
                <div class="header">
                    <h1>Madrassa Staff Registration Form</h1>
                </div>
             
           
                
            <form  id="form" class="form" method="POST">
                
                <div class="section">
                    <h3 ><b>&nbsp;Details &nbsp; of &nbsp;  Applicant</b></h3>
                </div>
                    <div class="section">
                    
                    <input id="txtfullName" class="input-field" type="text" name="fullname" placeholder=" Name" />
                   
                    <small><?php echo $nameError ?></small>
                </div>
                
                <div class="section">
                    
                    <input id="age" type="text"  class="input-field" name="age" placeholder=" Age"/>
                   
                    <small><?php echo $ageError ?></small>
                </div>
               
                <div class="section">
                    
                    <input id="hometel" type="text" name="hometel"  class="input-field"  placeholder=" Contect_Number"/>
                   
                    <small><?php echo $homecError ?></small>
                </div>
               
                <div class="section">
                   
                    <input id="adr" type="text" name="adr" class="input-field"  placeholder=" Address"/>
                   
                    <small><?php echo $adError ?></small>
                </div>
                
               
               
               
                <div class="section">
                   
                    <input id="city" type="text" name="city" class="input-field"  placeholder=" City Name"/>
                   
                    <small><?php echo $cnError ?></small>
                </div>
                <div class="section">
                   
                    <input id="qualify" type="text" name="qualify" class="input-field"  placeholder=" Qualification"/>
                   
                    <small><?php echo $QaError ?></small>
                </div>
                
               
                <div class="section">
                   
                    <input id="preMd" type="text" name="preMd" class="input-field"  placeholder=" Maddrassa Attended Priviously"/>
                    
                    <small><?php echo $maError ?></small>
                </div>
                
                <div class="section">
                    
                   
                    <select name="courses" id="courses" class="input-field" >
                       
                        <option >select course</option>
                    <option >Alimiyyah Fazila Program</option>
                    <option >Alimiyyah Program</option>
                    <option >Hifz ul Quran and Nazra Program</option>
                    <option >Tafseer Course Program</option>
                    <option > Dars-e-Nazami Program</option>
                    <option >Fiqh Program</option>
                    <option >Hajj and Umrah Program</option>
                    <option >Arabic Grammar Program</option>
                   
                    
                  </select>
                  
                  
                   <small><?php echo $courseError ?></small>
                 
                </div>
                <div class="section">
                    
                    <input id="date" type="date" name="date" class="input-field"  placeholder=" Current Date "/>
                   
                    <small><?php echo $dateError ?></small>
                </div>
                <div class="section" >
                    
                   
                    <select name="session" id="session"class="input-field"  >
                        <option >choose session</option>
                    <option >Morning</option>
                    <option >Evening</option>
                    
                  </select>
                  
                  
                   <small><?php echo $sessionError ?></small>
                 
                </div>
   
                <div class="section"> 
       
        
                    Gender<br><br>
                    
                   
                    <input type="radio" id="male" value="male" name="gender" > Male<br>
                   
               
                    <input type="radio" id="female" value="female" name="gender" > Female<br>
                
                    <small ><?php echo $genderError ?></small>
                 
                </div>

                <div class="section">
                    <button type="submit" value="submit" name="submit" id="btn1" >Register</button>
                    <button type="submit" value="submit" name="submit" id="btn2" >Back</button>
                   
                </div>
                   

            </form>
            </div>


            
            <script>
           
          
           

 
            const form = document.getElementById("form");
   
            document.getElementById("btn2")
       .addEventListener('click',(event)=>{
      
             event.preventDefault();
             location.href='Home.php';
            form.reset();
            window.close();
       });



      
   
            </script>

            
    </body>

</html>
