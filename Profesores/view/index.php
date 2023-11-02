<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Profesores</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../../assets/img/favicon.png" rel="icon">
  <link href="../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../../assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../../assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../../assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

 <!-- Incluye la barra de navegación -->
 <div id="navbar-container"></div>
     
 <!-- Contenido de la página de inicio -->
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Profesores</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Universidades</a></li>
          <li class="breadcrumb-item"><a href="index.html">Facultades</a></li>
          <li class="breadcrumb-item active">Profesores</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">        

        <!-- foto universidad -->
          <div>
                <div class="card photo">
                    <div class="card-body pb-0">
                        <h5 class="card-title">Universidad Santiago de Cali</h5>
                        <img src="../../assets/img/usc.png" width="100%">
                    </div>
                </div>
              </div>
        <!-- End foto universidad -->

            <!-- Top Selling -->
            <div class="col-12">
              <div class="card top-selling overflow-auto">
                <div class="card-body pb-0">
                  <h5 class="card-title"> <span>Universidad santiago de cali | Listado de docentes</span></h5>

                  <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th scope="col"></th>
                        <th scope="col">Profesores</th>
                        <th scope="col">Materia(s)</th>
                        <th scope="col">Calificacion global</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#"><img src="../../assets/img/messages-1.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Federica Peluche</a></td>
                        <td>APO 2 (Algoritmos y programación 2)</td>
                        <td class="fw-bold">4.1</td>
                        
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="../../assets/img/messages-2.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">María Juanita</a></td>
                        <td>Análisis de algoritmos</td>
                        <td class="fw-bold">4.0</td>
                        
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="../../assets/img/messages-3.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Gonzalo Vicente</a></td>
                        <td>Cálculo I / Cálculo II</td>
                        <td class="fw-bold">4.5</td>
                        <td></td>
                      </tr>
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Top Selling -->

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
            </div>
          </div><!-- End News & Updates -->
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../../assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/vendor/chart.js/chart.umd.js"></script>
  <script src="../../assets/vendor/echarts/echarts.min.js"></script>
  <script src="../../assets/vendor/quill/quill.min.js"></script>
  <script src="../../assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../../assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="../../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../../assets/js/main.js"></script>
  <script>
   const navbarContainer = document.getElementById('navbar-container');

// Usa la función fetch para cargar el archivo navbar.html
fetch('../../components/navBaritem.html')
    .then(response => response.text())
    .then(html => {
        // Inserta el contenido HTML en el contenedor
        navbarContainer.innerHTML = html;
    })
    .catch(error => {
        console.error('Error al cargar la barra de navegación:', error);
    });
</script>
</body>

</html>