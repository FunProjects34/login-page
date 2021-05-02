<?php
    require_once ('config.php');
    ?>
<!DOCTYPE html>

<html>
<head>
    <title>Client Registration | PHP</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div>
    <?php
    if (isset($_POST['create'])){
        $firstname      = $_POST ['firstname'];
        $lastname       = $_POST ['lastname'];
        $email          = $_POST ['email'];
        $phonenumber    = $_POST ['phonenumber'];
        $address        = $_POST ['address'];
        $postalcode     = $_POST ['postalcode'];
        $password       = $_POST ['password'];

        $sql = "INSERT INTO users(firstname, lastname, email, phonenumber, address, postalcode, password) VALUES (?,?,?,?,?,?,?)";
        $stmtinsert = $db->prepare($sql);
        $result = $stmtinsert->execute([$firstname, $lastname, $email, $phonenumber, $address, $postalcode,$password]);
        if ($result){
            echo 'Successfully saved';
        }else{
            echo 'errors saving';
        }


    }
    ?>
</div>

<div>
    <form action="registration.php" method="post">
        <div class="container">

            <div class="row">
                <div class="col-sm-3">
                            <h1>Registration</h1>
                            <p>Fill up the form with correct values</p>
                <hr class="mb-3">
                            <label for="firstname"><b>firstname</b></label>
                            <input class="form-control" type="text" name="firstname" required>

                            <label for="lastname"><b>lastname</b></label>
                            <input class="form-control" type="text" name="lastname" required>

                            <label for="email"><b>email</b></label>
                            <input class="form-control"type="email" name="email" required>

                            <label for="phonenumber"><b>Phone Number</b></label>
                            <input class="form-control" type="text" name="phonenumber" required>

                            <label for="address"><b>Address</b></label>
                            <input class="form-control" type="text" name="address" required>

                            <label for="postalcode"><b>Postalcode</b></label>
                            <input class="form-control" type="text" name="postalcode" required>

                            <label for="password"><b>Password</b></label>
                            <input class="form-control" type="password" name="password" required>
                <hr class="mb-3">
                            <input class="btn btn-primary" type="submit" name="create" value="Sign Up">

                </div>
            </div>
        </div>

    </form>
</div>

</body>
</html>

