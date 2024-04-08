<?php

include 'connect.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operation</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container">


        <button class="btn btn-primary mt-5"><a href="user.php" class="text-light">Add user</a>
        </button>


        <table class="table table-bordered my-5">
            <thead>
                <tr>
                    <th>Sno</th>
                    <th>Name</th>
                    <th>age</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Employee Code</th>
                    <th>Operations</th>

                </tr>
            </thead>
            <tbody>
                <?php

                

                $sql = "select * from `crudinfo`";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $sno = $row['sno'];
                        $name = $row['name'];
                        $age = $row['age'];
                        $email = $row['email'];
                        $mobile = $row['mobile'];
                        $employeecode = $row['employeecode'];
                        echo '
                        <tr>
                        <th>' . $sno . '</th>
                        <td>' . $name . '</td>
                        <td>' . $age . '</td>
                        <td>' . $email . '</td>
                        <td>' . $mobile . '</td>
                        <td>' . $employeecode . '</td>
                        <td>
                         <button class="btn btn-primary"><a href="update.php? updateid='.$sno.'" class="text-light">Update</a></button>
                         <button class="btn btn-danger"><a href="delete.php? deleteid='.$sno.'" class="text-light">Delete</a></button>
                        </td>
                        </tr>';
                    }
                }
                ?>   
            </tbody>
        </table>


    </div>

</body>

</html>