<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Perfil-profesor</title>
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
      <h1>PERFIL PROFESOR</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
          <li class="breadcrumb-item"><a href="index.html">Universidad</a></li>
          <li class="breadcrumb-item"><a href="index.html">Facultades</a></li>
          <li class="breadcrumb-item"><a href="index.html">Profesores</a></li>
          <li class="breadcrumb-item active">Perfil profesor</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

          <!-- foto profesional profesor -->
          <div>
    <div class="card photo">
        <div class="card-body pb-0">
            <img src="../../assets/img/p5.jpg" width="100%">
        </div>
    </div>
</div>
<!-- End foto profesional profesor -->
            
            <!-- Calificacion perfil profesor -->
            <div class="col-12">
              <div class="card">

                <div class="filter">
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                    </li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Calificación perfil profesional</h5>

                  <!-- puntos del grafico -->
                  <div id="reportsChart"></div>

                  <script>
                    document.addEventListener("DOMContentLoaded", () => {
                      new ApexCharts(document.querySelector("#reportsChart"), {
                        series: [{
                          name: 'Titulos profesionales',
                          data: [31, 40, 28, 51, 42, 82, 56],
                        }, {
                          name: 'Experiencia laboral',
                          data: [11, 32, 45, 32, 34, 52, 41]
                        }, {
                          name: 'Proyectos realizados',
                          data: [15, 11, 32, 18, 9, 24, 11]
                        }],
                        chart: {
                          height: 350,
                          type: 'area',
                          toolbar: {
                            show: false
                          },
                        },
                        markers: {
                          size: 4
                        },
                        colors: ['#4154f1', '#DC7633', '#707B7C'],
                        fill: {
                          type: "gradient",
                          gradient: {
                            shadeIntensity: 1,
                            opacityFrom: 0.3,
                            opacityTo: 0.4,
                            stops: [0, 90, 100]
                          }
                        },
                        dataLabels: {
                          enabled: false
                        },
                        stroke: {
                          curve: 'smooth',
                          width: 2
                        },
                        xaxis: {
                          type: 'datetime',
                          categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
                        },
                        tooltip: {
                          x: {
                            format: 'dd/MM/yy HH:mm'
                          },
                        }
                      }).render();
                    });
                  </script>
                  <!-- End puntos del grafico -->

                </div>
              </div>
            </div><!-- End calificacion profesor -->

            <!-- Titulos profesionales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Nivel</h6>
                    </li>
                    <li><a class="dropdown-item" href="#">Pregrado</a></li>
                    <li><a class="dropdown-item" href="#">Postgrado</a></li>
                    <li><a class="dropdown-item" href="#">Maestría</a></li>
                    <li><a class="dropdown-item" href="#">Cursos externos</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Títulos profesionales <span>| Pregrado | Postgrado | Maestría | Cursos externos </span></h5>
                    <img src="../../assets/img/diploma_pregrado.jpg" width="665">
                </div>

              </div>
            </div><!-- End Titulos profesionales -->

            <!-- Experiencia laboral -->
            <div class="col-12">
              <div class="card top-selling overflow-auto">

                <div class="card-body pb-0">
                  <h5 class="card-title">Experiencia laboral <span>| Empresa | Institución</span> </h5>

                  <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th scope="col">Empresa/Institución</th>
                        <th scope="col">Cargo</th>
                        <th scope="col">Fecha inicio</th>
                        <th scope="col">Fecha fin</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><a href="#" class="text-primary fw-bold">Sura</a></td>
                        <td>Médico general</td>
                        <td>08/02/2005</td>
                        <td>12/09/2009</td>
                      </tr>
                      <tr>
                        <td><a href="#" class="text-primary fw-bold">Clinica Medical SAS</a></td>
                        <td>Médico de ayuantia quirurgica</td>
                        <td>01/10/2009</td>
                        <td>24/03/2011</td>
                      </tr>
                      <tr>
                        <td><a href="#" class="text-primary fw-bold">AXA Colpatria</a></td>
                        <td>Médico general salas de cirugía/ayudante quirurgico</td>
                        <td>30/03/2011</td>
                        <td>07/08/2011</td>
                      </tr>
                      <tr>
                        <td><a href="#" class="text-primary fw-bold">Agencia de empleo Colsubsidio</a></td>
                        <td>Instrumentador quirurgico</td>
                        <td>11/11/2011</td>
                        <td>31/10/2016</td>
                      </tr>
                      <tr>
                        <td><a href="#" class="text-primary fw-bold">Médico cirujano</a></td>
                        <td>Clinica Compensar</td>
                        <td>01/12/2016</td>
                        <td>Actualidad</td>
                      </tr>
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Experiencia laboral -->

            <!-- Proyectos realizados -->
            <div class="col-12">
              <div class="card top-selling overflow-auto">

                <div class="card-body pb-0">
                  <h5 class="card-title">Proyectos realizados</h5>

                  <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th scope="col">Empresa/Institución</th>
                        <th scope="col">Cargo</th>
                        <th scope="col">Fecha inicio</th>
                        <th scope="col">Fecha fin</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><a href="#" class="text-primary fw-bold">Sura</a></td>
                        <td>Médico general</td>
                        <td>08/02/2005</td>
                        <td>12/09/2009</td>
                      </tr>
                      <tr>
                        <td><a href="#" class="text-primary fw-bold">Clinica Medical SAS</a></td>
                        <td>Médico de ayuantia quirurgica</td>
                        <td>01/10/2009</td>
                        <td>24/03/2011</td>
                      </tr>
                      <tr>
                        <td><a href="#" class="text-primary fw-bold">AXA Colpatria</a></td>
                        <td>Médico general salas de cirugía/ayudante quirurgico</td>
                        <td>30/03/2011</td>
                        <td>07/08/2011</td>
                      </tr>
                      <tr>
                        <td><a href="#" class="text-primary fw-bold">Agencia de empleo Colsubsidio</a></td>
                        <td>Instrumentador quirurgico</td>
                        <td>11/11/2011</td>
                        <td>31/10/2016</td>
                      </tr>
                      <tr>
                        <td><a href="#" class="text-primary fw-bold">Médico cirujano</a></td>
                        <td>Clinica Compensar</td>
                        <td>01/12/2016</td>
                        <td>Actualidad</td>
                      </tr>
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Proyectos realizados -->

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

          <!-- Competencias -->
          <div class="card">

            <div class="card-body pb-0">
              <h5 class="card-title">Competencias</h5>

              <div id="budgetChart" style="min-height: 400px;" class="echart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  var budgetChart = echarts.init(document.querySelector("#budgetChart")).setOption({
                    legend: {
                      data: ['Laboral', 'Educacional']
                    },
                    radar: {
                      // shape: 'circle',
                      indicator: [{
                          name: 'Comunicación verbal y escrita',
                          max: 6500
                        },
                        {
                          name: 'Organización',
                          max: 16000
                        },
                        {
                          name: 'Pensamiento crítico',
                          max: 30000
                        },
                        {
                          name: 'Capacidad de resolución de problemas',
                          max: 38000
                        },
                        {
                          name: 'Paciencia',
                          max: 52000
                        },
                        {
                          name: 'Evaluaciones',
                          max: 25000
                        }
                      ]
                    },
                    series: [{
                      name: 'Budget vs spending',
                      type: 'radar',
                      data: [{
                          value: [4200, 14300, 22000, 35000, 51000, 0],
                          name: 'Laboral'
                        },
                        {
                          value: [5820, 12000, 28000, 27000, 48000, 21000],
                          name: 'Educacional'
                        }
                      ]
                    }]
                  });
                });
              </script>

            </div>
          </div><!-- End Competencias -->
          
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
    })
    .catch(error => {
        console.error('Error al cargar la barra de navegación:', error);
    });
</script>
</body>

</html>