<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Liste des profs</title>
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
               <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0 sticky-top">
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

                        <a href="Resultat.html" class="nav-item nav-link"> Résultats </a>
                        <a href="Calendrier.html" class="nav-item nav-link"> Calendrier </a>

                        <a href="list-profs.html" class="nav-item nav-link active"> Professeurs </a>
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
      <div class="prf-list position-absolute">
        <h1><span> Liste des professeurs</span></h1>
        <div class="search-box">
            <i class="fa-solid fa-magnifying-glass" style="color: #152440;"></i>
            <input type="text" name="Search" id="search-input">
        </div>
        <table id="list-table">
            <tr class="not-header">
            <th class>
                Identifiant
            </th>
            <th>
                Nom
            </th>
            <th>
                Prénom
            </th>
            <th>
                Age
            </th>
            <th>
                Email
            </th>
            <th>
                Tél
            </th>
            <th>
                Niveau
            </th>
            <th>
                Experiences
            </th>
            <th>
                Action
            </th>
        </tr>
        <tr>
            <td>
                PR-222222
            </td>
            <td>
                Bouferdou
            </td>
            <td>
                Azze-el arab
            </td>
            <td>
                25
            </td>
            <td>
                contact@sora.com
            </td>
            <td>
                +212680554238
            </td>
            <td>
                S3 , S4
            </td>
            <td>

            </td>
            <td>
                <i class="fa-solid fa-pen-to-square"></i>
                <i class="fa-solid fa-trash-can"></i>
            </td>
        </tr>          
            <tr>
                <td>
                    PR-110110
                </td>
                <td>
                    Bouferdou
                </td>
                <td>
                    Azze-el arab
                </td>
                <td>
                    25
                </td>
                <td>
                    contact@sora.com
                </td>
                <td>
                    +212680554238
                </td>
                <td>
                    S3 , S4
                </td>
                <td>

                </td>
                <td>
                    <i class="fa-solid fa-pen-to-square"></i>
                    <i class="fa-solid fa-trash-can"></i>
                </td>
            </tr>          
       
        </table>


        <!-- ---------------------------------------------- -->

        <div class="prf-info">
        <table class="table-infoPrf">
            <tr>
              <td>
                <img src="IMGS/User.jpg" alt="" class="prof-img rounded-circle" >
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <div class="line"></div>
              </td>
            </tr>
            <tr>
              <td>
                <label for="PR-ID">Identifiant:</label>
              </td>
              <td>
                <input
                  type="text"
                  placeholder="PR-XXXXXX"
                  id="PR-ID"
                  name="PR-ID"
                />
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <div class="line"></div>
              </td>
            </tr>
            <tr>
              <td>
                <label for="Nom">Nom:</label>
              </td>
              <td>
                <input
                  type="text"
                  name="Nom"
                  id="Nom"
                  placeholder="Example: Bouferdou"
                />
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <div class="line"></div>
              </td>
            </tr>
            <tr>
              <td>
                <label for="Prenom">Prénom:</label>
              </td>
              <td>
                <input
                  type="text"
                  name="Prenom"
                  id="Prenom"
                  placeholder="Example: Azze-el arab"
                />
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <div class="line"></div>
              </td>
            </tr>
            <tr>
              <td>
                <label for="DN">Date de naissance:</label>
              </td>
              <td>
                <input
                  type="date"
                  name="DN"
                  id="DN"
                />
              </td>
            </tr>
          </tr>
          <tr>
            <td colspan="2">
              <div class="line"></div>
            </td>
          </tr>
          <tr>
            <td>
              <label for="Email">Email:</label>
            </td>
            <td>
              <input
                type="email"
                name="Email"
                id="Email"
                placeholder="Example: contact@sora.com"
              />
            </td>
          </tr>
        </tr>
        <tr>
          <td colspan="2">
            <div class="line"></div>
          </td>
        </tr>
        <tr>
          <td>
            <label for="Tel">Tél:</label>
          </td>
          <td>
            <input
              type="tel"
              name="Tel"
              id="Tel"
              placeholder="Example: +212680554238"
            />
          </td>
        </tr>
      </tr>
      <tr>
        <td colspan="2">
          <div class="line"></div>
        </td>
      </tr>
      <tr>
        <td>
          <label for="Niv">Niveau:</label>
        </td>
        <td>
        <input name="NivT" id="NivT" type="text"></input>
        </td>
      </tr>
      <tr>
        <td colspan="2">
          <div class="line"></div>
        </td>
      </tr>
      <tr>
        <td>
          <label for="Exp">Experiences:</label>
        </td>
        <td>
          <textarea name="Exp" id="Exp"  rows="2"></textarea>
        </td>
      </tr>

          </table>
          <input type="Submit" value="Modifier" class="sub-btn">
          <input type="reset" value="Delete" class="sub-btn">
        <div class="back-circle" onclick="back()">
            <i class="fa-solid fa-left-long fa-2xl" style="color: #ffffff;"></i>
                </div>
        </div>
      </div>
      <a class="btn-ajt" href="Profs-ajt.html"><i class="fa-solid fa-user-plus" style="color: #fcfdfe;"></i> Ajouter professeur</a>
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