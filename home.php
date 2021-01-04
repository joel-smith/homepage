<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--STYLES -->
    <link rel="stylesheet" href="assets/css/main.css" />
    <!--This stylesheet not necesary -->
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <title>Webfolio</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script>
    $(document).ready(function() {
        //handles changing the active class for each button
        //when each button is clicked, it will toggle to active
        //toggle each other link off of active


        $("#aboutLink").click(function(e) {
            if (!$(this).hasClass("active")) {
                $(this).toggleClass("active");
                $("#portfolioLink").removeClass("active");
                $("#contactLink").removeClass("active");
            }
        });

        $("#portfolioLink").click(function(e) {
            if (!$(this).hasClass("active")) {
                $(this).toggleClass("active");
                $("#aboutLink").removeClass("active");
                $("#contactLink").removeClass("active");
            }
        });

        $("#contactLink").click(function(e) {
            if (!$(this).hasClass("active")) {
                $(this).toggleClass("active");
                $("#aboutLink").removeClass("active");
                $("#portfolioLink").removeClass("active");
            }
        });

    });
    </script>

</head>


<body>

    <!-- <nav id="navbar" class="header">
        <ul> 
            <li><a id="about_link" href="#about_section">ABOUT</a></li>
            <li><a id="portfolio_link" href="#portfolio_section">PORTFOLIO</a></li>
            <li><a id="contact_link" href="#contact_section">CONTACT</a></li>
        </ul>
    </nav>  -->

    <nav class="topnav" id="navbar">

        <a id="aboutLink" href="#about_section" class="active">About</a>
        <a id="portfolioLink" href="#portfolio_section">Portfolio</a>
        <a id="contactLink" href="#contact_section">Contact</a>
        <a id="burgerLink" href="javascript:void(0);" class="icon" onclick="openNav()">
            <i class="fa fa-bars"></i>
        </a>

    </nav>

    <script>
    //expands the navbar on hamburger menu press
    function openNav() {
        var x = document.getElementById("navbar");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
    </script>

    <main id="site_main">
        <!--ABOUT -->

        <div class="wrap">
            <section id="about_section" class="intro">
               
            <img class="headshot" src="assets/img/avatar.jpg">
            
             <h2>About Me</h2>
                <div class="about_text">
                    <p>Welcome! I am a Software Engineering Co-Op student looking to ply my new trade.
                        Formerly a professional scientist, I have been studying Software Development and am now
                        ready to work. Learning, building new things, solving problems, these are what interest me
                        and drive me forward.
                    </p>
                </div>


                <!-- SKILLS (Thanks Fontawesome) 
            should this become a grid??? maybe maybe not
            more skills listed to be needed
            -->
                <div class="all_skills">

                    <div class="skill_details">
                        <div class="skill_icon">
                            <i class="fab fa-js fa-3x" style="color:#F0D92F"></i>
                        </div>
                        <div class="skill_desc">
                            <p style="color:#F0D92F">JavaScript</p>
                        </div>
                    </div>
                    <div class="skill_details">
                        <div class="skill_icon">
                            <i class="fab fa-linux fa-3x" style="color:#5FD4F4"></i>
                        </div>
                        <div class="skill_desc">
                            <p style="color:#5FD4F4">Linux</p>
                        </div>
                    </div>
                    <div class="skill_details">
                        <div class="skill_icon">
                            <i class="fab fa-cuttlefish fa-3x" style="color:#6BBF46">++</i>
                        </div>
                        <div class="skill_desc">
                            <p style="color:#6BBF46">C++</p>
                        </div>
                    </div>
                    <div class="skill_details">
                        <div class="skill_icon">
                            <i class="fab fa-cuttlefish fa-3x" style="color:#6BBF46">#</i>
                        </div>
                        <div class="skill_desc">
                            <p style="color:#6BBF46">C#</p>
                        </div>
                    </div>
                    <div class="skill_details">
                        <div class="skill_icon">
                            <i class="fas fa-database fa-3x" style="color:#EEAD31"></i>
                        </div>
                        <div class="skill_desc">
                            <p style="color:#EEAD31">SQL</p>
                        </div>
                    </div>
                    <div class="skill_details">
                        <div class="skill_icon">
                            <i class="fas fa-microchip fa-3x" style="color:#45AFF4"></i>
                        </div>
                        <div class="skill_desc">
                            <p style="color:#45AFF4">Embedded</p>
                        </div>
                    </div>
                    <div class="skill_details">
                        <div class="skill_icon">
                            <i class="fab fa-git-square fa-3x" style="color:#E44D32"></i>
                        </div>
                        <div class="skill_desc">
                            <p style="color:#E44D32">Git</p>
                        </div>
                    </div>
                    <div class="skill_details">
                        <div class="skill_icon">
                            <i class="fab fa-html5 fa-3x" style="color:#DE4B30"></i>
                        </div>
                        <div class="skill_desc">
                            <p style="color:#DE4B30">HTML5</p>
                        </div>
                    </div>
                    <div class="skill_details">
                        <div class="skill_icon">
                            <i class="fab fa-css3-alt fa-3x" style="color:#42A4DA"></i>
                        </div>
                        <div class="skill_desc">
                            <p style="color:#42A4DA">CSS3</p>
                        </div>
                    </div>
                </br>
            <h2>Education</h2>
            <div class="about_text">
                    
                    <p>Software Engineering Technology Co-Op</p>
                    
                    <p>Conestoga College - Curently Enrolled</p>
                    </br>
                    <p>Bachelor of Science - Major in Physics, Minor in Chemistry</p>
                    
                    <p>Mount Allison University - 2015</p>
                
                </div>
            
                </section>
        </div>

        <!--maybe add a modal for each project? -->
        <section id="portfolio_section">
            <div class="projects">
                <div>
                    <h2 class="section_name">Projects</h2>
                </div>
                <div class="project_wrapper">
                    
                    <div class="project_tile">
                        <div>
                            <img class="project_pic" src="assets/img/placeholder.jpg" alt="Project_Screenshot">
                        </div>
                        <div class="project_info">
                            <div class="project_words">
                                <h3>SimpleHttpWebServer</h3>
                                 <p>This is a Web Server made in C#. The user chooses the root folder for the server, and serve html, text and image files.</p>
                            </div>
                            <div class="project_links">
                                <a href="https://github.com/joel-smith/SimpleHttpWebServer/" target="_blank">GitHub</a>
                            </div>
                        </div>
                    </div>

                    <div class="project_tile">
                        <div>
                            <img class="project_pic" src="assets/img/placeholder.jpg"
                                alt="Project_Screenshot">
                        </div>
                        <div class="project_info">
                            <div class="project_words">
                                <h3>Chat Chat</h3>
                                <p>This is a multi-threaded chatroom program in C#, allowing users to speak to each other in a chatroom across the network</p>                            </div>
                            <div class="project_links">
                                <a href="#"
                                    target="_blank">???</a>
                                <a href="#"
                                    target="_blank">GitHub</a>
                                <a href="#" target="_blank">THIRDLINK</a>
                            </div>
                        </div>
                    </div>

                    <div class="project_tile">
                        <div>
                            <img class="project_pic" src="assets/img/placeholder.jpg" alt="Project_Screenshot">
                        </div>
                        <div class="project_info">
                            <div class="project_words">
                                <h3>Low Level Snake</h3>
                                <p>This is a alksjflaksjfas alskjfalskfas falskfjasfij</p>
                            </div>
                            <div class="project_links">
                                <a href="#" target="_blank">Github</a>
                            </div>
                        </div>
                    </div>

                    <div class="project_tile">
                        <div>
                            <img class="project_pic" src="assets/img/placeholder.jpg" alt="Project_Screenshot">
                        </div>
                        <div class="project_info">
                            <div class="project_words">
                                <h3>Portfolio Homepage</h3>
                                <p>This very website you are looking at, crafted with HTML, CSS and Javascript.</p>
                            </div>
                            <div class="project_links">
                                <a href="#" target="_blank">Github</a>
                            </div>
                        </div>
                    </div>

                    <div class="project_tile">
                        <div>
                            <img class="project_pic" src="assets/img/placeholder.jpg" alt="Project_Screenshot">
                        </div>
                        <div class="project_info">
                            <div class="project_words">
                                <h3>HomeLab</h3>
                                <p>My personal homelab has been growing for years, featuring modern, vintage and refurbished equipment.</p>
                            </div>
                            <div class="project_links">
                                <a href="#" target="_blank">Lab Scope</a>
                            </div>
                        </div>
                    </div>

                    <div class="project_tile">
                        <div>
                            <img class="project_pic" src="assets/img/InnovarDisplay.jpeg" alt="Project_Screenshot">
                        </div>
                        <div class="project_info">
                            <div class="project_words">
                                <h3>Innovar VR</h3>
                                <p>Virtual Reality tourism product esign and presentation for a hackathon/pitch competition.</p>
                            </div>
                            <div class="project_links">
                                <a href="#" target="_blank">GitHub</a>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <section id="contact_section">

            <!--Contact Form, sends me an email to my own domain emails -->
            <div class="formContainer">
                <form method="POST" action="" id="contact_form">
                    <h2>Contact</h2>
                    <div class="row">
                        <div class="col-25">

                            <label for="name">Name:</label>
                        </div>
                        <div class="col-75">
                            <input name="name" type="text" maxlength="150" required/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="email">Email:</label>
                        </div>

                        <div class="col-75">
                            <input  name="email" type="email" required/>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label for="message">Message:</label>
                        </div>
                        <div class="col-75">
                            <textarea name="message" required rows="8" maxlength="1250"></textarea>
                        </div>

                        <div class="row">
                            <input type="submit" value="Send" />
                        </div>
                </form>
            </div>

            <!-- validation and serverside treatment of form data -->
            <?php
                
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $name = treat_input($_POST['name']);
                    $visitor_email = treat_input($_POST['email']);
                    $message = treat_input($_POST['message']);
                }
                
                //this function removes whitespace, treats html special chars and removes any slashes
                function treat_input($data) {
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                }
                
                ?>

            <!--need security on this here for sure 
            https://www.w3schools.com/php/php_form_validation.asp for removal of http special chars
            -->

            <?php
	        $email_from = 'contact@joelcs.net';

	        $email_subject = "New Form submission";

	        $email_body = "You have received a new message from the user $name.\n".
                            "Here is the message:\n $message"
            ?>


            <?php

            $to = "contact@joelcs.net";

            $headers = "From: $email_from \r\n";

            $headers .= "Reply-To: $visitor_email \r\n";

            mail($to,$email_subject,$email_body,$headers);

            ?>
        </section>
    </main>

</body>

</html>