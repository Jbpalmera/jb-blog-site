<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />

    <title>Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>


<body class="bg-light">
    <header class="">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><b>JB BLOG SYSTEM</b></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-duotone fa-solid fa-user" style="--fa-primary-color: #14181f; --fa-secondary-color: #375281;"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <?php if (session()->get('user_id')): ?>
                                    <li><a class="dropdown-item" href="<?= base_url('/profile') ?>">My Profile</a></li>
                                    <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal">Logout</a></li>
                                <?php else: ?>
                                    <li><a class="dropdown-item" href="<?= base_url('/registration') ?>">Sign Up</a></li>
                                    <li><a class="dropdown-item" href="<?= base_url('/login') ?>">Login</a></li>
                                <?php endif; ?>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-dark" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>





    <section>

        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://img.freepik.com/premium-photo/futuristic-robot-with-blank-plate-its-hand-ready-serve_14117-890873.jpg" class="d-block w-100" alt="..." style="height: 650px;">
                    <div class="carousel-caption d-none d-md-block text-start" style="left: 10%; transform: translateY(-50%); top: 50%;">
                        <?php if (session()->get('user_id')): ?>
                            <h1 class="text-dark">Welcome back, <?= session()->get('username'); ?>!</h1>
                            <p class="text-dark">You are now successfully Login</p>
                        <?php else: ?>
                            <h3 class="text-dark">Please <a href="<?= base_url('login'); ?>">login</a> to access more features.</h3>

                            <p class="text-dark">This is my Task on 1st Evaluation using CodeIgniter 4</p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://t3.ftcdn.net/jpg/07/84/65/86/360_F_784658632_C9gBwiqOmdLr94jCDGcJKS4yGtb3pe3Y.jpg" class="d-block w-100" alt="..." style="height: 650px;">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="text-dark">Search any content</h5>
                        <p class="text-dark">To Find Content you want to read use Search bar</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://static.vecteezy.com/system/resources/previews/046/336/274/non_2x/futuristic-robotic-arm-with-advanced-mechanisms-free-png.png" class="d-block w-100" alt="..." style="height: 650px;">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Got it ?</h5>
                        <p>Thank
                            you for visiting my Website
                        </p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev " type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </section>



    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Are you Sure? </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Logout Account?
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



    <section>
        <?php if (session()->get('user_id')): ?>
            <div class="card text-center">
                <div class="card-header">
                    This is the content after you log on this site
                </div>
                <div class="card-body m-5">
                    <h5 class="card-title">Blog About Artificial Intelligence</h5>
                    <p class="card-text text-md-center">
                     
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                        with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                        publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                        with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                        publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                        with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                        publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                        with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                        publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                        with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                        publishing software like Aldus PageMaker including versions of Lorem Ipsum.

                    <a href="#" class="btn btn-primary">Read more</a>
                </div>
                <div class="card-footer text-white bg-dark p-5">
                   <span>JB BLOG SITE copyright <?= date('Y'); ?></span>
                </div>
            </div>
        <?php else: ?>

            <div class="card text-center">

                <div class="card-body">
                    <h5 class="card-title">You want more content?</h5>
                    <p class="card-text">Login first to display this Content</p>
                    <a href="<?= base_url('login'); ?>" class="btn btn-primary">Login</a>
                </div>
                <div class="card-footer text-body-secondary">
                    JB BLOG SITE
                </div>
            </div>
        <?php endif; ?>
    </section>


    <!-- Modal -->
    <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalLabel">Welcome!</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Welcome to the JB Blog System! this is for evaluation task purposes only some features of
                        this system are limited and some features is not yet implemented. </p>
                    <p>FEATURES ALREADY IMPLEMENTED:</p> 
                    <li><b>Login verification authentication:</b></li>
                    <p>Users can login with their details and be stored in the database</p>
                    <li><b>Registration & Authentication & Email Verification:</b></li>
                    <p>Users can register with their details and be stored in the database</p>
                    <li><b>Logout :</b></li>
                    <p>Users can logout and be stored in the database</p>
                    <li><b>Profile :</b></li>
                    <p>Users can view their profile</p>
                    <li><b>Profile Edit :</b></li>
                    <p>Users can edit their profile</p>
                    <li><b>Change Password :</b></li>
                    <p>Users can change their password</p>
                    <li><b>See Login Sessions :</b></li>
                    <p>Users can see their login sessions</p>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary bg-dark" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        window.onscroll = function() {
            toggleStickyNavbar()
        };

        const navbar = document.querySelector('.navbar');
        const sticky = navbar.offsetTop;

        function toggleStickyNavbar() {
            if (window.pageYOffset > sticky) {
                navbar.classList.add("sticky");
            } else {
                navbar.classList.remove("sticky");
            }
        }

        document.addEventListener("DOMContentLoaded", function() {
            const showModal = true; // Set this to false to prevent modal from showing
            if (showModal) {
                const modal = new bootstrap.Modal(document.getElementById('modal'));
                modal.show();
            }
        });
    </script>


</body>

</html>
<style>
    .navbar-expand-lg .navbar-collapse {
        border: none;
    }

    .carousel-item img {
        max-height: 800px;
        object-fit: cover;
    }

    .navbar {
        background-color: transparent !important;
        position: absolute;
        width: 100%;
        z-index: 1000;
    }

    .navbar {
        background-color: transparent !important;
        position: absolute;
        width: 100%;
        z-index: 1000;
        transition: background-color 0.3s;
    }

    .sticky {
        background-color: gray !important;
        position: fixed;
        top: 0;
        left: 0;
    }
</style>