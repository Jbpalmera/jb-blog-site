<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Orbitron:wght@400..900&family=Oswald:wght@200;300;400;500;600;700&family=Righteous&display=swap');
    </style>

</head>

<body>
    <section>
        <div class="container text-center">
            <div class="row align-items-end">
                <div class="col mt-2 justify-content-center align-items-center">
                    <h3 class="text-center mt-5" style="font-family: Orbitron, sans-seriff;">Registration Form</h3>
                    <!-- Display success or error messages -->
                    <?php if (isset($error)): ?>
                        <div class="alert alert-danger"><?= esc($error) ?></div>
                    <?php endif; ?>
                    <?php if (isset($success)): ?>
                        <div class="alert alert-success"><?= esc($success) ?></div>
                    <?php endif; ?>
                    
                    <form action="<?= base_url('registration') ?>" method="post">
                        <div class="form-floating mb-3 mt-2">
                            <input type="text" name="reg_username" class="form-control" id="floatingUsername" placeholder="Username" required>
                            <label for="floatingUsername">Username</label>
                        </div>
                        <div class="form-floating mb-3 mt-2">
                            <input type="text" name="reg_firstname" class="form-control" id="floatingFirstname" placeholder="Firstname" required>
                            <label for="floatingFirstname">Firstname</label>
                        </div>
                        <div class="form-floating mb-3 mt-2">
                            <input type="text" name="reg_lastname" class="form-control" id="floatinglastname" placeholder="Last Name" required>
                            <label for="floatinglastname">Last Name</label>
                        </div>
                        <div class="form-floating mb-3 mt-2">
                            <input type="email" name="reg_email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                            <label for="floatingInput">Email address</label>
                        </div>

                        <div class="form-floating mb-3 mt-2">
                            <input type="number" name="reg_phone" class="form-control" id="floatingPhone" placeholder="Phone" required>
                            <label for="floatingPhone">Phone</label>
                        </div>
                        <div class="col-auto">
                                <span id="passwordHelpInline" class="form-text">
                                   Password Must be 8-20 characters long and contain letters, numbers, and symbols.
                                </span>
                            </div>
                        <div class="form-floating">
                            <input type="password" name="reg_password" class="form-control" id="floatingPassword" placeholder="Password" required>
                            <label for="floatingPassword">Password</label>
                        </div>
                       
                        <div class="form-floating mt-3">
                            <input type="password" name="reg_Conpassword" class="form-control" id="floatingConPassword" placeholder="Confirm Password" required>
                            <label for="floatingConPassword">Confirm Password</label>
                        </div>      
                        <input type="submit" class="btn btn-secondary mt-2 w-100" name="signupbtn" value="Register">
                    </form>



                    <!-- <p class="mt-1 ">or login with</p>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b8/2021_Facebook_icon.svg/1200px-2021_Facebook_icon.svg.png" width="25px" alt="">
                    <img src="https://static-00.iconduck.com/assets.00/google-icon-2048x2048-tmg5cp5v.png" width="50px" alt=""><br> -->
                    <a href="<?= base_url('/login') ?>" class="btn btn-primary mt-1 w-100 mb-5">login here</a>

                </div>

                <div class="col mb-5" style="margin-bottom: 50px;">
                    <h1 class="mt-5 pt-5 mb-0" style="font-size: 25px; font-family: Orbitron, sans-seriff;">BE A MEMBER OF <br><span style="color: blue;">JB BLOG SYSTEM</span></h1> <img src="https://www.shutterstock.com/image-illustration/robot-hand-palm-isolated-on-600nw-2464243661.jpg" alt="" style="margin-bottom: 50px; ">
                </div>



            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>