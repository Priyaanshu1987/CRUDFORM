<?php
include 'connect.php';
$sno=$_GET['updateid'];
$sql="Select * from `crudinfo` where sno=$sno";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name = $row['name'];
$age = $row['age'];
$email = $row['email'];
$mobile = $row['mobile'];
$employeecode = $row['employeecode'];
if (isset($_POST['submit'])) {
  $name=$_POST['name'];
  $age=$_POST['age'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $employeecode=$_POST['employeecode'];

  $sql="update `crudinfo` set sno=$sno,name='$name',age='$age',
   email='$email', mobile='$mobile', employeecode='$employeecode'
   where sno=$sno";
  $result=mysqli_query($con,$sql);
  if ($result) {
    //echo "Updated successfully";
      header('location:display.php');
  } else {
    die(mysqli_error($con));
  }
}

?>


<!-- HTML STARTED -->

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <div class="container">
    <form autocomplete="off" method="post" class="was-validated">
      <div class="mb-2 mt-3">
        <label for="name" class="form-label">Name:</label>
        <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name" autocomplete="off" value=<?php echo $name; ?> required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
      <div class="mb-2">
        <label for="age" class="form-label">Age:</label>
        <input type="text" class="form-control" id="age" placeholder="Enter your age" name="age" autocomplete="off" value=<?php echo $age; ?> required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
      <div class="mb-2">
        <label for="email" class="form-label">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Enter your Email" name="email" autocomplete="off" value=<?php echo $email; ?> required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
      <div class="mb-2">
        <label for="number" class="form-label">Mobile Number:</label>
        <input type="number" class="form-control" id="mobile" placeholder="Enter your phone number" name="mobile" autocomplete="off" value=<?php echo $mobile; ?> required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
      <div class="mb-2">
        <label for="employeecode" class="form-label">Employee Code:</label>
        <input type="text" class="form-control" id="employeecode" placeholder="Enter your Employee Code" name="employeecode" autocomplete="off" value=<?php echo $employeecode; ?> required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
      <div class="form-check mb-2">
        <input class="form-check-input" type="checkbox" id="myCheck" name="remember" required>
        <label class="form-check-label" for="myCheck">I agree all the details are correct.</label>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Check this checkbox to continue.</div>
      </div>
      <button type="submit" class="btn btn-primary" name="submit">Update</button>
    </form>
  </div>


</body>

</html>