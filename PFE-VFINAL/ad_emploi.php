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
                        <a href="ad_etudiant.html" class="nav-item nav-link">Etudiant</a>
                        <a href="listeclass.html" class="nav-item nav-link "> Classes </a>

                        <a href="ad_emploi.html" class="nav-item nav-link active"> Emplois </a>

                        <a href="Resultat.html" class="nav-item nav-link"> Résultats </a>
                        <a href="Calendrier.html" class="nav-item nav-link"> Calendrier </a>

                        <a href="list-profs.html" class="nav-item nav-link "> Professeurs </a>
                        <a href="contact.html" class="nav-item nav-link"> Contact <i class="fa-solid fa-comment far"></i></a>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

    <!--styling schedule management-->
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



        /* add your CSS styles here */
        body {
          font-family: Arial, sans-serif;
          background-color: #FFFFFF;
          color: #333333;
        }
        
        h1 {
         font-size: 2.5em;
         text-align: center;
         margin-top: 3em;
         margin-bottom: 1.5em;
         color: #584444;
         text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.4);
        }
        
        form {
          max-width: 500px;
          margin: 0 auto;
          padding: 20px;
          background-color: #F8F8F8;
          border-radius: 5px;
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        label {
          display: block;
          margin-bottom: 10px;
          color: #333333;
        }
        
        select,
        input[type="date"] {
          display: block;
          width: 100%;
          padding: 10px;
          border: 1px solid #CCCCCC;
          border-radius: 3px;
          box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
          font-size: 16px;
          color: #333333;
          margin-bottom: 20px;
        }
        
        input[type="submit"],
        button {
          display: block;
          width: 100%;
          padding: 10px;
          border: none;
          border-radius: 3px;
          font-size: 16px;
          font-weight: bold;
          color: #FFFFFF;
          background-color: #F3525A;
          cursor: pointer;
          transition: background-color 0.2s;
        }
        
        input[type="submit"]:hover,
        button:hover {
          background-color: #E7414A;
        }
        
      </style>
    <!--styling schedule management end-->
    <!--structur of schedule -->
    <body>
        <div class="sidebar">
            <img src="imgs/kk2.jpg"  >
            <h2>User Information</h2>
            <p>Name: John Doe</p>
            <p>Email: john.doe@example.com</p>
            <p>Phone: 555-555-5555</p>
          </div>
          
        <h1>Gestion des emplois</h1>
        <form>
          <label for="class">Classe:</label>
          <select name="class" id="class">
            <option value="math">AGRO</option>
            <option value="science">INFORMATIQUE</option>
            <option value="english">ELECTRIQUE</option>
          </select>
      
          <label for="section">Filiere:</label>
          <select name="section" id="section">
            <option value="A">GI</option>
            <option value="B">EREE</option>
            <option value="C">GP</option>
          </select>
      
          <label for="group">Groupe:</label>
          <select name="group" id="group">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
          </select>
      
          <label for="date">Date:</label>
          <input type="date" name="date" id="date" required>
      
          <input type="submit" value="importer l'emplois">
          <br>
          <input type="submit" value="afficher l'emplois">
        </form>
        
      </body>
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
      <script src="JS/main.js"></script>
    
