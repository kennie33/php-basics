<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fetch</title>
    <link rel="stylesheet" href="bootstrap-4.2/css/bootstrap.css">
    <script src="bootstrap-4.2/js/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19js/dataTables.bootstsrap4.min.js"></script>
</head>
<body>
<?php
require 'navbar.php';
?>
 <div class="container">
     <table class="table table-bordered table-dark id=employees">
         <thead>
         <tr>
             <th>ID</th>
             <th>NAMES</th>
             <th>EMAIL</th>
             <th>DOB</th>
             <th>ADDRESS</th>
             <th>DEPARTMENT</th>
             <th>GENDER</th>
             <th>KRA_PIN</th>
             <th>SALARY</th>
             <th>Action</th>
         </tr>
         </thead>


<tbody>

<?php
$conn=mysqli_connect("localhost","root","","shule");
$sql="select* from employees";
$results=mysqli_query($conn,$sql);
while ($row=mysqli_fetch_assoc($results)){
    extract($row);
        echo "
    <tr>
    <td>$id</td>
    <td>$names</td>
    <td>$email</td>
    <td>$dob</td>
    <td>$address</td>
    <td>$department</td>
    <td>$gender</td>
    <td>$kra_pin</td>
    <td>$salary</td>
    <td><a class='btn btn-danger btn-sm' href=delete.php?id=$id>Delete</a></td>
</tr>";
}

?>
</tbody>
</table>
 </div>
<script>
    $(document).ready(function () {
        $('#employees').DataTable();

    });
</script>
</body>
</html>