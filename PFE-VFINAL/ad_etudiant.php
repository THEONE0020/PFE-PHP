<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EST - School Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="imgs\logo16.png" rel="icon" >

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">


    <link rel="stylesheet" href="../Bootstrap-fontAw/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../Bootstrap-fontAw/css/all.min.css" />
    <link rel="stylesheet" href="css/style copy.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Sigmar&family=Yellowtail&display=swap"
      rel="stylesheet"
    />
    <!-- Load jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Load Select2 -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>








     <!-- styling the student service -->
     <style>
  .sidebar {
  position: fixed;
  top: 50%;
  left: 0;
  transform: translateY(-50%);
  width: 250px;
  height: 55%;
  background-color: #F3525A;
  padding: 2em;
  box-shadow: 0 5px 15px rgb(0, 0, 0);
  border-top-right-radius: 30px;
  border-bottom-right-radius: 30px;
}
.sidebar img {
  display: block;
  width: 100%;
  max-width: 200px;
  height: 84px;
  margin: 0 auto 1.5em;
  border-radius: 25%;
  overflow: hidden;
}

.sidebar img[src="imgs/images.jpg"] {
  /* Adjust the border-radius based on the height of the image */
  border-radius: 21%;
}


.sidebar h2 {
  font-size: 1.5em;
  color: #F8F8F8;
  margin-bottom: 0.5em;
}

.sidebar p {
  font-size: 1.1em;
  color: #FFFFFF;
  margin-bottom: 0.5em;
}




/* Apply a reset to the default styles of HTML elements */
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

/* Apply some global styles */
body {
  background-color: #f0f0f0;
  font-family: Arial, sans-serif;
}

h1 {
  font-size: 2.5em;
  text-align: center;
  margin-top: 3em;
  margin-bottom: 1.5em;
  color: #584444;
  text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.4);
  margin-right: 1px;
}

form {
  max-width: 700px;
  max-height: 1170px;
  margin: 0 auto;
  background-color: #fff;
  padding: 2em;
  border-radius: 5px;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
  
  margin-right: 130px;
}

/* Style the form labels */
label {
  display: block;
  margin-bottom: 0.5em;
  font-size: 1.2em;
  color: #333;
}

/* Style the form inputs */
input[type="text"],
input[type="email"],
input[type="tel"],
textarea {
  display: block;
  width: 100%;
  padding: 0.5em;
  margin-bottom: 1.5em;
  border: none;
  border-radius: 5px;
  font-size: 1.1em;
  color: #333;
  background-color: #f0f0f0;
  transition: box-shadow 0.3s ease-in-out;
}

input[type="text"]:focus,
input[type="email"]:focus,
input[type="tel"]:focus,
textarea:focus {
  outline: none;
  box-shadow: 0 0 5px rgba(243, 82, 90, 0.6);
}

/* Style the submit button */
input[type="submit"] {
  display: block;
  margin-top: 2em;
  margin-left: auto;
  margin-right: auto;
  background-color: #F3525A;
  color: #fff;
  padding: 1em 2em;
  border: none;
  border-radius: 5px;
  font-size: 1.1em;
  text-align: center;
  text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.2);
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
  cursor: pointer;
  transition: background-color 0.3s ease-in-out;
}

input[type="submit"]:hover {
  background-color: #E43F49;
}

/* Style the form feedback messages */
.form-message {
  font-size: 1.1em;
  margin-top: 1em;
  padding: 0.5em 1em;
  border-radius: 5px;
  text-align: center;
  color: #fff;
  text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.2);
}

.form-success {
  background-color: #43A047;
}

.form-error {
  background-color: #F44336;
}
</style>
    </style>     
</head>

