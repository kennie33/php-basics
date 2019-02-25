

<?php
     if (isset($_POST["dob"]))
        {

          extract($_POST);
//          echo "$names $dob $scholarship $course $email";
//          connect
         $scholarship = isset($scholarship) ? "Yes" : "No" ;
          $conn = mysqli_connect("localhost","root","","shule");
          $sql ="INSERT INTO `students`(`id`, `names`, `email`, `dob`, `gender`, `school_id`, `course`, `scholarship`) VALUES 
           (null,'names','$email','$dob','$gender','school_id','$course','$scholarship')";

          mysqli_query($conn, $sql) or die(mysqli_error($conn));

          $message ="Student $names has been registered";

        }

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="bootstrap-4.2/css/bootstrap.css">

</head>
<body>
<div class="container">
    <div class="row justify-content-centre">
        <div class="col-sm-5">
            <h3>register students</h3>
            <p>"text-success">
                <?php
                 if (isset($message))
                     echo $message;
                ?>


            </p>
            <form action="register.php" method="post">
             <!--names,email,gender,course,dob,scholarship,school id-->
                <div class="form-group">
                    <input type="text" required class="form-control" name="names" placeholder="names">
                </div>
                <div class="form-group">
                    <input type="text" required class="form-control" name="school_id" placeholder="school_id">
                </div>

                <div class="form-group">
                    <input type="email" required class="form-control" name="email" placeholder="email">
                </div>
                <div class="form-group">

                    <input type="date" required class="form-control" name="dob" placeholder="dob" >
                </div>

                <div class="radio">
                    <label><input type="radio"  value="Male" name="gender"> Male
                    </label>
                </div>
                <div class="radio">
                        <label><input type="radio"  value="Female" name="gender"> Female
                    </label>
                </div>
                <div class="form-group">
                    <select name="course" class="form-control">
                        <option value="Medicine">Medicine</option>
                        <option value="Engineering">Engineering</option>
                        <option value="Economics">Economics</option>
                        <option value="Accounts">Accounts</option>
                        <option value="Pharmacy">Pharmacy</option>
                        <option value="web design">web design</option>
                        <option value="Artificial Intel">Artificial Intel</option>
                        <option value="Networking">Networking</option>
                    </select>
                </div>
                <div class="form-group form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" name="scholarship" value="yes" type="checkbox"> scholarship?
                    </label>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </form>


        </div>

    </div>

</div>


</body>
</html>