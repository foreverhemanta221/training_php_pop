<!doctype html>
<html>
   <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>ADMIN | Login</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css" />
        <link rel="stylesheet" href="font/font-awesome-4.7.0/css/font-awesome.css">
        <link rel="stylesheet" href="../css/style.css">
    </head>

    <body>
        <div id="wrapper-admin" class="body-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-4 col-md-4">
                        <img class="logo" src="images/news.jpg">
                        <h3 class="heading">Admin</h3>
                        <!-- Form Start -->
                        <form  action="/blog/admin/auth/register.php" method ="POST">
                            <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" name="firstname" class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" name="lastname" class="form-control" placeholder="" required>
                            </div>
                            <div class="form-group">
                                    <label>Role</label>
                                    <select name="role" class="form-control" id="">
                                        <option value="1">Admin</option>
                                        <option value="0">User</option>
                                    </select>
                            </div>
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control" placeholder="" required>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="" required>
                            </div>
                            <input type="submit" name="register" class="btn btn-primary" value="Register">
                        </form>
                        <!-- /Form  End -->
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
