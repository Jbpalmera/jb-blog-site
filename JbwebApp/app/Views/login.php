<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login First</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Orbitron:wght@400..900&family=Oswald:wght@200;300;400;500;600;700&family=Righteous&display=swap');
    </style>

</head>

<body>
    <section>
        <div class="container text-center">
            <div class="row align-items-end mb-5">
                <div class="col mb-5 justify-content-center align-items-center">
                    <h3 class="text-center mb-5 mt-5" style="font-family: Orbitron, sans-seriff;">LOGIN FIRST</h3>
                    <?php if (isset($error)): ?>
                        <div class="alert alert-danger"><?= esc($error) ?></div>
                    <?php endif; ?>

                    <?php if (session()->getFlashdata('success')): ?>
                        <div class="alert alert-success">
                            <?= session()->getFlashdata('success') ?>
                        </div>
                    <?php endif; ?>

                    <?php if (session()->getFlashdata('error')): ?>
                        <div class="alert alert-danger">
                            <?= session()->getFlashdata('error') ?>
                        </div>
                    <?php endif; ?>

                    <form action="<?= base_url('login') ?>" method="post" class="mb-2">
                        <?= csrf_field() ?>
                        <div class="form-floating mb-1">
                            <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating mb-5 mt-2">
                            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                            <label for="floatingPassword">Password</label>
                        </div>
                          
                        <input type="submit" class="btn btn-secondary  mt-5 w-100" name="login" value="Login">
                        <a href="<?= base_url('/registration') ?>" class="btn btn-primary mb-2 mt-3 w-100">Sign up here</a>
                    </form>
                    <!-- <p class="mt-5">or login with</p>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b8/2021_Facebook_icon.svg/1200px-2021_Facebook_icon.svg.png" width="25px" alt="">
                    <img src="https://static-00.iconduck.com/assets.00/google-icon-2048x2048-tmg5cp5v.png" width="50px" alt=""><br> -->
                   

                </div>

                <div class="col  mb-0">
                        <h1 class="mt-5 pt-5 mb-0" style="font-size: 25px; font-family: Orbitron, sans-seriff;">WELCOME TO <br><span style="color: blue;">JB BLOG SYSTEM</span></h1>
                    <img src="https://www.shutterstock.com/image-illustration/robot-hand-palm-isolated-on-600nw-2464243661.jpg" alt="" style="margin-bottom: 50px; ">
                </div>



            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>