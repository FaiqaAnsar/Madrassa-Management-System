<?php
include("../include/config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <style>
        .hidden {
            display: none;
        }
        .ad_moc{
        margin-top: 10%;
    color: #B22B4F;
   margin-left:38%;
   font-size:40px;
    }
    .ad_moccard{
    width: auto;
    max-width: auto;
    height:auto;
    background-color: #f4f4f8;
    padding: 40px;
    box-shadow: 0 2px 15px rgba(64, 64, 64, .7);
    margin-top: 5%;
   
    margin-bottom: 5%;
}
.ad_moccard h2{
  
   background:green;
   padding:20px;
   border-radius:30px;
   color:#fff;
   text-align:center;
   font-size:30px;
}
.ad_moctable{
    width: 100%;
    margin-left: 0%;
    text-align: center;
    border-spacing: 0;
    box-shadow: 0 2px 15px rgba(64, 64, 64, .7);
    border-radius: 12px 12px 0 0;
  }
  .ad_moctable tr{
    width: 100%;
    background-color: #fafafa;
    padding: 0;
   
  }
  
  .ad_moctable  th {
    padding: 10px ;
    text-align: center;
  }
  
  .ad_moctable  th{
   background-color: #049EB3;
   font-size:25px;
   color: #fafafa;
   border: none;
   height: 50px;
   width: 10%;
   padding: 1px;
  
    
   }
   .ad_moctable  td {
     height: 50px;
     border-bottom:1px solid #000;
     border-right:1px solid #000;
   }
   .ad_mocform{
    padding: 30px;
    width: auto;
    height: auto;
   
    margin-top: 0%;
    margin-left: 5%;
    background:#fff;
    box-shadow: 0 2px 15px rgba(64, 64, 64, .7);
   }
   .ad_mocform input{
    border: 0.5px solid #000;
    box-shadow: 0 2px 15px rgba(64, 64, 64, .7);
    padding:10px;
    margin-bottom:30px;
    margin-left:20%;
   }
   .ad_mocform label{
    margin-left:20%;
    padding:10px;
   }
   .ad_mocform .part2{
    padding: 15px;
    font-size: 20px;
    color:white;
    background:green;
    border: none;
    border-radius: 5px;
    margin-left: 42%;
    margin-top: 7px;
   } 
   .quesform {
    width: 70%;
    max-width: auto;
    height:auto;
    background-color: #f4f4f8;
    padding: 40px;
    box-shadow: 0 2px 15px rgba(64, 64, 64, .7);
    
    margin-left: 12%;
    margin-bottom: 2%;
   }
   .quesform h2{
   
   padding:20px;
   
   color:#000;
   text-align:center;
   font-size:30px;
   }
   .quesform p{
    font-size:20px;
    margin-left: 10%;
   }
   .quesform input{
    font-size:20px;
    margin-left: 10%;
   }
   .quesform input[type=submit]{
    font-size:20px;
    margin-left: 10%;
    background:green;
    color:#fff;
    padding:5px;
   }
   .quiz_result{
    width: 70%;
    max-width: auto;
    height:auto;
    background-color: #f4f4f8;
    padding: 40px;
    box-shadow: 0 2px 15px rgba(64, 64, 64, .7);
   
    margin-left: 12%;
    margin-bottom: 5%;
   }
   .back_btn{
    border-radius:20px;
   font-size:30px;
   background:green;
   color:#fff;
   padding:15px;
   margin-left:30px;
   }
    </style>
</head>
<body>
<?php
if (isset($_GET['action']) && $_GET['action'] == 'update') {
    if (isset($_GET['edit'])) {
        $course = $_GET['edit'];
        $sql = "SELECT * FROM questions WHERE CourseID = '$course'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo '<br><form  class="quesform" action="#" method="post">';
            $courseNameQuery = "SELECT CourseName FROM quiz WHERE CourseID = '$course'";
            $courseNameResult = $conn->query($courseNameQuery);
            $courseNameRow = $courseNameResult->fetch_assoc();
            $courseName = $courseNameRow['CourseName'];
    
            echo '<h2>Course: ' . $courseName . '</h2>';

            while ($row = $result->fetch_assoc()) {
                $questionId = $row['QuestionID'];
                $CourseId = $row['CourseID'];
                $question = $row['question'];
                $option1 = $row['option1'];
                $option2 = $row['option2'];
                $option3 = $row['option3'];
                $option4 = $row['option4'];

                echo '<p>' . $question . '</p>';
                echo '<input type="radio" name="q_' . $questionId . '" value="' . $option1 . '">' . $option1 . '<br>';
                echo '<input type="radio" name="q_' . $questionId . '" value="' . $option2 . '">' . $option2 . '<br>';
                echo '<input type="radio" name="q_' . $questionId . '" value="' . $option3 . '">' . $option3 . '<br>';
                echo '<input type="radio" name="q_' . $questionId . '" value="' . $option4 . '">' . $option4 . '<br>';
            }

            echo '<input type="hidden" name="course_name" value="' . $course . '">';
            echo '<input type="hidden" name="topic_id" value="' . $CourseId . '"><br>';
            echo '<input type="submit" name="sub" value="Submit Answer" ">';
            echo '</form>';
        } else {
            echo "No quiz questions found for the selected course.";
        }
    }

    
if (isset($_POST['sub'])) {
    $course = $_POST['course_name'];
    $sql = "SELECT * FROM questions WHERE CourseID = '$course' ";
    $result = $conn->query($sql);
    
    $score = 0;
    
    if ($result->num_rows > 0) {
    echo'<div class="quiz_result">';
        echo '<h2>Result:</h2>';
        echo '<ul>';
    
        while ($row = $result->fetch_assoc()) {
            $questionId = $row['QuestionID'];
            $userAnswer = $_POST['q_' . $questionId]; // User-selected answer
            $correctAnswer = $row['answer']; // Correct answer
            $questionText = $row['question']; // Question text
    
            $isCorrect = ($userAnswer === $correctAnswer);
    
            echo '<li>';
            echo '<strong>Question:&nbsp;&nbsp;&nbsp;</strong> ' . $questionText . '<br>';
            echo '<strong>Your Answer:&nbsp;&nbsp;&nbsp;</strong> ' . $userAnswer . '<br>';
            echo '<strong>Correct Answer:&nbsp;&nbsp;&nbsp;</strong> ' . $correctAnswer . '<br>';
    
            if ($isCorrect) {
                echo '<span style="color: green;">Correct</span>';
                $score++;
            } else {
                echo '<span style="color: red;">Incorrect</span><br><br>';
            }
    
            echo '</li>';
        }
    
        echo '</ul>';
    
        $totalQuestions = $result->num_rows;
    
        echo '<h3>Your score: ' . $score . ' out of ' . $totalQuestions . '</h3>';
        echo '<a href="../html/moc_test.php"  class="back_btn">Back</a>';
        echo'</div>';
    } else {
        echo "No quiz questions found for the selected course.";
    }



}
} else {  ?>
   



<div class="ad_moccard">
   <h2>Quizzes</h2>

    <table class="ad_moctable">
    <thead>
        <tr>
            <th>Course</th>
            <th>Quiz Number</th>
            <th>Topic</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $user_query = 'SELECT * FROM quiz ORDER BY CourseName';
        $user_result = mysqli_query($conn, $user_query);

        $courses = array(); // To keep track of course names and their quiz counts

        while ($users = mysqli_fetch_object($user_result)) {
            $courseName = $users->CourseName;
            if (!isset($courses[$courseName])) {
                $courses[$courseName] = 0; // Initialize quiz count for the course
            }
            $courses[$courseName]++; // Increment the quiz count for the course
        }

        mysqli_data_seek($user_result, 0); // Reset result pointer

        while ($users = mysqli_fetch_object($user_result)) {
            $courseName = $users->CourseName;
            echo '<tr>';
            if (isset($courses[$courseName])) {
                echo '<td rowspan="' . $courses[$courseName] . '">' . $courseName . '</td>';
                unset($courses[$courseName]); // Remove the course from the array to avoid repetition
            }
            ?>
            <td><?= $users->QuizNumber ?></td>
            <td><?= $users->TopicName ?></td>
            <td>
            <a href="../html/moc_test.php?edit=<?= $users->CourseID ?>&action=update" class="edit_btn">Start Quiz</a>
            </td>
            </tr>
            <?php
        }
    
        ?>

    </tbody>
</table>
<br><br>
<a href="../html/Home.php"  class="back_btn">Back</a>
    </div>

<?php } ?>
         
    
    <script>
        const courseHeaders = document.querySelectorAll('[id^="course-header-"]');
        const courseContents = document.querySelectorAll('[id^="course-content-"]');
    
        courseHeaders.forEach((header) => {
            const courseId = header.id.replace('course-header-', '');
            const content = document.getElementById('course-content-' + courseId);
    
            header.addEventListener('click', function() {
                content.classList.toggle('hidden');
                const isVisible = !content.classList.contains('hidden');
                localStorage.setItem('chat-' + courseId + '-visible', isVisible);
            });
    
            const isVisible = localStorage.getItem('chat-' + courseId + '-visible');
            if (isVisible === 'true') {
                content.classList.remove('hidden');
            } else {
                content.classList.add('hidden');
            }
        });

    </script>




</body>
</html>

