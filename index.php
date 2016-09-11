<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
 
    <body>
         <?php        
        /* 
         * index.php file associated with the student.php 
         */
        include('student.php');
        
        /*
         * A storage of students.
         */
        $students = array();        
        
        
        /*
         * Insert first student.
         */
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home', 'john@doe.com');
        $first->add_email('work', 'jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        
        //Add the first student to specificied key
        $students['j123'] = $first;
        
        /*
         * Insert the second student.
         */
        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home', 'albert@braniacs.com');
        $second->add_email('work1', 'a_einstein@bcit.com');
        $second->add_email('work2', 'albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        
        //Add 2nd student to specificied key
        $students['c456'] = $second;
        
         /*
         * Input the third student - CK Song
         */
        $third = new Student();
        $third->surname = "Song";
        $third->first_name = "CK";
        $third->add_email('student', 'ck@bcit.ca');
        $third->add_grade(100);
        
        //Add 3rd student to specificied key
        $students['s789'] = $third;
        
        // Sorts the objects in the array by key
        ksort($students);
        
        // Display students
        foreach ($students as $student) {
            echo $student->toString();        
        }
        
        ?>
    </body>

</html>
