<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="text/cs" href="app.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>



    <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-alexa" viewBox="0 0 16 16">
                <path d="M7.996 0A7.998 7.998 0 0 0 0 8a8 8 0 0 0 6.93 7.93v-1.613a1.06 1.06 0 0 0-.717-1.008A5.602 5.602 0 0 1 2.4 7.865 5.579 5.579 0 0 1 8.054 2.4a5.599 5.599 0 0 1 5.535 5.81l-.002.046a6.116 6.116 0 0 1-.012.192l-.005.061a4.85 4.85 0 0 1-.033.284l-.01.068c-.685 4.516-6.564 7.054-6.596 7.068A7.998 7.998 0 0 0 15.992 8 7.998 7.998 0 0 0 7.996.001Z"/>
              </svg>
            GAS</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#breanda">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Tentang GAS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Daftar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Karir</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Fitur
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Mesin Kasir</a></li>
                  <li><a class="dropdown-item" href="#">Scan Barcode</a></li>
                  <li><a class="dropdown-item" href="#">Daftar Kurir</a></li>
                  <li><a class="dropdown-item" href="#">Stock Opname</a></li>
                  <li><a class="dropdown-item" href="#">Print Thermal</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Dan Masih Banyak Lainnya</a></li>
                </ul>
              </li>
            </ul>

            <form class="d-flex">
              <button class="btn btn-outline-success" type="submit">sign in</button>
            </form>
          </div>
        </div>
      </nav>



      <section class="bg-dark text-light p-5 text-center text-sm-start" id="Beranda">
        <div class="container py-5">
            <div class="d-sm-flex align-items-center justify-content-between py-5">

                <div>
                <h1>Mari<span class="text-warning"> Bergabung dengan GAS </span></h1>
                <h3 class="my-2">Platform Terbaik yang pernah ada</h3>
                <p class="lead my-2">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. In deserunt adipisci voluptate quidem sunt necessitatibus?
                </p>
                <p class="lead my-4">Unduh</p>
                <button class="btn btn-primary btn-lg">Google Play</button>
               </div>
               <a href="#">
                <img src="{{ asset('assets/01.png') }}" class="img-fluid" >
               </a>
            </div>
        </div>
      </section>




      <section class="bg-primary text-light p-5">
        <div class="container py-5">
            <div class="d-md-flex justify-content-between align-items-center">
                <h3 class="mb-3 mb-md-0">
                    sing up for aaaaaaaaaaa
                </h3>
                <div class="input-group news-input">
                    <input type="text" class="form-control" placeholder="Enter E-mail" name="">

                <button class="btn btn-dark btn-lg">
                    Dicover
                </button>
            </div>
            </div>
        </div>
      </section>




      <section class="p-5" id="services">
        <div class="container py-5">
            <h2 class="text-center mb-4F"> Kategori </h2>
            <div class="row text-center g-4">
                <div class="col-md">
                    <div class="card bg-dark text-light p-5">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">
                                <i class="bi bi-laptop"></i>
                            </div>
                            <h3 class="card-title">
                                Web Design
                            </h3>
                            <p class="card-text">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quia, ducimus.
                            </p>
                            <a href="#" class="btn btn-primary">
                                read more
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card bg-dark text-light p-5">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">
                                <i class="bi bi-person-circle"></i>
                            </div>
                            <h3 class="card-title">
                                Web Design
                            </h3>
                            <p class="card-text">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quia, ducimus.
                            </p>
                            <a href="#" class="btn btn-primary">
                                read more
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card bg-dark text-light p-5">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">
                                <i class="bi bi-people"></i>
                            </div>
                            <h3 class="card-title">
                                Web Design
                            </h3>
                            <p class="card-text">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quia, ducimus.
                            </p>
                            <a href="#" class="btn btn-primary">
                                read more
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>



      <section class="p-5 bg-primary">
        <div class="container py-5">
            <h2 class="text-center tex-white">Kategorimana kah kamu</h2>
            <p class="lead text-center text-white mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam itaque, laborum ullam natus fugiat odio.</p>

            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card bg-light">
                        <div class="card-body text-center p-5">
                            <img src="{{ asset('assets/2.jpg') }}" class="img-fluid mb-3">
                            <h3 class="card-title mb-3">apa </h3>
                            <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis, eum excepturi optio dolore obcaecati provident!</p>
                            <a href="#"><i class="bi bi-facebook text-dark mx-1 trace-line-header"></i></a>
                            <a href="#"><i class="bi bi-twitter text-dark mx-1 trace-line-header"></i></a>
                            <a href="#"><i class="bi bi-linkedin text-dark mx-1 trace-line-header"></i></a>
                            <a href="#"><i class="bi bi-instagram text-dark mx-1 trace-line-header"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card bg-light">
                        <div class="card-body text-center p-5">
                            <img src="{{ asset('assets/2.jpg') }}" class="img-fluid mb-3">
                            <h3 class="card-title mb-3">bagaimana</h3>
                            <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis, eum excepturi optio dolore obcaecati provident!</p>
                            <a href="#"><i class="bi bi-facebook text-dark mx-1 trace-line-header"></i></a>
                            <a href="#"><i class="bi bi-twitter text-dark mx-1 trace-line-header"></i></a>
                            <a href="#"><i class="bi bi-linkedin text-dark mx-1 trace-line-header"></i></a>
                            <a href="#"><i class="bi bi-instagram text-dark mx-1 trace-line-header"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card bg-light">
                        <div class="card-body text-center p-5">
                            <img src="{{ asset('assets/2.jpg') }}" class="img-fluid mb-3">
                            <h3 class="card-title mb-3">kenapa</h3>
                            <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis, eum excepturi optio dolore obcaecati provident!</p>
                            <a href="#"><i class="bi bi-facebook text-dark mx-1 trace-line-header"></i></a>
                            <a href="#"><i class="bi bi-twitter text-dark mx-1 trace-line-header"></i></a>
                            <a href="#"><i class="bi bi-linkedin text-dark mx-1 trace-line-header"></i></a>
                            <a href="#"><i class="bi bi-instagram text-dark mx-1 trace-line-header"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card bg-light">
                        <div class="card-body text-center p-5">
                            <img src="{{ asset('assets/2.jpg') }}" class="img-fluid mb-3">
                            <h3 class="card-title mb-3">siapa</h3>
                            <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis, eum excepturi optio dolore obcaecati provident!</p>
                            <a href="#"><i class="bi bi-facebook text-dark mx-1 trace-line-header"></i></a>
                            <a href="#"><i class="bi bi-twitter text-dark mx-1 trace-line-header"></i></a>
                            <a href="#"><i class="bi bi-linkedin text-dark mx-1 trace-line-header"></i></a>
                            <a href="#"><i class="bi bi-instagram text-dark mx-1 trace-line-header"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section>




      <section class="p-5" id="about">
        <div class="container py-5">
            <div class="row justify-content-between align-items-center">
                <div class="col-md">
                    <a href="#"><img src="{{ asset('assets/01.png') }}" class="img-fluid" ></a>
                </div>
                <div class="col-md p-5">
                    <h2>AAAAAAA</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque consequuntur voluptates magni.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta repellat ex quas sed.</p>
                    <a href="#" class="btn btn-primary mt-3"> <i class="bi bi-chevron-compact-right"></i> Read more</a>
                </div>
            </div>
        </div>
      </section>




      <section class="bg-dark text-light p-5" id="learn">
        <div class="container py-5">
            <div class="row align-items-center justify-content-between">
                <div class="col-md p-5">
                    <h2>BBBBBBBB</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque consequuntur voluptates magni.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta repellat ex quas sed.</p>
                    <a href="#" class="btn btn-light mt-3"> <i class="bi bi-chevron-compact-right"></i>Read more</a>
                </div>
                <div class="col-md">
                    <a href="#">
                        <a href="#"></a>
                        <a href="#"><img src="{{ asset('assets/01.png') }}" class="img-fluid" ></a>
                    </a>
                </div>
            </div>
        </div>
      </section>

      <section class="p-5" id="about">
        <div class="container py-5">
            <div class="row justify-content-between align-items-center">
                <div class="col-md">
                    <a href="#"><img src="{{ asset('assets/01.png') }}" class="img-fluid" ></a>
                </div>
                <div class="col-md p-5">
                    <h2>CCCCCCCCC</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque consequuntur voluptates magni.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta repellat ex quas sed.</p>
                    <a href="#" class="btn btn-primary mt-3"> <i class="bi bi-chevron-compact-right"></i> Read more</a>
                </div>
            </div>
        </div>
      </section>




      <section class="p-5" id="questions">
        <div class="container py-5">
            <h2 class="text-center mb-4F">AABBCC</h2>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                     aaaaaaaaaaaaaa
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, quibusdam. Ea, accusamus quidem a tempore corrupti maxime quam voluptas alias!
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      bbbbbbbbbbbbbbbbb
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor, neque nemo consequatur expedita architecto repudiandae harum numquam culpa dignissimos, porro a odit corporis.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      cccccccccccc
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime, omnis.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                       dddddddddddddddd
                      </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi eos cumque, error architecto facilis necessitatibus eum ipsum?
                      </div>
                    </div>
                </div>
            </div>
        </div>
      </section>




     <section class="p-5 bg-primary">
        <div class="container py-5">
            <h2 class="text-center tex-white">Temukan Karir Impianmu</h2>
            <p class="lead text-center text-white mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam itaque, laborum ullam natus fugiat odio.</p>

            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card bg-light">
                        <div class="card-body text-center p-5">
                            <img src="{{ asset('assets/2.jpg') }}" class="img-fluid mb-3">
                            <h3 class="card-title mb-3">apa </h3>
                            <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis, eum excepturi optio dolore obcaecati provident!</p>
                            <a href="#"><i class="bi bi-facebook text-dark mx-1 trace-line-header"></i></a>
                            <a href="#"><i class="bi bi-twitter text-dark mx-1 trace-line-header"></i></a>
                            <a href="#"><i class="bi bi-linkedin text-dark mx-1 trace-line-header"></i></a>
                            <a href="#"><i class="bi bi-instagram text-dark mx-1 trace-line-header"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card bg-light">
                        <div class="card-body text-center p-5">
                            <img src="{{ asset('assets/2.jpg') }}" class="img-fluid mb-3">
                            <h3 class="card-title mb-3">bagaimana</h3>
                            <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis, eum excepturi optio dolore obcaecati provident!</p>
                            <a href="#"><i class="bi bi-facebook text-dark mx-1 trace-line-header"></i></a>
                            <a href="#"><i class="bi bi-twitter text-dark mx-1 trace-line-header"></i></a>
                            <a href="#"><i class="bi bi-linkedin text-dark mx-1 trace-line-header"></i></a>
                            <a href="#"><i class="bi bi-instagram text-dark mx-1 trace-line-header"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card bg-light">
                        <div class="card-body text-center p-5">
                            <img src="{{ asset('assets/2.jpg') }}" class="img-fluid mb-3">
                            <h3 class="card-title mb-3">kenapa</h3>
                            <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis, eum excepturi optio dolore obcaecati provident!</p>
                            <a href="#"><i class="bi bi-facebook text-dark mx-1 trace-line-header"></i></a>
                            <a href="#"><i class="bi bi-twitter text-dark mx-1 trace-line-header"></i></a>
                            <a href="#"><i class="bi bi-linkedin text-dark mx-1 trace-line-header"></i></a>
                            <a href="#"><i class="bi bi-instagram text-dark mx-1 trace-line-header"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card bg-light">
                        <div class="card-body text-center p-5">
                            <img src="{{ asset('assets/2.jpg') }}" class="img-fluid mb-3">
                            <h3 class="card-title mb-3">siapa</h3>
                            <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis, eum excepturi optio dolore obcaecati provident!</p>
                            <a href="#"><i class="bi bi-facebook text-dark mx-1 trace-line-header"></i></a>
                            <a href="#"><i class="bi bi-twitter text-dark mx-1 trace-line-header"></i></a>
                            <a href="#"><i class="bi bi-linkedin text-dark mx-1 trace-line-header"></i></a>
                            <a href="#"><i class="bi bi-instagram text-dark mx-1 trace-line-header"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    


     <footer class="page-footer p-5 text-md-left">
        <div class="container py-5">
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-uppercase font-weihgt-bold mb-4">
                        AAA
                    </h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, exercitationem!</p>
                    <a href="#"><i class="bi bi-facebook text-dark mx-1 trace-line-header"></i></a>
                            <a href="#"><i class="bi bi-twitter text-dark mx-1 trace-line-header"></i></a>
                            <a href="#"><i class="bi bi-linkedin text-dark mx-1 trace-line-header"></i></a>
                            <a href="#"><i class="bi bi-instagram text-dark mx-1 trace-line-header"></i></a>
                </div>
            </div>
        </div>
     </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
