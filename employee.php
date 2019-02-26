
<?php
if (isset($_POST["dob"]))
{

    extract($_POST);
//          echo "$names $email $address $dob  $department $genser $hra_pin";
//          connect

    $conn = mysqli_connect("localhost","root","","shule");
    $sql ="INSERT INTO `employees`(`id`, `names`, `email`, `address`, `dob`, `department`, `gender`, `kra_pin`,`salary`) VALUES 
                                   (null,'$names','$email','$address','$dob','$department','$gender','$kra_pin','$salary')";

    mysqli_query($conn, $sql) or die(mysqli_error($conn));



}

?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>employee</title>
    <link rel="stylesheet" href="bootstrap-4.2/css/bootstrap.css">

</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-5">
            <h3>employee form</h3>





        <form action="employee.php" method="post">
<!--            names,email,address,dob,department,gender,kra_pin,salary-->
            <div class="form-group">
            <div class="form-group">
                <input type="text" required class="form-control" name="names" placeholder="names">
            </div>
            <div class="form-group">
                <input type="email" required class="form-control" name="email" placeholder="email">
            </div>
            <div class="form-group">
                <input type="text" required class="form-control" name="address" placeholder="address">
            </div>
            <div class="form-group">
                <input type="date" required class="form-control" name="dob" placeholder="dob" >
            </div>
            <div class="radio">
                <label><input type="radio" CHECKED value="Male" name="gender"> Male
                </label>
            </div>
            <div class="radio">
                <label><input type="radio"  value="Female" name="gender"> Female
                </label>
            </div>
                <div class="form-group">
                    <select name="department" class="form-control">
                        <option value="Sales">Sales</option>
                        <option value="Accounting">Accounting</option>
                        <option value="Business">Business</option>
                        <option value="Information Tech">Information Tech</option>
                        <option value="Procurement">Procurement</option>
                        <option value="Human Resource">Communication</option>
                        <option value="Communication">Communication</option>
                        <option value="Networking">Networking</option>
                    </select>

             <div class="form-group">
                 <input type="text" required class="form-control" name="kra_pin" placeholder="kra_pin">
             </div>
             <div class="salary">
                 <input type="text" required class="form-control" name="salary" placeholder="salary">
             </div>

                    <button type="submit" class="btn btn-primary btn-block">Submit</button>

                </form>

                </div>
            </div>
</div>
</body>
</html>
