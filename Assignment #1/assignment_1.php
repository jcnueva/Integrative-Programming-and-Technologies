<?php


echo "<h1>Grade Calculator</h1>";
echo "<hr>";


if (isset($_POST['submit'])) {
    $score = $_POST['score'];

    
    if (is_numeric($score) && $score >= 0 && $score <= 100) {

        
        if ($score >= 98) {
            $grade = 1.00;
            $description = "Excellent";
        } elseif ($score >= 95) {
            $grade = 1.25;
            $description = "Excellent";
        } elseif ($score >= 92) {
            $grade = 1.50;
            $description = "Very Good";
        } elseif ($score >= 89) {
            $grade = 1.75;
            $description = "Very Good";
        } elseif ($score >= 86) {
            $grade = 2.00;
            $description = "Good";
        } elseif ($score >= 83) {
            $grade = 2.25;
            $description = "Good";
        } elseif ($score >= 80) {
            $grade = 2.50;
            $description = "Satisfactory";
        } elseif ($score >= 77) {
            $grade = 2.75;
            $description = "Satisfactory";
        } elseif ($score >= 75) {
            $grade = 3.00;
            $description = "Passing";
        } elseif ($score >= 70) {
            $grade = 4.00;
            $description = "Conditional";
        } else {
            $grade = 5.00;
            $description = "Failing";
        }

        
        echo "<h2>Your Grade</h2>";
        echo "<p>Your raw score is: " . $score . "</p>";
        echo "<p>Your numerical grade is: " . $grade . "</p>";
        echo "<p>Your grade description is: " . $description . "</p>";

        
        echo "<h2>Grade Commentary</h2>";
        switch ($grade) {
            case 1.00:
            case 1.25:
                echo "<p>Outstanding performance! Keep up the excellent work.</p>";
                break;
            case 1.50:
            case 1.75:
                echo "<p>Very well done! You are performing at a very high level.</p>";
                break;
            case 2.00:
            case 2.25:
                echo "<p>You've done well. Your performance is strong and consistent.</p>";
                break;
            case 2.50:
            case 2.75:
                echo "<p>Your performance is satisfactory. There is always room for improvement!</p>";
                break;
            case 3.00:
                echo "<p>Congratulations, you passed! This is a solid result.</p>";
                break;
            case 4.00:
                echo "<p>Your grade is conditional. You may need to retake the course or fulfill specific requirements.</p>";
                break;
            case 5.00:
                echo "<p>Unfortunately, you failed this course. It's an opportunity to learn and try again.</p>";
                break;
            default:
                echo "<p>An unexpected grade was calculated.</p>";
        }

    } else {
        echo "<h2>Error</h2>";
        echo "<p>Please enter a valid numerical score between 0 and 100.</p>";
    }
}
?>

<h2>Enter Your Grade</h2>
<p>
    Enter your numerical score (e.g., 85) to find out your grade.
</p>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="score">Score:</label>
    <input type="text" id="score" name="score" required>
    <button type="submit" name="submit">Calculate Grade</button>
</form>

</p>
