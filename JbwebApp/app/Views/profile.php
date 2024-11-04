<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Orbitron:wght@400..900&family=Oswald:wght@200;300;400;500;600;700&family=Righteous&display=swap');
        
        .user-image {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
        }

        .nav-link {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
        }

        .nav-link i {
            margin-right: 10px;
            font-size: 20px;
        }

        .nav-link img {
            margin-right: 10px;
        }

        .col-9 {
            min-height: 250px;
        }
    </style> 
</head>

<body>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you Sure you want to logout your account?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <form action="<?= base_url('/logout') ?>" method="post">
                        <a class="btn btn-primary" href="<?= base_url('/logout') ?>">Yes</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div></div>
    <div class="card text-center justify-content-center align-items-center">
        <div class="card-header d-flex justify-content-between align-items-center">
            <a href="<?= base_url('/landing_page') ?>" class="m-2 fs-3"><i class="fa-solid fa-arrow-left"></i></a>
       
            <div class="col justify-content-center align-items-center">
                <div class="sidebar mt-2 text-center ">
                
                    <img src="https://picsum.photos/50" class="user-image mb-3" alt="">
                    <p class="text-center" style="font-family: Orbitron, sans-seriff;"><?= session()->get('username'); ?></p>
                    <ul class="nav nav-pills mb-3 text-center" id="pills-tab" role="tablist">

                    
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                                <i class="fa-solid fa-user-circle"></i> Profile
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"> Edit Profile</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-password-tab" data-bs-toggle="pill" data-bs-target="#pills-password" type="button" role="tab" aria-controls="pills-password" aria-selected="false">Change Password</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">See Login Sessions</button>
                        </li>
                        <li class="nav-item" role="presentation">

                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
        <div class="card-body">

            <p class="card-text">
                <section class="mt-0">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="form-container">
                                    <div class="alert-container" style="min-height: 50px;">
                                        <?php if (session()->getFlashdata('success')): ?>
                                            <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
                                        <?php endif; ?>

                                        <?php if (session()->getFlashdata('errors')): ?>
                                            <div class="alert alert-danger">
                                                <ul>
                                                    <?php foreach (session()->getFlashdata('errors') as $error): ?>
                                                        <li><?= $error ?></li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="tab-content" id="pills-tabContent">
                                        <!--tab-1-->
                                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                                            <h2 class="text-center" style="font-family:Orbitron, sans-serif;">YOUR PROFILE</h2>
                                            <form action="" class="mt-2">
                                                <div class="form-floating mb-3 mt-2">
                                                    <input type="text" name="profile_username" class="form-control w-15" id="floatingUsername" value="<?= esc($user->username ?? ''); ?>" disabled>
                                                    <label for="floatingUsername">Username</label>
                                                </div>
                                                <div class="form-floating mb-3 mt-2">
                                                    <input type="text" name="profile_firstname" class="form-control" id="floatingFirstname" value="<?= esc($user->firstname ?? ''); ?>" disabled>
                                                    <label for="floatingFirstname">Firstname</label>
                                                </div>
                                                <div class="form-floating mb-3 mt-2">
                                                    <input type="text" name="profile_lastname" class="form-control" id="floatingLastname" value="<?= esc($user->lastname ?? ''); ?>" disabled>
                                                    <label for="floatingLastname">Last Name</label>
                                                </div>
                                                <div class="form-floating mb-3 mt-2">
                                                    <input type="email" name="profile_email" class="form-control" id="floatingInput" value="<?= esc($user->email ?? ''); ?>" disabled>
                                                    <label for="floatingInput">Email address</label>
                                                </div>
                                            </form>
                                        </div>
                                        <!--tab-2-->
                                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                                            <form action="<?= base_url('profile/update') ?>" method="POST" class="mt-2">
                                                <h2 class="text-center" style="font-family:Orbitron, sans-serif;">Update Profile</h2>
                                                <div class="form-floating mb-3 mt-2">
                                                    <input type="text" name="update_username" class="form-control w-15" id="floatingUsername" value="<?= esc($user->username ?? ''); ?>" placeholder="Username">
                                                    <label for="floatingUsername">Username</label>
                                                </div>
                                                <div class="form-floating mb-3 mt-2">
                                                    <input type="text" name="update_firstname" class="form-control" id="floatingFirstname" value="<?= esc($user->firstname ?? ''); ?>" placeholder="Firstname">
                                                    <label for="floatingFirstname">Firstname</label>
                                                </div>
                                                <div class="form-floating mb-3 mt-2">
                                                    <input type="text" name="update_lastname" class="form-control" id="floatingLastname" value="<?= esc($user->lastname ?? ''); ?>" placeholder="Last Name">
                                                    <label for="floatingLastname">Last Name</label>
                                                </div>
                                                <div class="form-floating mb-3 mt-2">
                                                    <input type="email" name="update_email" class="form-control" id="floatingEmail" value="<?= esc($user->email ?? ''); ?>" placeholder="name@example.com">
                                                    <label for="floatingEmail">Email address</label>
                                                </div>
                                                <div class="form-floating mb-3 mt-2">
                                                    <input type="submit" class="btn btn-secondary mt-5" name="edit" value="Update Profile">
                                                </div>
                                            </form>
                                        </div>
                                        <!--tab-3-->
                                        <div class="tab-pane fade" id="pills-password" role="tabpanel" aria-labelledby="pills-password-tab" tabindex="0">
                                            <form action="<?= base_url('profile/change-password') ?>" method="POST" class="mt-2">
                                                <h2 class="text-center" style="font-family:Orbitron, sans-serif;">Change Password</h2>
                                                <div class="form-floating mb-3 mt-2">
                                                    <input type="password" name="cpass_current" class="form-control" placeholder="Current Password" required>
                                                    <label for="floatingCurrentPassword">Current Password</label>
                                                </div>
                                                <div class="form-floating mb-3 mt-2">
                                                    <input type="password" name="cpass_new" class="form-control" placeholder="New Password" required>
                                                    <label for="floatingNewPassword">New Password</label>
                                                </div>
                                                <div class="form-floating mb-3 mt-2">
                                                    <input type="password" name="cpass_confirm" class="form-control" placeholder="Confirm Password" required>
                                                    <label for="floatingConfirmPassword">Confirm Password</label>
                                                </div>
                                                <div class="form-floating mb-3 mt-2">
                                                    <input type="submit" class="btn btn-secondary mt-5" value="Change Password">
                                                </div>
                                            </form>
                                        </div>
                                        <!--tab-4-->
                                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                                            <h2 class="text-center" style="font-family:Orbitron, sans-serif;">YOUR LOGIN SESSIONS</h2>
                                            <div class="table-responsive">
                                                <table class="table table-striped table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Login Date and Time</th>
                                                            <th scope="col">Logout Date and Time</th>
                                                            <th scope="col">IP Address</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php if (!empty($loginSessions)): ?>
                                                            <?php foreach ($loginSessions as $session): ?>
                                                                <tr>
                                                                    <td><?= esc($session['login_time']); ?></td>
                                                                    <td><?= esc($session['logout_time']); ?></td>
                                                                    <td><?= esc($session['ip_address']); ?></td>
                                                                </tr>
                                                            <?php endforeach; ?>
                                                        <?php else: ?>
                                                            <tr>
                                                                <td colspan="3" class="text-center">No login sessions found.</td>
                                                            </tr>
                                                        <?php endif; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </p>
            <a href="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Logout</a>
        </div>
        <div class="card-footer text-body-secondary">
      
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
