<?php
    function calculateGrade($student_name , $maths_marks , $urdu_marks , $english_marks){
        $obtain_marks = $maths_marks + $urdu_marks + $english_marks;
        $total_marks = 300;
        $studet_percentage=($obtain_marks / $total_marks)*100;
        $grade="";

        if($studet_percentage >= 80 && $studet_percentage <=100){
            $grade='A+';
        }elseif ($studet_percentage >=70 && $studet_percentage < 80) {
           $grade='A';
        }elseif ($studet_percentage >=60 && $studet_percentage < 70) {
            $grade='B';
        }elseif ($studet_percentage >=50 && $studet_percentage < 60) {
            $grade='c';
        }elseif ($studet_percentage >=40 && $studet_percentage < 50) {
            $grade='D';
        }else {
            $grade ='Fail';
        }

        return "<p><b>Student Name:</b>$student_name </p>".
        "<p><b>Urdr Marks:</b>$urdu_marks </p>".
        "<p><b>Maths Marks:</b>$maths_marks </p>".
        "<p><b>English Marks:</b>$english_marks </p>".
        "<p><b>Obtain Marks:$obtain_marks</b> </p>".
        "<p><b>Total Marks:</b>$total_marks <p>".
        "<P><b>Percentage:$studet_percentage </b></p>".
        "<p><b>Grade: $grade </b></p>";
    }


    echo calculateGrade('Mehak Hemani', 90,80,90);
    echo "<br>";





?>
