<?php

$conn = mysqli_connect('localhost', 'root', 'root', 'Poject', '8889') or die('connection failed');

if (isset($_POST['send'])) {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = mysqli_real_escape_string($conn, $_POST['number']);
    $msg = mysqli_real_escape_string($conn, $_POST['message']);

    $select_message = mysqli_query($conn, "SELECT * FROM `contact_me` WHERE name ='$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');

    if (mysqli_num_rows($select_message) > 0) {
        $message[] = 'message sent already!';
    } else {
        mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
        $message[] = 'message sent successfully!';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rashmit Portfolio</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top navbarScroll">
        <div class="container">
            <a class="navbar-brand" href="#">Portfolio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#skill">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <section class="bgimage" id="home">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text">
                    <h2 class="title">Hi, it's me Rashmit</h2>
                    <h3 class="title">Student of Algoma University</h3>
                    <p class="desc">I am currently enrolled in Bachelor of Computer Science.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- about section-->
    <section id="about" data-aos="fade-down">
        <div class="container mt-4 pt-4">
            <h1 class="text-center">About Me</h1>
            <div class="row mt-4">
                <div class="col-lg-4">
                    <img src="images/Rashmit.png" class="imageAboutPage" alt="">
                </div>

                <div class="col-lg-8">
                    <p>
                        As a motivated computer science student with a passion for technology, I seek an internship opportunity that offers hands-on experience and collaboration with experienced professionals. Eager to explore new technologies and develop my technical and problem-solving skills, I aim to contribute to the team's success and prepare for a thriving career in the field.
                    </p>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <ul>
                                <li>Name: Rashmit Chandubhai Bhanderi</li>
                                <li>Age: 20</li>
                                <li>Occupation: Student</li>

                            </ul>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <p>Ever since I was young, I have enjoyed dabbling with computers and experimenting with different applications. In my free time I would help my family, friends and neighbors in fixing their computers and mobile phone for free which made me happy and gave me a lot of hands on experience although at times difficult, this ultimately made me a much more independent and confident person. I learned my first programming language (HTML) in VII grade, these bombarded my mind with creative ideas for using this language to make different websites and that is how I finally discovered my ambition. Moreover, I was highly influenced by all the core subjects like Mathematics, Physics and Chemistry in my Higher Secondary school and I excelled in these subjects. In addition to that during my high school I learned different programming languages like C/C++ and Java which I enjoyed learning and which made me more curious to learn about concepts like data structures and algorithms in depth. Now the world has entered the era where nothing can be done without the help of computer and internet.
                            So, now, in industry this passion reminds me. There's certainly yet more to learn, yet more problems to solve, and yet more to build.
                        </p>
                    </div>
                </div>
            </div>
    </section>

    <!-- services section-->

    <div class="container-fluid py-5" id="skill">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Skills</h1>
                <h1 class="position-absolute text-uppercase text-primary">My Skills</h1>
            </div>
            <div class="skillbar-wrapper">
                <div class="skillbar clearfix html5" data-percent="95%" data-aos="zoom-out-left">
                    <h4 class="skillbar-title"><span>HTML5</span></h4>
                    <div class="skillbar-bar"></div>
                    <div class="skill-bar-percent">95%</div>
                </div>

                <div class="skillbar clearfix css" data-percent="90%" data-aos="zoom-out-right">
                    <h4 class="skillbar-title"><span>CSS</span></h4>
                    <div class="skillbar-bar"></div>
                    <div class="skill-bar-percent">90%</div>
                </div>

                <div class="skillbar clearfix javascript" data-percent="80%" data-aos="zoom-out-left">
                    <h4 class="skillbar-title"><span>JavaScript</span></h4>
                    <div class="skillbar-bar"></div>
                    <div class="skill-bar-percent">80%</div>
                </div>

                <div class="skillbar clearfix php" data-percent="93%" data-aos="zoom-out-left">
                    <h4 class="skillbar-title"><span>PHP</span></h4>
                    <div class="skillbar-bar"></div>
                    <div class="skill-bar-percent">93%</div>
                </div>

                <div class="skillbar clearfix wordpress" data-percent="85%" data-aos="zoom-out-right">
                    <h4 class="skillbar-title"><span>react</span></h4>
                    <div class="skillbar-bar"></div>
                    <div class="skill-bar-percent">85%</div>
                </div>

                <div class="skillbar clearfix server" data-percent="90%" data-aos="zoom-out-left">
                    <h4 class="skillbar-title"><span>MySQL</span></h4>
                    <div class="skillbar-bar"></div>
                    <div class="skill-bar-percent">90%</div>
                </div>
            </div>
        </div>
    </div>


    <!-- portfolio section-->
    <section id="portfolio">
        <div class="container mt-3">
            <h1 class="text-center">Portfolio</h1>
            <div class="row">
                <div class="col-lg-4 mt-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Wireless Sales Associate</h4>
                            <p class="card-text">Processed new activations, phone and phone plan upgrades, and closed sales on wireless devices and
                                accessories through customer engagement while working with major telecom companies such as Rogers, Bell,
                                and Telus.</p>
                            <div class="text-center">
                                <a href="#" class="btn btn-success">Link</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mt-4">
                    <div class="card portfolioContent">
                    
                        <div class="card-body">
                            <h4 class="card-title">Electronics Sales & Technician</h4>
                            <p class="card-text">Managed sales of electronic appliances such as TVs, laptops, and other devices using Tally 9 software.</p>
                            <div class="text-center">
                                <a href="#" class="btn btn-success">Link</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mt-4">
                    <div class="card portfolioContent">
                        <div class="card-body">
                            <h4 class="card-title">Personal Portfolio</h4>
                            <p class="card-text">I have created my personal portfolio to showcase my skills</p>
                            <div class="text-center">
                                <a href="#" class="btn btn-success">Link</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
    </section>

    <!-- contact section-->
    <section id="contact">
        <div class="container mt-3 contactContent">
            <h1 class="text-center">Contact Me</h1>

            <div class="row mt-4">
                <div class="col-lg-6">
                    <div style="max-width:100%;overflow:hidden;color:red;width:500px;height:500px;">
                        <div id="embedmap-canvas" style="height:100%; width:100%;max-width:100%;">
                            <iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=new+york&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8">
                            </iframe>
                        </div>
                        <a class="googlemaps-html" href="https://www.embed-map.com" id="get-data-forembedmap">https://www.embed-map.com</a>
                        <style>
                            #embedmap-canvas img {
                                max-width: none !important;
                                background: none !important;
                                font-size: inherit;
                                font-weight: inherit;
                            }
                        </style>
                    </div>
                </div>

                <div class="col-lg-6">
                    <!-- form fields -->
                    <form action="" method="post">
                        <input type="text" class="form-control form-control-lg" placeholder="Name" name="name">
                        <input type="email" class="form-control mt-3" name="email" placeholder="Email">
                        <input type="number" class="form-control mt-3" placeholder="number" name="number">
                        <div class="mb-3 mt-3">
                            <textarea class="form-control" rows="5" id="comment" name="message" placeholder="Project Details"></textarea>
                        </div>
                        <input type="submit" class="btn btn-success mt-3" value="Contact Me" name="Submit">
                    </form>

                </div>

            </div>
        </div>
    </section>

    <!-- footer section-->
    <footer class="bg-light text-center text-lg-start">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2023 Copyright: Rashmit Chandubhai Bhanderi <br>
            Student Id: 219682680
            <a class="text-dark" href="https://www.linkedin.com/in/rashmitbhanderi/">Linkedin</a>
        </div>
    </footer>

    <?php
    if (isset($_POST['Submit'])) {
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $number = mysqli_real_escape_string($conn, $_POST['number']);
        $msg = mysqli_real_escape_string($conn, $_POST['message']);

        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO contact_me  VALUES ('$name',
            '$email','$number','$msg')";

        if (mysqli_query($conn, $sql)) {
            $_POST = array();
        } else {
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
    }
    ?>
</body>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="script.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    (function() {

        var SkillsBar = function(bars) {
            this.bars = document.querySelectorAll(bars);
            if (this.bars.length > 0) {
                this.init();
            }
        };

        SkillsBar.prototype = {
            init: function() {
                var self = this;
                self.index = -1;
                self.timer = setTimeout(function() {
                    self.action();
                }, 500);


            },
            select: function(n) {
                var self = this,
                    bar = self.bars[n];

                if (bar) {
                    var width = bar.parentNode.dataset.percent;

                    bar.style.width = width;
                    bar.parentNode.classList.add("complete");
                }
            },
            action: function() {
                var self = this;
                self.index++;
                if (self.index == self.bars.length) {
                    clearTimeout(self.timer);
                } else {
                    self.select(self.index);
                }

                setTimeout(function() {
                    self.action();
                }, 500);
            }
        };

        window.SkillsBar = SkillsBar;

    })();

    (function() {
        document.addEventListener("DOMContentLoaded", function() {
            var skills = new SkillsBar(".skillbar-bar");
        });
    })();
</script>

<script>
    AOS.init({
        duration: 900,
        delay: 400
    });
</script>


</html>