<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Lab #1</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    </head>
    <body>
        <div class="container mt-5">
            <h2>Lab #1 - Development Environment</h2>
            <br>
            <?php
            include('Student.php');

            // Initialize empty student array.
            $students = array();

            // Add first student
            $first = new Student();
            $first->surname = "Doe";
            $first->first_name = "John";
            $first->add_email('home','john@doe.com');
            $first->add_email('work','jdoe@mcdonalds.com');
            $first->add_grade(65);
            $first->add_grade(75);
            $first->add_grade(55);
            $students['j123'] = $first;

            // Add second student
            $second = new Student();
            $second->surname = "Einstein";
            $second->first_name = "Albert";
            $second->add_email('home','albert@braniacs.com');
            $second->add_email('work1','a_einstein@bcit.ca');
            $second->add_email('work2','albert@physics.mit.edu');
            $second->add_grade(95);
            $second->add_grade(80);
            $second->add_grade(50);
            $students['a456'] = $second;

            // Add myself
            $second = new Student();
            $second->surname = "Leung";
            $second->first_name = "Justin";
            $second->add_email('home','lngventure@gmail.com');
            $second->add_email('work','jleung203@my.bcit.ca');
            $second->add_grade(100);
            $second->add_grade(100);
            $second->add_grade(100);
            $students['a00987334'] = $second;

            // Sort the students.
            ksort($students);

            // Print all students.
            foreach($students as $student)
                echo $student->toString();
            ?>

        </div>
    </body>
</html>