<div>



               <!-- Navbar Start -->
               <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
                <a href="administration.html" class="navbar-brand p-0">
                  <h1 class="m-0 text-uppercase"> <i><img src="imgs/logosc.png" height="40" top:20; > </i>EST BENI MELLAL</h1>
              </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 me-n3">
                        <a href="administration.html" class="nav-item nav-link ">Home</a>
                        <a href="ad_etudiant.html" class="nav-item nav-link active">Etudiant</a>
                        <a href="listeclass.html" class="nav-item nav-link"> Classes </a>

                        <a href="ad_emploi.html" class="nav-item nav-link"> Emplois </a>

                        <a href="Resultat.html" class="nav-item nav-link"> Résultats </a>
                        <a href="Calendrier.html" class="nav-item nav-link"> Calendrier </a>

                        <a href="list-profs.html" class="nav-item nav-link "> Professeurs </a>
                        <a href="contact.html" class="nav-item nav-link"> Contact <i class="fa-solid fa-comment far"></i></a>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->
    
    <!-- titvbar Start -->
      
     <!-- titbar End -->
     <div class="sidebar">
        <img src="imgs/kk2.jpg"  >
        <h2>User Information</h2>
        <p>Name: John Doe</p>
        <p>Email: john.doe@example.com</p>
        <p>Phone: 555-555-5555</p>
      </div>
      
     <h1>Ajouter un nouveau etudiant </h1>
     <form action="add_student.php" method="post">
       <label for="number">Student Number:</label>
       <input type="text" id="number" name="number" required>
     
       <label for="name">Student Name:</label>
       <input type="text" id="name" name="name" required>
     
       <label for="address">Address:</label>
       <textarea id="address" name="address" required></textarea>
     
       <label for="class">Class:</label>
       <input type="text" id="class" name="class" required>
     
       <label for="specialite">Specialite:</label>
       <input type="text" id="specialite" name="specialite" required>
     
       <label for="phone">Phone Number:</label>
       <input type="tel" id="phone" name="phone" required>
     
       <label for="email">Email:</label>
       <input type="email" id="email" name="email" required>
     
       <!-- Add a "Birth Date" label -->
       <label for="birthdate">Birth Date:</label>
       <input type="date" id="birthdate" name="birthdate" required>
     
       <input type="submit" value="Add Student">
       <input type="submit" value="show all students">
     </form>
     
     <!-- Add a new button to show all students -->

     <!--structur of schedule end-->
         <!-- Footer Start -->
         <br><br>

         <div class="container-fluid footer footer-text text-secondary p-5">
          <div class="row g-5 footer-text">
              <div class="col-lg-3 col-md-6 ">
                  <h3 class="text-white mb-4">Quick Links</h3>
                  <div class="d-flex flex-column justify-content-start footer-text">
                      <a class="mb-2 footer-text" href="#"><i class="bi bi-arrow-right text-prim me-2"></i>Home</a>
                      <a class=" mb-2" href="#"><i class="bi bi-arrow-right text-prim me-2"></i>About Us</a>
                      <a class="mb-2" href="#"><i class="bi bi-arrow-right text-prim me-2"></i>Our Services</a>
                      <a class="mb-2" href="#"><i class="bi bi-arrow-right text-prim me-2"></i>Latest Blog Post</a>
                      <a class="" href="#"><i class="bi bi-arrow-right text-prim me-2"></i>Contact Us</a>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6">
                  <h3 class="text-white mb-4">Popular Links</h3>
                  <div class="d-flex flex-column justify-content-start footer-text">
                      <a class="mb-2" href="#"><i class="bi bi-arrow-right text-prim me-2"></i>Home</a>
                      <a class=" mb-2" href="#"><i class="bi bi-arrow-right text-prim me-2"></i>About Us</a>
                      <a class=" mb-2" href="#"><i class="bi bi-arrow-right text-prim me-2"></i>Our Services</a>
                      <a class=" mb-2" href="#"><i class="bi bi-arrow-right text-prim me-2"></i>Latest Blog Post</a>
                      <a class="" href="#"><i class="bi bi-arrow-right text-prim me-2"></i>Contact Us</a>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6">
                  <h3 class="text-white mb-4">Contact</h3>
                  <p class="mb-2"><i class="bi bi-geo-alt text-prim me-2"></i>Campus universitaire M'ghila BP:591, Beni-Mellal 23000</p>
                  <p class="mb-2"><i class="bi bi-envelope-open text-prim me-2"></i>ESTbm@example.com</p>
                  <p class="mb-0"><i class="bi bi-telephone text-prim me-2"></i>+212 613 45 6789</p>
              </div>
              <div class="col-lg-3 col-md-6">
                  <h3 class="text-white mb-4">Follow Us</h3>
                  <div class="d-flex">
                      <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                      <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                      <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                      <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                  </div>
              </div>
          </div>
      </div>
      <div class="container-fluid footer text-secondary text-center border-top py-4 px-5" style="border-color: rgba(256, 256, 256, .1) !important;">
        <p class="m-0 footer-text">&copy; <a class="footer-text border-bottom" href="#">ESTbm</a>. All Rights Reserved. Designed by <a class="footer-text border-bottom" href="https://htmlcodex.com">HTML Codex</a></p>
    </div>
    <!-- Footer End -->


      <!-- JavaScript Libraries -->
      <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
      <script src="lib/easing/easing.min.js"></script>
      <script src="lib/waypoints/waypoints.min.js"></script>
      <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  
      <!-- Template Javascript -->
      <script src="js/main.js"></script>
    
     
