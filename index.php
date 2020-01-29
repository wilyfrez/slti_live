<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description"
        content="Staff Leadership Training Institute, Leadership, Staff Leadership Training, OCEO Leadership Training, Staff Leadership, Training Institute, Teaching, Progress Monitoring">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="indexStyle.css">
    <title>Staff Leadership Training Institute</title>
</head>

<style>
.navbar-brand {
    font-weight: 600;
}

.carousel-item img {
    height: 85vh;
}

.carousel {
    position: relative;
}

.carousel-caption {
    position: absolute;
    top: 30%;
    z-index: 1;
}

@media (max-width: 576px) {
    .carousel-caption h1.display-4 {
        font-size: 2rem;
    }

    .carousel-caption p.lead {
        font-size: 1rem;
    }
}
</style>

<body>

    <!--Top Navigation Bar-->

    <nav class="navbar navbar-expand-md navbar-light bg-white">

        <div class="container">
            <a class="navbar-brand" href="">SLTI</a>

            <button type="button" class="btn navbar-toggler" data-toggle="collapse" data-target="#navbarContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="navbarContent" class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#featuring">Featuring</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#levels">Levels</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#register">Register</a>
                    </li>
                </ul>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a type="button" class="btn btn-outline-secondary nav-link px-4" data-toggle="modal"
                            data-target="#loginModal">Login</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>


    <!--Caroursel-->

    <div id="home" class="carousel slide " data-ride="carousel">

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="img/slti.jpg" alt="First slide">
                <div class="carousel-caption  text-center ">
                    <h1 class="display-4 ">Staff Leadership Training Institute</h1>
                    <p class="lead w-100 text-center">Teaching . Training . Coaching . Mentoring . Monitoring</p>
                    <div>
                        <span>
                            <a href="#register" class="btn btn-outline-light mt-4" role="button">Get Started</a>
                        </span>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--Caroursel-->

    <!--- Jumbotron -->
    <div class="jumbotron">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-xl-8">
                <div class="row text-center">
                    <div class="col-12 col-md-8 col-lg-10">
                        <p class="lead">Welcome to Staff Leadership Training Institute. Lorem ipsum dolor sit amet
                            consectetur
                            adipisicing elit. Mollitia, laborum?</p>
                    </div>
                    <div class="col-12  col-md-4 col-lg-2">
                        <a type="button" class="btn btn-outline-secondary px-4" data-toggle="modal"
                            data-target="#loginModal">Login</a>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!--- Two Column Section -->

    <div id="featuring" class="container text-center">
        <h3> Also Featuring</h3>
        <hr>
        <div class="row justify-content-center align-items-center">

            <div class="col-12 col-md-6 text-justify">
                <h4>Flight 365</h4>

                <p>Flight 365 is the CEO's Master Class on leadership; flying you to your next level.
                    Flight 365 will take you to leadership excellence.</p>

                <h6>Course Objectives</h6>

                <p>To make you shine as a leader and be ahead in such a way that you can only be a reference
                    point for what could be possible
                    in the life of somebody that is working the word </p>

            </div>
            <div class="col-12 col-md-6 border-dark">
                <video class="w-100" src="vid/promo.mp4" controls></video>
            </div>
        </div>

    </div>

    <!--- Meet the team -->

    <div id="levels" class="container mt-4 ">
        <h3 class="w-100 text-center">Levels Of Training</h3>
        <hr>
        <div class="row justify-content-center">

            <div class="col-12">
                <div class="card-deck">
                    <div class="card">
                        <img src="img/team1.png" class="card-img-top" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Non-Management</h4>
                            <small class="text-muted text-left">Leadership Level One</small>
                            <p class="card-text text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Modi repellat
                                architecto . </p>

                            <a href="#" role="button" class="btn btn-outline-secondary">Read More</a>

                        </div>

                    </div>

                    <div class="card">
                        <img src="img/team2.png" class="card-img-top" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Supervisory Staff</h4>
                            <small class="text-muted text-left">Leadership Level Two</small>
                            <p class="card-text text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Modi repellat
                                architecto . </p>

                            <a href="#" role="button" class="btn btn-outline-secondary">Read More</a>
                        </div>
                    </div>

                    <div class="card">
                        <img src="img/team3.png" class="card-img-top" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Management</h4>
                            <small class="text-muted text-left">Leadership Level Three</small>
                            <p class="card-text text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Modi repellat
                                architecto . </p>

                            <a href="#" role="button" class="btn btn-outline-secondary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 mt-4">
                <div class="card-deck">
                    <div class="card">
                        <img src="img/team1.png" class="card-img-top" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Mid-Management</h4>
                            <small class="text-muted text-left">Leadership Level Four</small>
                            <p class="card-text text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Modi repellat
                                architecto . </p>

                            <a href="#" role="button" class="btn btn-outline-secondary">Read More</a>

                        </div>

                    </div>

                    <div class="card">
                        <img src="img/team2.png" class="card-img-top" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Senior Management</h4>
                            <small class="text-muted text-left">Leadership Level Five</small>
                            <p class="card-text text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Modi repellat
                                architecto . </p>

                            <a href="#" role="button" class="btn btn-outline-secondary">Read More</a>
                        </div>
                    </div>

                    <div class="card">
                        <img src="img/team3.png" class="card-img-top" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Executive Management</h4>
                            <small class="text-muted text-left">Leadership Level Six</small>
                            <p class="card-text text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Modi repellat
                                architecto . </p>

                            <a href="#" role="button" class="btn btn-outline-secondary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--- Cards -->


    <!--Registration-->
    <div id="register" class="container mt-4">
        <h3 class="text-center">Registration</h3>
        <hr>

        <p class="lead text-warning text-center">Kindly enter accurate information because your details will be
            confirmed
            by admin before you can proceed</p>
        <form method="POST" action="process.php" enctype="multipart/form-data">

            <div class="form-group ">
                <label for="selectTitle">Title</label>
                <select name="selectTitle" id="selectTitle" class="form-control bg-light" required="">
                    <option selected>Choose Title</option>
                    <option value="Pastor">Pastor</option>
                    <option value="Deacon">Deacon</option>
                    <option value="Deaconness">Deaconness</option>
                    <option value="Brother">Brother</option>
                    <option value="Sister">Sister</option>
                </select>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputFirstName">First Name</label>
                    <input name="inputFirstName" type="text" class="form-control bg-light" id="inputFirstName"
                        placeholder="First Name" required="">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputLastName">Last Name</label>
                    <input name="inputLastName" type="text" class="form-control bg-light" id="inputLastName"
                        placeholder="Last Name" required="">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail">Email</label>
                <input name="inputEmail" type="email" class="form-control bg-light" id="inputEmail" placeholder="Email"
                    required="">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="selectDept">Department</label>
                    <select name="selectDept" id="selectDept" class="form-control bg-light" required="">
                        <option selected>Choose Department</option>
                        <option value="OFTP">OFTP</option>
                        <option value="OCEO">OCEO</option>
                        <option value="OHOA">OHOA</option>
                        <option value="ROR">ROR</option>
                        <option value="HS">HS</option>
                        <option value="LTM">LTM</option>

                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="selectRank">Ranking</label>
                    <select name="selectRank" id="selectRank" class="form-control bg-light" required="">
                        <option selected>Choose Ranking</option>
                        <option value="Non Management">Non Management</option>
                        <option value="Supervisory Staff">Supervisory Staff</option>
                        <option value="Management">Management</option>
                        <option value="Mid-Management">Mid-Management</option>
                        <option value="Senior Management">Senior Management</option>
                        <option value="Executive Management">Executive Management</option>
                    </select>
                </div>
            </div>

            <div class="form-group ">
                <label for="inputPassword">Password</label>
                <input type="password" name="inputPassword" class="form-control bg-light" id="inputPassword"
                    placeholder="Password" required="">
            </div>

            <div class="form-group">
                <label for="inputPassport">Passport</label>
                <input type="file" name="inputPassport" class="form-control-file bg-light border" id="inputPassport"
                    required="" aria-describedby="fileInput" accept="image/*">
            </div>
            <div class="w-100 d-flex justify-content-end">
                <button type="submit" name="register" class="btn btn-primary px-5 ">Register</button>
            </div>

        </form>
    </div>

    <!--Footer-->
    <footer class="sticky-footer shadow-sm bg-light text-center font-small mt-4 wow fadeIn">

        <!--Copyright-->
        <div class="footer-copyright text-dark py-1 py-lg-2">
            © 2020 ICT & Programming, OCEO

        </div>
        <!--/.Copyright-->
    </footer>
    <!--/.Footer-->

    <!-- Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="process.php" method="POST">
                        <div class="form-group">
                            <label for="loginEmail">Email</label>
                            <input name="loginEmail" type="email" class="form-control bg-light" id="loginEmail"
                                placeholder="Email" required="">
                        </div>

                        <div class="form-group ">
                            <label for="loginPassword">Password</label>
                            <input type="password" name="loginPassword" class="form-control bg-light" id="loginPassword"
                                placeholder="Password" required="">
                        </div>

                        <button type="submit" name="login" class="form-control btn bg-primary"> Login </button>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!--Script Tags-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

</body>

</html>