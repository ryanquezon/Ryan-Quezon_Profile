<!DOCTYPE html>
<html lang="en">
<head>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile ni Ryan</title>
    <link rel="stylesheet" href="profile_style.css">
    <script src="https://kit.fontawesome.com/7e5cb252d5.js" crossorigin="anonymous"></script>
</head>
<body>
<div id="header">
    <div class="container">
        <div class="header-text">
            <h1>Good day!<br>My name is <span>Ryan</span></h1>
        </div>
    </div>
</div>


<div id="about">
    <div class="container">
        <div id="row">
            <div class="about-col-1">
                <img src="user.jpg">
            </div>
            <div class="about-col-2">
                <h1 class="sub-title">About Me</h1>
                <p>Meet Ryan, a vibrant and energetic student who effortlessly balances the worlds of computer games and basketball
                    with boundless enthusiasm. When not immersed in the virtual realms of gaming, Ryan can be found on a basketball
                    court, showcasing a skill set that mirrors the strategic prowess displayed in the digital landscapes. The love
                    for computer games serves as a dynamic counterpart to the physicality of basketball, creating a well-rounded and
                    versatile individual who thrives on both the pixelated challenges of gaming and the adrenaline-fueled intensity of
                    the basketball court.
                </p>
                <div class="tab-titles">
                    <p class="tab-links active-link" onclick="opentab('skills')">Skills</p>
                    <p class="tab-links" onclick="opentab('achievements')">Achievements</p>
                    <p class="tab-links" onclick="opentab('certifications')">Certifications</p>
                </div>
                <div class="tab-contents active-tab" id="skills">
                    <ul>
                        <li><span>App Development</span><br>Building Museum Booster apps</li>
                        <li><span>Web Development</span><br>Developing and designing websites</li>
                        <li><span>UI/UX</span><br>Desinging mobile application and websites</li>
                    </ul>
                </div>
                <div class="tab-contents" id="achievements">
                    <ul>
                        <li><span>Escuela De Sophia of Caloocan Inc. (2020-2021)</span><br>Bronze Seal Bearer</li>
                        <li><span>National University - Fairview (2022-2023)</span><br>Dean's Lister - Second Honor</li>
                    </ul>
                </div>
                <div class="tab-contents" id="certifications">
                    <ul>
                        <li><span>2022</span><br>PowerPoint Essential Training</li>
                        <li><span>2022</span><br>Excel Essential Training</li>
                        <li><span>2022</span><br>Word Essential Training</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="services">
    <div class="container">
        <h1 class="sub-title">Services</h1>
        <div class="services-list">
            <div>
                <i class="fa-solid fa-camera-retro"></i>
                <h2>Photo Editing</h2>
                <p>Elevate your photos with personalized precision! Experience top-notch
                    photo editing services. From flawless retouching to creative enhancements,
                    entrust your memories to a dedicated student for stunning results that
                    reflect your unique style. Unleash the full potential of your images.</p>
            </div>
            <div>
                <i class="fa-solid fa-pen-fancy"></i>
                <h2>App Design</h2>
                <p>Experience bespoke app design tailored just for you! Prepare to bring your
                    vision to life with personalized precision. From user-friendly interfaces
                    to visually stunning graphics, trust in the expertise of a single dedicated student.
                    Elevate your app's aesthetics and functionality with a touch that reflects your unique
                    brand and user experience goals.</p>
            </div>
            <div>
                <i class="fa-solid fa-video"></i>
                <h2>Video Editing</h2>
                <p>Unlock the full potential of your footage with my exclusive video editing
                    service, meticulously curated by a dedicated individual. From seamless cuts
                    to captivating transitions, my skill ensures your story is told with precision
                    and flair. Experience a personalized touch that brings your vision to life,
                    frame by frame. Elevate your videos for a cinematic and polished final product.</p>
            </div>
        </div>
    </div>
</div>

<div id="portfolio">
    <div class="container">
        <h1 class="sub-title">Portfolio</h1>
        <div class="work-list">
            <div class="work">
                <img src="1.png">
                <div class="layer">
                    <h3>Museum Wander App</h3>
                    <p>The app that promotes and highlights the
                        museums around Quezon City and Manila.</p>
                </div>
            </div>
            <div class="work">
                <img src="2.png">
                <div class="layer">
                    <h3>True Hygge App</h3>
                    <p>The app that can be used to reserve a spa reservation
                        and the details will automatically show to your calendar.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="contact">
    <div class="container">
        <div class="contact">
            <h1 class="sub-title">Contact</h1>
            <p><i class="fa-solid fa-envelope"></i>ryansheesh499@gmail.com</p>
            <div class="social-icons">
                <a href="https://www.facebook.com/ryanemmanuel.quezon"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://www.instagram.com/ryanquezonn/"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://github.com/ryanquezon/Ryan-Quezon-Profile"><i class="fa-brands fa-github"></i></a>
            </div>
        </div>
    </div>
</div>


<div id="comment-section">
    <h2>Leave a comment for me to be better in designing and coding :> </h2>
    <form action="comment.php" method="POST">
        <label for="commenter_name">Your Name:</label><br>
        <input type="text" id="commenter_name" name="commenter_name" required><br>
        <label for="comment_text">Comment:</label><br>
        <textarea id="comment_text" name="comment_text" rows="4" required></textarea><br>
        <button type="submit">Submit</button>
    </form>
</div>



<div id="logout">
    <div class="container">
        <button onclick="logout()">Logout</button>
    </div>
</div>

<script>
        function logout() {
            var xhr = new XMLHttpRequest();
            xhr.open("GET", "logout.php", true);
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    window.location.href = "login.php";
                }
            };
            xhr.send();
        }
    </script>

<script>
    var tablinks = document.getElementsByClassName("tab-links");
    var tabcontents = document.getElementsByClassName("tab-contents");

    function opentab(tabname) {
        for (tablink of tablinks) {
            tablink.classList.remove("active-link");
        }
        for (tabcontent of tabcontents) {
            tabcontent.classList.remove("active-tab");
        }
        event.currentTarget.classList.add("active-link");
        document.getElementById(tabname).classList.add("active-tab");
    }


    
</script>

</body>
</html>
