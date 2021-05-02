<!DOCTYPE html>
<html>
<head>
    <title>login |PHP</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<style>
    body {
        background-image: url("earth_horizon_3-1920x1080.jpg");
    }
</style>

<body>
<div>
    <form action="login.php" method="post">
        <div class="container">
            <div class="row">
                <div class="col align-items-center">
            <h1 class="text-white">Login Page</h1>
                <p class="text-white">Please Enter correct details</p>

            <label for="name" class="text-white"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="name" required>

            <label for="password" class="text-white"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>
        <hr class="mb-3">
            <input class="btn btn-primary" type="submit" name="create" value="Login">
                </div>
            </div>
        </div>
    </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    $(function(){
        alert('hello.')
        });
</script>
</body>
</html>
