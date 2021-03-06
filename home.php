<!DOCTYPE html>
<html lang="en">

<!-- add stub for contact while contact is not visible (review ecdcambridge.com chat) -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--STYLES -->
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <title>Joel Smith - Webfolio</title>

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

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

        $("#burgerLink").click(function(e) {
            if (!$("#navbar").hasClass("responsive")) {
                $("#navbar").toggleClass("responsive");
            } else if ($("#navbar").hasClass("responsive")) {
                $("#navbar").removeClass("responsive");
            }
        });

        $("#burgerLink").click(function(e) {

        });
    });

    //collapses the navbar menu when clicking outside of it
    $(document).on('click', function(e) {

        if (!$(e.target).closest('#navbar').length) {
            $("#navbar").removeClass(" responsive");
        }


    });
    </script>
</head>


<body>



    <nav class="topnav" id="navbar">

        <a id="aboutLink" href="#about_section" class="active">About</a>
        <a id="portfolioLink" href="#portfolio_section">Portfolio</a>
        <a id="contactLink" href="#contact_section">Contact</a>
        <a id="burgerLink" href="javascript:void(0);" class="icon">
            <i class="fa fa-bars"></i>
        </a>
    </nav>



    <main id="site_main">
        <!--ABOUT -->

        <div class="wrap">
            <section id="about_section" class="intro">

                <div class="my_name">Joel Smith</div>

                <div class="my_tagline">Developer | Scientist</div>

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
            adjust colors
            -->
                <div class="all_skills">


                    <!-- C++ -->
                    <div class="skill_details">
                        <div class="skill_icon">
                            <i class="fab fa-cuttlefish fa-3x" style="color:#6BBF46">++</i>
                        </div>
                        <div class="skill_desc">
                            <p style="color:#6BBF46">C++</p>
                        </div>
                    </div>

                    <!-- c# -->
                    <div class="skill_details">
                        <div class="skill_icon">
                            <i class="fab fa-cuttlefish fa-3x" style="color:#6BBF46">#</i>
                        </div>
                        <div class="skill_desc">
                            <p style="color:#6BBF46">C#</p>
                        </div>
                    </div>

                    <!-- sql -->
                    <div class="skill_details">
                        <div class="skill_icon">
                            <i class="fas fa-database fa-3x" style="color:#EEAD31"></i>
                        </div>
                        <div class="skill_desc">
                            <p style="color:#EEAD31">SQL</p>
                        </div>
                    </div>

                    <!-- nosql -->
                    <div class="skill_details">
                        <div class="skill_icon">
                            <i class="fas fa-database fa-3x" style="color:#EEAD31"></i>
                        </div>
                        <div class="skill_desc">
                            <p style="color:#EEAD31">noSQL</p>
                        </div>
                    </div>

                    <!--embedded -->
                    <div class="skill_details">
                        <div class="skill_icon">
                            <i class="fas fa-microchip fa-3x" style="color:#45AFF4"></i>
                        </div>
                        <div class="skill_desc">
                            <p style="color:#45AFF4">Embedded</p>
                        </div>
                    </div>

                    <!--linuz -->
                    <div class="skill_details">
                        <div class="skill_icon">
                            <i class="fab fa-linux fa-3x" style="color:#5FD4F4"></i>
                        </div>
                        <div class="skill_desc">
                            <p style="color:#5FD4F4">Linux</p>
                        </div>
                    </div>

                    <!--git -->
                    <div class="skill_details">
                        <div class="skill_icon">
                            <i class="fab fa-git-square fa-3x" style="color:#E44D32"></i>
                        </div>
                        <div class="skill_desc">
                            <p style="color:#E44D32">Git</p>
                        </div>
                    </div>

                    <!--html -->
                    <div class="skill_details">
                        <div class="skill_icon">
                            <i class="fab fa-html5 fa-3x" style="color:#DE4B30"></i>
                        </div>
                        <div class="skill_desc">
                            <p style="color:#DE4B30">HTML5</p>
                        </div>
                    </div>

                    <!--css -->
                    <div class="skill_details">
                        <div class="skill_icon">
                            <i class="fab fa-css3-alt fa-3x" style="color:#42A4DA"></i>
                        </div>
                        <div class="skill_desc">
                            <p style="color:#42A4DA">CSS3</p>
                        </div>
                    </div>

                    <!--js -->
                    <div class="skill_details">
                        <div class="skill_icon">
                            <i class="fab fa-js fa-3x" style="color:#F0D92F"></i>
                        </div>
                        <div class="skill_desc">
                            <p style="color:#F0D92F">JavaScript</p>
                        </div>
                    </div>

                    <!--node.js -->
                    <div class="skill_details">
                        <div class="skill_icon">
                            <i class="fab fa-node fa-3x" style="color:#F0D92F"></i>
                        </div>
                        <div class="skill_desc">
                            <p style="color:#F0D92F">node.js</p>
                        </div>
                    </div>

                    </br>
                    <h2>Education</h2>
                    <div class="about_text">

                        <div class="edu_degree">
                            <p>Software Engineering Technology</p>
                        </div>
                        <div class="edu_extra">
                            <p>Co-Op Student</p>
                        </div>

                        <div class="edu_school">
                            <p>Conestoga College</p>
                        </div>
                        <div class="edu_status">Curently Enrolled</p>
                        </div>
                        </br>
                        <div class="edu_degree">
                            <p>Bachelor of Science</p>
                        </div>
                        <div class="edu_extra">
                            <p>Major in Physics, Minor in Chemistry</p>
                        </div>
                        <div class="edu_school">
                            <p>Mount Allison University</p>
                        </div>
                        <div class="edu_status"> Graduated 2015</p>
                        </div>

                    </div>

            </section>
        </div>

        <!--maybe add a modal for each project? -->
        <section id="portfolio_section">

            <h2 class="section_name">Projects</h2>

            <div class="projects">

                <div class="project_wrapper">

                    <div class="project_tile">
                        <div>
                            <img id="" class="project_pic" src="assets/img/simplehttpwebserver.jpg" alt="Project_Screenshot">
                        </div>
                        <div class="project_info">
                            <div class="project_words">
                                <h3>SimpleHttpWebServer</h3>
                                <p>This is a Web Server made in C#. The user chooses the root folder for the server, and
                                    serve html, text and image files.</p>
                            </div>
                            <div class="project_links">
                                <a href="https://github.com/joel-smith/SimpleHttpWebServer/" target="_blank">GitHub</a>
                            </div>
                        </div>
                    </div>

                    <div class="project_tile">
                        <div>
                            <img id="" class="project_pic" src="assets/img/c3-http.jpg" alt="Project_Screenshot">
                        </div>
                        <div class="project_info">
                            <div class="project_words">
                                <h3>c3-http</h3>
                                <p>This is a Web Server made exclusively in node.js, currently hosted on Heroku and
                                   demonstrates serving html, text and images.</p>
                            </div>
                            <div class="project_links">
                                <a href="https://github.com/joel-smith/c3-http/" target="_blank">GitHub</a>
                                <a href="https://calm-badlands-66492.herokuapp.com/" target="_blank">Heroku</a>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="modal-content">
                        <span class="close">&times;</span>
                        <p>Some text in the Modal..</p>
                    </div> -->

                    <div class="project_tile">
                        <div>
                            <img class="project_pic" src="assets/img/chatchat.jpg" alt="Project_Screenshot">
                        </div>
                        <div class="project_info">
                            <div class="project_words">
                                <h3>Chat Chat</h3>
                                <p>This is a multi-threaded chatroom program in C#, allowing users to speak to each
                                    other in a chatroom across the network</p>
                            </div>
                            <div class="project_links">
                                <a href="https://github.com/joel-smith/chatchat" target="_blank">GitHub</a>
                            </div>
                        </div>
                    </div>

                    <div class="project_tile">
                        <div>
                            <img class="project_pic" src="assets/img/FakePad.jpg" alt="Project_Screenshot">
                        </div>
                        <div class="project_info">
                            <div class="project_words">
                                <h3>FakePad</h3>
                                <p>This is a clone of Notepad using C# and WPF, featuring full file open/save capabilties and basic formatting.</p>
                            </div>
                            <div class="project_links">
                                <a href="https://github.com/joel-smith/FakePad" >GitHub</a>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="project_tile">
                        <div>
                            <img class="project_pic" src="assets/img/placeholder.jpg" alt="Project_Screenshot">
                        </div>
                        <div class="project_info">
                            <div class="project_words">
                                <h3>Low Level Snake</h3>
                                <p>This is game on an ARM Cortex M using the C language and an 8x8 LED matrix.</p>
                            </div>
                            <div class="project_links">
                                <a href="#" target="_blank">Github</a>
                            </div>
                        </div>
                    </div> -->

                    <div class="project_tile">
                        <div>
                            <img class="project_pic" src="assets/img/homepage.jpg" alt="Project_Screenshot">
                        </div>
                        <div class="project_info">
                            <div class="project_words">
                                <h3>Portfolio Homepage</h3>
                                <p>This website you here, crafted with HTML, CSS, PHP and JS. Designed to be extensible
                                    and always under improvement.</p>
                            </div>
                            <div class="project_links">
                                <a href="https://github.com/joel-smith/homepage" target="_blank">Github</a>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="project_tile">
                        <div>
                            <img class="project_pic" src="assets/img/placeholder.jpg" alt="Project_Screenshot">
                        </div>
                        <div class="project_info">
                            <div class="project_words">
                                <h3>HomeLab</h3>
                                <p>My personal homelab has been growing for years, featuring modern and vintage
                                    equipment.</p>
                            </div>
                            <div class="project_links">
                                <a href="#" target="_blank">Lab Scope</a>
                            </div>
                        </div>
                    </div> -->

                    <div class="project_tile">
                        <div>
                            <img class="project_pic" src="assets/img/InnovarDisplay.jpeg" alt="Project_Screenshot">
                        </div>
                        <div class="project_info">
                            <div class="project_words">
                                <h3>Innovar VR</h3>
                                <p>Virtual Reality tourism product esign and presentation for a hackathon/pitch
                                    competition.</p>
                            </div>
                            <div class="project_links">
                               <!-- <a href="#" target="_blank">GitHub</a>-->
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <section id="contact_section">
            <h2>Contact</h2>
            <div class="contact_desc">
                <p>Interested in working on new projects and discussing new opportunities, drop me a line in the
                    form below or one of the links.</p>
            </div>
            </br>
            <div class="all_contacts">

                <!--GITHUB-->
                <div class="contact_details">
                    <div class="icon">
                        <a href="https://www.github.com/joel-smith/" target="_blank"><i class="fab fa-github fa-3x"
                                style="color:#0378A6"></i></a>
                    </div>
                    <div class="desc">
                        <a href="https://www.github.com/joel-smith/" target="_blank">GitHub</a>
                    </div>
                </div>


                <!-- LINKEDIN -->
                <div class="contact_details">
                    <div class="icon">
                        <a href="https://www.linkedin.com/in/joelcraigsmith/" target="_blank"><i
                                class="fab fa-linkedin fa-3x" style="color:#0378A6"></i></a>
                    </div>
                    <div class="desc">
                        <a href="https://www.linkedin.com/in/joelcraigsmith/" target="_blank">LinkedIn</a>
                    </div>
                </div>

            </div>

            <!--Contact Form, sends me an email to my own domain emails -->
            <div class="formContainer">
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" id="contact_form">

                    <div class="row">
                        <div class="col-25">

                            <label for="name">Name:</label>
                        </div>
                        <div class="col-75">
                            <input name="name" type="text" maxlength="150" required />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="email">Email:</label>
                        </div>

                        <div class="col-75">
                            <input name="email" type="email" required />
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
                
                //this function removes whitespace, treats html special chars and removes any slashes
                function treat_input($data) {
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                }

                //did we get here from POST-ing??
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    
                    //apply treatment for security
                    $name = treat_input($_POST['name']);
                    $visitor_email = treat_input($_POST['email']);
                    $message = treat_input($_POST['message']);
                }

                  
	        $email_from = 'contact@joelcs.net'; //has to be from my domain

	        $email_subject = "$name $message";

	        $email_body = "You have received a new message from the user $name.\n".
                            "Here is the message:\n $message";

            $to = "contact@joelcs.net";

            $headers = "From: $email_from \r\n";

            $headers .= "Reply-To: $visitor_email \r\n";

            //server will only send email if there is content
            if (!empty($message) && !empty($visitor_email) && !empty($name)) {
                mail($to,$email_subject,$email_body,$headers);
            }

            ?>
        </section>
    </main>

</body>

</html>