<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Project" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script
      src="https://kit.fontawesome.com/fa62c117c7.js"
      crossorigin="anonymous"
    ></script>
    
    <title>Quest Compass</title>
    <link rel="stylesheet" href="styles.css"/>
    <script defer src="source.js"></script>

</head>
<style>
    #cal {
      width: 200px;
  padding: 8px;
  font-size: 16px;
  border: 1px solid #ccc;
  border-radius: 4px;
  background-color: orange; /* Add your desired background color */
  color: black; /* Add your desired text color */

}
.btn {
  position: absolute;
  top: 180px;
  left: 45%;
  transform: translate(-50%, -50%);
  padding: 10px 20px;
  background-color: #ff8e09;
  color: white;
  border: none;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 4px;
  width: 100px;
  height: 45px;
}
    </style>

<body>
<!--_____________________________________Navbar____________________________________-->
     <header>
       
        <nav>
            <ul class="navbar">
                <li><a href="#Home">Home</a></li>
                <li><a href="#Destinations">Destinations</a></li>
                <li><a href="#Contact">Contact us</a></li>
                <li><button class="plan"><a href="#select_date">Plan a trip</a></button></li>
            </ul>
        </nav>
        <div class="line">
        </div>

    </header>


<!--____________________________________HeroSection__________________________________-->
<main>
    <div class="content hidden" >
        <p>The world out there is waiting</p>
        <h1><span class="website_name">Quest Compass</span></h1>
        <ul class="main-txts">
            <li><h2>A tool to help you plan your trips</h2></li>
            <li><h2>Quickly and efficently</h2></li>
        </ul>
    </div>
</main>
<div class="start">
    <button class="start_b">
        <li><a href="#select_date">Start exploring </a></li>
    </button>
</div>

<!--_____________________________________Date___________________________________________-->
<section id="select_date" class="select_date hidden" >
    <div class="date">
        <h1>Select a date</h1>

        <form action="find.php">
  <label for="cal"></label>
  <input type="date" id="cal" name="month">
  <input type="submit" class='btn'>
</form>

    
        
    </div>
</section>

<!--_________________________________Best_Categories_______________________________________-->
<section id="Destinations" class="best hidden">
    <h2 class="best-title">Top Travel Destinations</h2>
    <div class="flex-container1">
        <div class="flex-items item1">
            <h3>Ooty</h3>
            <h4>I made many projects on front end web development using html , css, javascript</h4>
            <div class="start">
                <button class="know_more">
                    <li><a href="">Find out </a></li>
                </button>  
            </div>
        </div>

        <div class="flex-items item2">
            <h3>Pondicherry</h3>
            <h4>I made many projects on front end web development using html , css, javascript</h4>
            <div class="start">
                <button class="know_more">
                    <li><a href="">Find out </a></li>
                </button>  
            </div>
        </div>

        <div class="flex-items item3">
            <h3>Mumbai</h3>
            <h4>I made many projects on front end web development using html , css, javascript</h4>
            <div class="start">
                <button class="know_more">
                    <li><a href="">Find out </a></li>
                </button>  
            </div>
        </div>

    </div>
    <div class="flex-container2">
        <div class="flex-items item4">
            <h3>Goa</h3>
            <h4>I made many projects on front end web development using html , css, javascript</h4>
            <div class="start">
                <button class="know_more">
                    <li><a href="">Find out </a></li>
                </button>  
            </div>
        </div>

        <div class="flex-items item5">
            <h3>Kerala</h3>
            <h4>I made many projects on front end web development using html , css, javascript</h4>
            <div class="start">
                <button class="know_more">
                    <li><a href="">Find out </a></li>
                </button>  
            </div>
        </div>

        <div class="flex-items item6">
            <h3>Manali</h3>
            <h4>I made many projects on front end web development using html , css, javascript</h4>
            <div class="start">
                <button class="know_more">
                    <li><a href="">Find out </a></li>
                </button>  
            </div>
        </div>

    </div>
    
</section>

<!--________________________________________Contactme___________________________________-->
<section class="contact hidden" id="Contact">
    <h2 class="contact_title">Contact us</h2>
    <div class="contact-form">
    <form action="https://formsubmit.co/shivanitripurari07@gmail.com" method="POST">

       <div class="form-group">
        <label for="name"> <i class="fas fa-user"></i> Your Name
            <input id="name" type="text" required>
        </label>
       </div>
       
       <div class="form-group">
        <label for="email"> <i class="fas fa-envelope"> </i> Your e-mail
            <input id="email" type="email" required>
        </label>
       </div>
       
       <div class="form-group">
        <label for="message"> <i class="fas fa-pen"></i> Your message
            <textarea id="message" rows="4"></textarea>
        </label>
       </div>
    
       <button type="submit">Send <i class="fas fa-solid fa-paper-plane fa-bounce"></i></button>

    </form>
    </div>
</section>

<!--__________________________________________Socials_______________________________________-->

<section class="socials hidden" id="Socials">
    <div class="line">
    </div>
    <div class="social_menu">
        <ul>
            <li><a href="https://www.linkedin.com/in/shivani-tripurari-a7962621b/"><i class=" fa fa-linkedin"></i></a></li>
            <li><a href="https://www.linkedin.com/in/shivani-tripurari-a7962621b/"><i class=" fa fa-instagram"></i></a></li>
            <li><a href="https://github.com/shivani-tripurari"><i class=" fa fa-github"></i></a></li>
            <li><a href="https://dribbble.com/shivtrip07"><i class=" fa fa-dribbble"></i></a></li>
        </ul>
    </div>
    <div class="footer hidden">
        <p> &#169 Quest Compass 2023</p>
        <br>
        <p>Made with <i class="fas fa-heart"></i> from scratch</p>
    </div>
</section>


</body>
</html>
