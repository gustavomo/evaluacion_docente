<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
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
      <h1>Universidades</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">facultades</a></li>
          <li class="breadcrumb-item active">Universidad</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Facultades</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Ciencias Basicas</a></li>
                    <li><a class="dropdown-item" href="#">Ingenieria</a></li>
                    <li><a class="dropdown-item" href="#">Leyes</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Universidad <br>Santiago de cali<span>| acreditada</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
                      <h6>8 Facultades</h6>
                      <span class="text-success small pt-1 fw-bold">200</span> <span class="text-muted small pt-2 ps-1">profesores</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">facultades</a></li>
                    <li><a class="dropdown-item" href="#"></a></li>
                    <li><a class="dropdown-item" href="#">Reseñas</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">informacion<span>|bibliografia</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <img src="img/news-5.jpg">
                    </div>
                    <div class="ps-3">
                     
                      <span class="text-success small pt-1 fw-bold">Edad</span> <span class="text-muted small pt-2 ps-1">16/10/1958</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Sedes</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Palmira</a></li>
                    
                </div>

                <div class="card-body">
                  <h5 class="card-title">Ubicacion <span>|cali,valle del cauca</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>Sede pampalinda</h6>
                      <span class="text-danger small pt-1 fw-bold">1400m2</span> <span class="text-muted small pt-2 ps-1"></span>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->

            <!-- Reports -->
            <div class="col-12">
              <div class="card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                
                <div class="card-body">
                  <h5 class="card-title">Universidad</h5>

                  <table class="table table-borderless datatable">
                    
                    <thead>
                      <tr> 
                      <th scope="row"><a href="#"><img class="img-fluid rounded" src="../../assets/img/usc.png" alt=""></a></th>
                      
                      </tr>
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->

            <!-- Top Selling -->
            <div class="col-12">
              <div class="card top-selling overflow-auto">

                

                <div class="card-body pb-0">
                  <h5 class="card-title"> <span>Universidad santiago de cali</span></h5>

                  <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th scope="col"></th>
                        <th scope="col">Facultades</th>
                        <th scope="col">Profesores</th>
                        <th scope="col">calificacion global</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#"><img src="../../assets/img/ingenieria_p.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Facultad de ingenieria</a></td>
                        <td>24</td>
                        <td class="fw-bold">4.1</td>
                        
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="../../assets/img/leyes.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Facultad de leyes</a></td>
                        <td>30</td>
                        <td class="fw-bold">4.0</td>
                        
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="../../assets/img/ciencia.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Facultad de ciencias basicas</a></td>
                        <td>40</td>
                        <td class="fw-bold">4.5</td>
                        <td></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="../../assets/img/salud.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Facultad de salud</a></td>
                        <td>40</td>
                        <td class="fw-bold">4.0</td>
                        
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="../../assets/img/economia.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Facultad de economia</a></td>
                        <td>28</td>
                        <td class="fw-bold">3.8</td>
                        
                      </tr>
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Top Selling -->

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-12">

          <!-- Recent Activity -->
          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Ultimos comentarios <span>| Today</span></h5>

              <div class="activity">

                <div class="activity-item d-flex">
                  <div class="activite-label">32 min</div>
                  <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                  <div class="activity-content">
                    Alfonso que gran profesor de ingenieria<a href="#" class="fw-bold text-dark"> excelente</a>
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">56 min</div>
                  <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                  <div class="activity-content">
                    Humberto se desenvuelve muy bien
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">2 hrs</div>
                  <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                  <div class="activity-content">
                    Yesid explica muy bien y sus clases son muy practicas
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">1 day</div>
                  <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                  <div class="activity-content">
                    Creo que manrique no es tan<a href="#" class="fw-bold text-dark"> bueno</a> como decian
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">2 days</div>
                  <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                  <div class="activity-content">
                    Leyes en la santiago super recomendada
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">4 weeks</div>
                  <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                  <div class="activity-content">
                    En la jave pueden encontrar mejores oportunidades con respecto a negocios
                  </div>
                </div><!-- End activity item-->

              </div>

            </div>
          </div><!-- End Recent Activity -->

          <!-- Budget Report -->
          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body pb-0">
              <h1 class="card-title">calificacion<span>| Profesores</span></h1>

              <div id="budgetChart" style="min-height: 400px;" class="echart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  var budgetChart = echarts.init(document.querySelector("#budgetChart")).setOption({
                    legend: {
                     
                    },
                    radar: {
                      // shape: 'circle',
                      indicator: [{
                          name: 'Economia',
                          max: 50000
                        },
                        {
                          name: 'Leyes',
                          max: 16000
                        },
                        {
                          name: 'Ingenieria',
                          max: 30000
                        },
                        {
                          name: 'Artes y diseño',
                          max: 38000
                        },
                        {
                          name: 'Ciencias basicas',
                          max: 38000
                        },
                        {
                          name: 'Salud',
                          max: 16000
                        }
                      ]
                    },
                    series: [{
                      name: 'Budget vs spending',
                      type: 'radar',
                      data: [{
                          value: [ 36000,3000, 20000, 35000, 37000, 15000],
                          name: 'Experiencia Laboral'
                        },
                        {
                          value: [34000, 14000, 28000, 26000, 35000, 15000],
                          name: 'Titulos profesionales'
                        }
                      ]
                    }]
                  });
                });
              </script>

            </div>
          </div><!-- End Budget Report -->

          <!-- Website Traffic -->
          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

           

            <div class="card-body pb-0">
              <h5 class="card-title">Proyectos de facultades </h5>

              <div class="news">
                <div class="post-item clearfix">
                  <img src="../../assets/img/robot.jpg" alt="">
                  <h4><a href="#">Ingenieria</a></h4>
                  <p>Creacion de robot con inteligencia artificial... </p>
                </div>

                <div class="post-item clearfix">
                  <img src="../../assets/img/venas.jpg" alt="">
                  <h4><a href="#">Salud</a></h4>
                  <p>Creacion de venas artificales...                 </p>
                </div>

                <div class="post-item clearfix">
                  <img src="../../assets/img/micro.png" alt="">
                  <h4><a href="#">Economia</a></h4>
                  <p>Emprendimiento de microempresas para exportar botellas reciclables... </p>
                </div>

                <div class="post-item clearfix">
                  <img src="../../assets/img/aborto.jpg" alt="">
                  <h4><a href="#">Leyes</a></h4>
                  <p>Aprobacion de ley que permite el aborto a nivel regional... </p>
                </div>

                <div class="post-item clearfix">
                  <img src="../../assets/img/drone.jpg" alt="">
                  <h4><a href="#">Ingenieria</a></h4>
                  <p>Creacion de drone que permite cargar 10kg para la innovacion de domicilios...</p>
                </div>

              </div><!-- End sidebar recent posts-->

            </div>
          </div><!-- End News & Updates -->

        </div><!-- End Right side columns -->

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
        const usuarioString = localStorage.getItem("usuario");
        const usuario = JSON.parse(usuarioString);

        nombreUsuario = document.getElementById("nombre-usuario");
        nombreUsuario.innerHTML = usuario.nombre;
    })
    .catch(error => {
        console.error('Error al cargar la barra de navegación:', error);
    });
  </script>
</body>

</html>