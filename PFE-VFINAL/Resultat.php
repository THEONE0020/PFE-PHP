<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Liste des profs</title>
        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
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
  <body>
    <div>
               <!-- Navbar Start -->
               <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0   sticky-top">
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

                        <a href="ad_emploi.html" class="nav-item nav-link"> Emplois </a>

                        <a href="Resultat.html" class="nav-item nav-link active"> Résultats </a>
                        <a href="Calendrier.html" class="nav-item nav-link"> Calendrier </a>

                        <a href="list-profs.html" class="nav-item nav-link "> Professeurs </a>
                        <a href="contact.html" class="nav-item nav-link"> Contact <i class="fa-solid fa-comment far"></i></a>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->
      <div class="user-info rounded-end-5">
        <img src="imgs/user2.png" alt="" class="rounded-circle" />
        <h2>User Informations</h2>
        <h4>Name: Bouferdou Azze-el arab</h4>
        <h4>Email: azzelarab.bouferdou@gmail.com</h4>
        <h4>Phone: 0680554238</h4>
      </div>
      <div class="res-list position-absolute">
        <h1><span> Liste des résultats</span></h1>
        <div class="search-box">
            <i class="fa-solid fa-magnifying-glass" style="color: #152440;"></i>
            <input type="text" name="Search" id="search-input">
        </div>
        <div class="back-circle" onclick="back2()">
          <i class="fa-solid fa-left-long fa-2xl" style="color: #ffffff;"></i>
              </div>
        <div class="select-res">
            <table>
                <tr>
                    <td>
                        <label for="Classe"> Classe:</label>
                    </td>
                    <td>
                        <select name="Classe" id="Classe">
                            <option value="1" selected>GI</option>
                            <option value="2">MLT</option>
                        </select>
                    </td>
                    <td>
                        <label for="mat"> Matière: </label>
                    </td>
                    <td>
                        <select name="mat" id="mat">
                            <option value="1" selected>Math</option>
                            <option value="2">PC</option>
                        </select>
                    </td>
                    <td>
                        <label for="Semestre"> Semestre: </label>
                    </td>
                    <td>
                        <select name="Semestre" id="Semestre">
                            <option value="1" selected>S1</option>
                            <option value="2">S2</option>
                        </select>
                    </td>
                    <td>
                        <label for="Ann"> Année: </label>
                    </td>
                    <td>
                        <select name="Ann" id="Ann">
                            <option value="1" selected>2022-2023</option>
                            <option value="2">2021-2022</option>
                        </select>
                    </td>
                </tr>
            </table>
        </div>
        <table id="res-table">
            <tr class="not-header">
            <th class>
                N° Ordre
            </th>
            <th>
                N° Etudiant
            </th>
            <th>
                Nom Prénom
            </th>
            <th>
                Note
            </th>
        </tr>
        <tr>
            <td>
                01
            </td>
            <td>
                ET-1000000
            </td>
            <td>
                Bouferdou Azze-el arab 
            </td>
            <td>
                20
            </td>
        
        </tr>          
            <tr>
                <td>
                    02
                </td>
                <td>
                    ET-1000001
                </td>
                <td>
                    yassine Azze-el arab 
                </td>
         
                <td>
                    19
                </td>
            </tr>          
        </table>


<!-- ****************************************************************************** -->

<div class="select-sem">
  <table>
      <tr>
          <td>
              <label for="Semestre"> Semestre: </label>
          </td>
          <td>
              <select name="Semestre" id="Semestre">
                  <option value="1" selected>S1</option>
                  <option value="2">S2</option>
              </select>
          </td>
          <td>
              <label for="Ann"> Année: </label>
          </td>
          <td>
              <select name="Ann" id="Ann">
                  <option value="1" selected>2022-2023</option>
                  <option value="2">2021-2022</option>
              </select>
          </td>
      </tr>
  </table>
</div>


        <table id="et-notes">
            <tr class="not-header">
            <th class>
                Matière
            </th>
            <th>
                Note
            </th>
        </tr>
        <tr>
            <td>
                Math
            </td>
            <td>
                19
            </td>
        
        </tr>          
            <tr>
                <td>
                    PC
                </td>
                <td>
                    15
                </td>
            </tr>          
        </table>
        
      </div>
      </div>
               <!-- Footer Start -->
         <!-- <br><br> -->
         <div class="container-fluid footer-1 footer-text text-secondary p-5">
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
      <div class="container-fluid footer-2 text-secondary text-center border-top py-4 px-5" style="border-color: rgba(256, 256, 256, .1) !important;">
          <p class="m-0 footer-text">&copy; <a class="footer-text border-bottom" href="#">ESTbm</a>. All Rights Reserved. Designed by <a class="footer-text border-bottom" href="https://htmlcodex.com">HTML Codex</a></p>
      </div>
      <!-- Footer End -->
    <!-- javascript -->
    <script src="../Bootstrap-fontAw/js/all.min.js"></script>
    <script src="../Bootstrap-fontAw/js/bootstrap.bundle.min.js"></script>
    <script src="js/control.js"></script>
  </body>
</html>