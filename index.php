<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Personal Portfolio Website</title>
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div id="header">
        <div class="container">
            <nav>
                <img src="images/font.png" class="logo">
                <ul id="sidemenu">
                    <li><a href="#header">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <i class="fa fa-times-circle" onclick="closemenu()"></i>
                </ul>
                <i class="fa fa-bars" onclick="openmenu()"></i>
            </nav>
            <div class="header-text">
                <p class="data-analyst"> Data Analyst</p>
                <h1> Hi, I'm <span>Acinta</span><br>Sofiya From Chennai</h1>
            </div>
        </div>
    </div>

    <!-- About -->
    <div id="about">
        <div class="container">
            <div class="row">
                <div class="about-col-1">
                  <img src="images/porto.jpg">
                </div>
                <div class="about-col-2">
                    <h1 class="sub-title">About Me</h1>
                    <p>  Data virtuoso skilled in unraveling complex
                         datasets to reveal strategic insights. Adept at transforming 
                         raw information into actionable plans.
                          Let's decode the data puzzle and pave the way for 
                          informed decision-making!
                    </p>
                    <div class="tab-titles">
                       <p class="tab-links active-link" onclick="opentab('skills')">Skills</p>
                       <p class="tab-links" onclick="opentab('Experience')">Experience</p>
                       <p class="tab-links" onclick="opentab('Education')">Education</p>
                    </div>
                    <div class="tab-contents active-tab" id="skills">
                       <ul>
                         <li><span>SQL</span><br>
                            Skilled in SQL with expertise in database management and query optimization. Proficient in 
                            writing complex queries and ensuring database efficiency.</li>
                         <li><span>Machine Learning</span><br>Proficient in machine learning, adept at developing models and algorithms to extract valuable insights from data.
                             Skilled in Python, TensorFlow, and other ML libraries for predictive analysis and pattern recognition.</li>
                         <li><span>Python</span><br>Proficient in Python programming with expertise in developing robust and scalable applications. Experienced in leveraging Python libraries for 
                            data analysis, web development, and automation tasks.</li>
                         <li><span>EDA</span><br>Experienced in Exploratory Data Analysis (EDA), proficient in techniques to uncover patterns, trends, and relationships in data. Skilled in using 
                            visualization tools to communicate insights effectively.</li>
                         <li><span>Data Analysis</span><br>
                            Skilled in data analysis, proficient in extracting meaningful insights from complex datasets. Experienced in statistical analysis, data visualization, and storytelling with data.</li>
                       </ul>
                    </div>
                    <div class="tab-contents" id="Experience">
                        <ul>
                          <li><span>July 2023</span><br>
                            Infinity Cosmos Technologies<br>
                            Full stack Development Intern</li>
                          <li><span>Jan 2024</span><br>
                            Retech Solutions Pvt Ltd<br>
                            Artificial Intelligence Intern
                           </li>
                            <li><span>Feb 2024</span><br>
                                Retech Solutions Pvt Ltd<br>
                                Website Developer Intern</li>
                         </ul>
                    </div>
                    <div class="tab-contents" id="Education">
                        <ul>
                          <li><span>2022-2025</span><br>
                            Imarticus Learning<br>
                            P.G in Data Analytics and Machine Learning<br>
                            Current Tier-T2
                          </li>
                          <li><span>2021-2025</span><br> B.E-CSE <br>
                            Jeppiaar Engineering College,Affiliated to Anna University, Chennai.<br>
                            Current CGPA-8.26
                          </li>
                          <li><span>2020-2021</span><br>Class 12th<br>
                            Velammal Vidhyashram<br>
                            Grade-90.8% </li>
                          <li><span>2018-2019</span><br>
                            Class 10th<br>
                            Maharishi Vidya Mandir Senior Secondary School<br>
                            Grade-93.6%
                          </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Services -->
    <div id="services"> 
        <div class="container">
            <h1 class="sub-title">Certifications</h1>
            <br>
            <div class="services-list">
                <div>
                    <i class="fab fa-searchengin"></i>
                    <h2>Basics of EDA with Python</h2>
                    <p>Mastered the fundamentals of Exploratory Data Analysis (EDA) using Python with Great Learning. Acquired essential skills for analyzing and visualizing data effectively, enabling informed decision-making.</p>
                    <a href="#">Learn more</a>
                </div>
                <div>
                    <i class="fas fa-laptop-code"></i>
                    <h2>Machine Learning Projects</h2>
                    <p>Mastered machine learning projects through Great Learning, gaining hands-on experience in applying algorithms to real-world data. Explored regression, classification, and clustering techniques to solve diverse problems. Developed expertise in data preprocessing, model building, and evaluation, enhancing proficiency in machine learning.</p>
                    <a href="#">Learn more</a>
                </div>
                <div>
                    <i class="fab fa-rocketchat"></i>
                    <h2>Exploring Chatbots</h2>
                    <p>Exploring chatbots through Skillsoft, gaining insights into building conversational AI systems. Learning about natural language processing (NLP), dialogue management, and integration with platforms. Developing skills to create effective chatbot solutions for various applications and industries.</p>
                    <a href="#">Learn more</a>
                </div>
            </div>
            <div class="services-list">
                <div>
                    <i class="fas fa-robot"></i>
                    <h2>The Role of Chatgpt in Shaping Our Future</h2>
                    <p> Explored ChatGPT's transformative potential in various sectors, including ethical implications and future trends. Acquired practical skills in deploying ChatGPT solutions and understanding its societal impact. </p>
                    <a href="#">Learn more</a>
                </div>
                <div>
                    <i class="fas fa-cogs"></i>
                    <h2>OOPS in Python</h2>
                    <p>Explored object-oriented programming (OOP) principles in Python through concise code examples. Covered key concepts like classes, objects, inheritance, encapsulation, and polymorphism. Acquired practical skills in designing robust and modular Python applications.</p>
                    <a href="#">Learn more</a>
                </div>
                <div>
                    <i class="fas fa-cloud"></i>
                    <h2>Oracle Cloud Infrastructure</h2>
                    <p>Demonstrates proficiency in deploying and managing applications on Oracle's cloud platform. Covers key concepts including compute, storage, networking, and security within OCI. Validates skills in utilizing OCI services for scalable and reliable cloud solutions.</p>
                    <a href="#">Learn more</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio -->
    <div id="portfolio">
    <div class="container">
        <br> <br> <br> 
        <h1 class="sub-title">Projects</h1>
        <div class="work-list">
            <div class="work">
                <img src="images/portyy1.jpg">
                <div class="layer">
                    <h3>Hospital management System</h3>
                    <p>Developed a Hospital Management System from scratch using HTML, CSS, and PHP.</p>
                    <a href="https://github.com/Sofiyashaw/WebApplication-MagesticHospitals"><i class="fas fa-link"></i></a>
                </div>
            </div>
            <div class="work">
                <img src="images/portyy2.jpg">
                <div class="layer">
                    <h3>Loan Status Prediction</h3>
                    <p>The project focused on utilizing machine learning techniques for loan status prediction.</p>
                    <a href="https://github.com/Sofiyashaw/Projects--Machine-Learning/blob/main/Loan_Status_Prediction.ipynb"><i class="fas fa-link"></i></a>
                </div>
            </div>
            <div class="work">
                <img src="images/portyy3.jpg">
                <div class="layer">
                    <h3>House Price Prediction</h3>
                    <p>Leveraging data-driven insights, I developed a model to accurately forecast house prices based on various features and amenities.</p>
                    <a href="https://github.com/Sofiyashaw/Projects--Machine-Learning/blob/main/Property_Price_Prediction.ipynb"><i class="fas fa-link"></i></a>
                </div>
            </div>
        </div>
        
        <!-- New row for the new projects -->
        <div class="work-list">
            <div class="work">
                <img src="images/porty4.jpg">
                <div class="layer">
                    <h3>Stay Alert Analysis</h3>
                    <p>Utilizing data analytics to monitor and enhance safety measures for public spaces.</p>
                    <a href="https://github.com/Sofiyashaw/Projects--Machine-Learning"> <i class="fas fa-link"></i></a>
                </div>
            </div>
            <div class="work">
                <img src="images/porty5.jpg">
                <div class="layer">
                    <h3>My Portfolio</h3>
                    <p>My portfolio project highlights personal accomplishments, skills, and experiences, demonstrating expertise in data analytics, ML, and software development.</p>
                    <a href="https://github.com/Sofiyashaw/myportfolio"> <i class="fas fa-link"></i></a>
                </div>
            </div>
            <div class="work">
                <img src="images/porty6.jpg">
                <div class="layer">
                    <h3>Mobile Data</h3>
                    <p>The mobile data project utilized K-Nearest Neighbors (KNN) algorithm to analyze usage patterns and optimize network performance for enhanced service.</p>
                    <a href="https://github.com/Sofiyashaw/Projects--Machine-Learning"><i class="fas fa-link"></i></a>
                </div>
            </div>
        </div>
                <!-- End of New Projects -->
            </div>
        </div>
    </div>

    <!-- Contact -->
    <div id="contact">
        <div class="container">
            <div class="row">
                <div class="contact-left">
                    <br>
                    <br>
                    <h1 class="sub-title"><br>Contact Me</h1>
                    <p><i class="fa fa-paper-plane"></i>acintasofiya0801@gmail.com</p>
                    <div class="social-icons">
                        <a href="https://www.linkedin.com/in/acinta-sofiya-66651723b"><i class="fab fa-linkedin"></i></a>
                        <a href="https://www.instagram.com/sofiyaaa_08?igsh=aGR0NzB0eWJwbGVw"><i class="fab fa-instagram"></i></a>
                        <a href="https://github.com/Sofiyashaw?tab=overview&from=2024-05-01&to=2024-05-14"><i class="fab fa-github"></i></a>
                    </div>
                    <br>
                    <a href="images/Sofiya.pdf" download class="btn btn2">Download CV</a>
                </div>
                <div class="contact-right">
                    <br>
                    <form method="post" action="submit_form.php" id="contactForm">
                        <br> <br> <br>
                        <input type="text" name="Name" placeholder="Your Name" required>
                        <input type="email" name="Email" placeholder="Your Email" required>
                        <textarea name="Message" rows="6" placeholder="Your Message"></textarea>
                        <button type="submit" name="submit" class="btn btn-2">Submit</button>
                        <br>
                        <br>
                    </form>
                    <div id="responseMessage"></div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <p>Copyright @ Sofiya . Made with <i class="fa fa-heart" aria-hidden="true"></i> by Easy Tutorials</p>
        </div>
    </div>

    <script>
        var tablinks = document.getElementsByClassName("tab-links");
        var tabcontents = document.getElementsByClassName("tab-contents");

        function opentab(tabname){
               for (tablink of tablinks){
                   tablink.classList.remove("active-link");
               }
               for (tabcontent of tabcontents){
                   tabcontent.classList.remove("active-tab");
               }
               event.currentTarget.classList.add("active-link");
               document.getElementById(tabname).classList.add("active-tab");
        }
    </script>
    <script>
        var sidemenu = document.getElementById("sidemenu");
        function openmenu(){
              sidemenu.style.right = "0";
        }
        function closemenu(){
              sidemenu.style.right = "-200px";
        }
        function resetForm() {
            document.getElementById("contactForm").reset();
        }
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("contactForm").addEventListener("submit", function(event) {
                event.preventDefault(); // Prevent default form submission
                
                // Get form data
                var formData = new FormData(document.getElementById("contactForm"));

                // Send form data asynchronously
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "submit_form.php", true);
                xhr.onreadystatechange = function() {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        // Handle response
                        var response = JSON.parse(xhr.responseText);
                        if (response.success) {
                            // Display success message
                            document.getElementById("responseMessage").innerHTML = "Message sent successfully!";
                            // Reset the form immediately
                            resetForm();
                        } else {
                            // Display error message
                            document.getElementById("responseMessage").innerHTML = "Error: " + response.message;
                        }
                    }
                };
                xhr.send(formData);
            });

            // Function to reset the form
            function resetForm() {
                document.getElementById("contactForm").reset();
            }
        });
    </script>
</body>
</html>

