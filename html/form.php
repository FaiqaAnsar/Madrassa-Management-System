
<?php
include ("../include/config.php");
?>






<?php

$nameError = "";
$fnError = "";
$ageError = "";
$dobError = "";
$mobileError = "";
$homecError = "";
$gnError = "";
$gjError = "";
$adError = "";
$acError = "";
$fcError = "";
$dateError = "";
$cnError = "";
$pdError = "";
$marksError = "";
$maError = "";
$courseError = "";
$sessionError = "";
$genderError="";
$errors = "";

if (isset($_POST['submit'])) {
   
    $fullname = $_POST['fullname'];
    $fName = $_POST['fName'];
    $age = $_POST['age'];
    $dob = $_POST['dob'];
    $mob = $_POST['mob'];
    $hometel = $_POST['hometel'];
    $gname = $_POST['gname'];
    $gjob = $_POST['gjob'];
    $adr = $_POST['adr'];
    $acnic = $_POST['acnic'];
    $gcnic = $_POST['gcnic'];
    $date = $_POST['date'];
    $city = $_POST['city'];
    $predu = $_POST['predu'];
    $MO = $_POST['MO'];
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
    if (empty($fName)) {
        $fnError = " required";
    } else {
        $fName = trim($fName);
        $fName = htmlspecialchars($fName);
        if (!preg_match("/^[a-zA-Z ]*$/", $fName)) {
            $fnError = "Only letters and white space allowed";
        }
    }
    if (empty($age)) {
        $ageError = " required";
    
    }

    if (empty($dob)) {
        $dobError = " required";
    } 
    if (empty($mob)) {
        $mobileError = " required";
    } 
    if (empty($hometel)) {
        $homecError = " required";
    } 
    if (empty($gname)) {
        $gnError = " required";
    } else {
        $gname = trim($gname);
        $gname = htmlspecialchars($gname);
        if (!preg_match("/^[a-zA-Z ]*$/", $gname)) {
            $gnError = "Only letters and white space allowed";
        }
    }
    if (empty($gjob)) {
        $gjError = " required";
    }
    if (empty($adr)) {
        $adError = "Email is required";
    }
    if (empty($acnic)) {
        $acError = " required";
    }
    if (empty($gcnic)) {
        $fcError = " required";
    }
    if (empty($date)) {
        $dateError = " required";
    }
    if (empty($city)) {
        $cnError = " required";
    }
    if (empty($predu)) {
        $pdError = " required";
    }
    if (empty($MO)) {
        $marksError = "required";
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
        

        

              
$user_query = 'SELECT * FROM admission  ';

 $user_result = mysqli_query($conn , $user_query);
 while ($users = mysqli_fetch_array($user_result)) 
 $id= $users['id'];
 {  
    
 

   
        
    
        $query = mysqli_query($conn,"UPDATE  admission SET  fullname ='$fullname',fathername= '$fName',age='$age',dob='$dob',mobile='$mob',hometel='$hometel',gname= '$gname',gjob='$gjob',adress= '$adr',Acnic='$acnic',Gcnic='$gcnic',date='$date',city='$city',predu='$predu',marks='$MO',preM='$preMd',course='$courses',session='$session',gender=' $selectedGender ' WHERE id='$id' ");
 }

        if($query)
        {
          
            echo "Data inserted into MySQL successfully";
            header("Location: ../html/signin.php");
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
                    <h1>Madrassa  Application  Form</h1>
                </div>
             
           
                
            <form  id="form" class="form" method="POST">
                
                <div class="section">
                    <h3 ><b>&nbsp;Details &nbsp; of &nbsp;  Applicant</b></h3>
                </div>
                    <div class="section">
                    
                    <input id="txtfullName" class="input-field" type="text" name="fullname" placeholder=" Full Name" />
                   
                    <small><?php echo $nameError ?></small>
                </div>
                <div class="section">
                    
                    <input id="fName" type="text" class="input-field" name="fName"  placeholder=" FatherName"/>
                   
                    <small><?php echo $fnError ?></small>
                </div>
                <div class="section">
                    
                    <input id="age" type="text"  class="input-field" name="age" placeholder=" Age"/>
                   
                    <small><?php echo $ageError ?></small>
                </div>
                <div class="section">
                   
                    <input id="dob" type="text" name="dob" class="input-field" placeholder=" Date of Birth" />
                   
                    <small><?php echo $dobError ?></small>
                </div>
                <div class="section">
                    
                    <input id="mob" type="text" name="mob" class="input-field"  placeholder=" Mobile Number" />
                  
                    <small><?php echo $mobileError ?></small>
                </div>
                <div class="section">
                    
                    <input id="hometel" type="text" name="hometel"  class="input-field"  placeholder=" Home contect Number"/>
                   
                    <small><?php echo $homecError ?></small>
                </div>
                <div class="section">
                   
                    <input id="gname" type="text" name="gname"  class="input-field" placeholder=" Father or Gaurdian Name"/>
                  
                    <small><?php echo $gnError ?></small>
                </div>
                <div class="section">
                    
                    <input id="gjob" type="text" name="gjob"  class="input-field"  placeholder=" Father or Gaurdian Job"/>
                    
                    <small><?php echo $gjError ?></small>
                </div>
                <div class="section">
                   
                    <input id="adr" type="text" name="adr" class="input-field"  placeholder=" Address"/>
                   
                    <small><?php echo $adError ?></small>
                </div>
                
                <div class="section">
                  
                    <input id="acnic" type="text" name="acnic" class="input-field" placeholder=" Applicant CNIC (i.e.3420146784303)"/>
                    
                    <small><?php echo $acError ?></small>
                </div>
                <div class="section">
                    
                    
                    <input id="gcnic" type="text" name="gcnic" class="input-field" placeholder=" Father or Gaurdian CNIC (i.e.3420146784303)"/>
                   
                    <small><?php echo $fcError ?></small>
                </div>
               
                <div class="section">
                    
                    <input id="date" type="date" name="date" class="input-field"  placeholder=" Current Date "/>
                   
                    <small><?php echo $dateError ?></small>
                </div>
                <div class="section">
                   
                    <input id="city" type="text" name="city" class="input-field"  placeholder=" City Name"/>
                   
                    <small><?php echo $cnError ?></small>
                </div>
                <div class="section">
                  
                    <input id="predu" type="text" name="predu" class="input-field"  placeholder=" Previous Degree"/>
                    
                    <small><?php echo $pdError ?></small>
                </div>
                <div class="section">
                  
                    <input id="MO" type="text" name="MO"  class="input-field" placeholder=" Marks obtained in previous Degree" />
                    
                    <small><?php echo $marksError ?></small>
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
                   
                </div>
                   

            </form>
            </div>

            
    </body>

</html>
