<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Q-Hub Team</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="Css/style.css">
    <link rel="stylesheet" href="Css/owl.carousel.min.css">
    <link rel="stylesheet" href="Css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
    <link rel="stylesheet" href="Css/eventstyle.css">
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">-->
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous">
    </script>
    <!--
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
    </script>
    -->

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/A.style.css.pagespeed.cf.ujDyF7i_mh.css">
    <script>(function(w,d){!function(a,e,t,r,z){a.zarazData=a.zarazData||{},a.zarazData.executed=[],a.zarazData.tracks=[],a.zaraz={deferred:[]};var s=e.getElementsByTagName("title")[0];s&&(a.zarazData.t=e.getElementsByTagName("title")[0].text),a.zarazData.w=a.screen.width,a.zarazData.h=a.screen.height,a.zarazData.j=a.innerHeight,a.zarazData.e=a.innerWidth,a.zarazData.l=a.location.href,a.zarazData.r=e.referrer,a.zarazData.k=a.screen.colorDepth,a.zarazData.n=e.characterSet,a.zarazData.o=(new Date).getTimezoneOffset(),a.dataLayer=a.dataLayer||[],a.zaraz.track=(e,t)=>{for(key in a.zarazData.tracks.push(e),t)a.zarazData["z_"+key]=t[key]},a.zaraz._preSet=[],a.zaraz.set=(e,t,r)=>{a.zarazData["z_"+e]=t,a.zaraz._preSet.push([e,t,r])},a.dataLayer.push({"zaraz.start":(new Date).getTime()}),a.addEventListener("DOMContentLoaded",(()=>{var t=e.getElementsByTagName(r)[0],z=e.createElement(r);z.defer=!0,z.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(a.zarazData))),t.parentNode.insertBefore(z,t)}))}(w,d,0,"script");})(window,document);</script>
    

  </head>
  <body>

    <!-- Top Button Starts -->

    <button type="button" class="btn btn-danger btn-floating btn-lg rounded-circle" id="btn-back-to-top"><i class="fas fa-arrow-up"></i></button>

    <script>
    let mybutton = document.getElementById("btn-back-to-top");

    window.onscroll = function () {
      scrollFunction();
    };

    function scrollFunction() {
    if (
      document.body.scrollTop > 20 ||
      document.documentElement.scrollTop > 20
    ) {
      mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }
    mybutton.addEventListener("click", backToTop);

    function backToTop() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
      
    }
    </script>

    <!-- Top Button Ends -->

    <!-- Navbar Starts -->

    <!-- Navbar -->
  <nav class="navbar customnav navbar-expand-lg navbar-light bg-light sticky-top" id="nb">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="Images/logo.jpg" alt="" width="120" height="54">
      </a>
      <!--<a class="navbar-brand" href="#"><strong>QHUB VIT-AP</strong></a>-->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav fs-5 ms-auto me-3 mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="index.html#about">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active selected" href="#">Our Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="index.html#event">Events</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="index.html#gallery">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="index.html#contact">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Navbar Ends -->

  <!-- Admin Team Section Starts -->

  <section class="event-section text-center mb-4 mt-5" id="event">
    <h2 class="h1-responsive font-weight-normal mt-5 mb-5 text-white" id="headt">Admin Team</h2>

    <div class="container text-center mb-3 mt-5">
        <div class="row mx-auto my-auto">
            <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
                <div class="carousel-inner w-100" role="listbox">
                    <div class="carousel-item active">
                        <div class="col-md-4">
                            <div class="avatar mx-auto">
                                <img src="Team/T-1.jpg" class="rounded z-depth-1-half" alt="SAI KIRAN YADLAPALLI">
                              </div>
                              <h5 class="font-weight-normal text-white my-3">TEJA SRINIVAS ANEM</h5>
                              <h6 class="text-uppercase text-white mb-4"><strong>President</strong></h6>
                        </div>
                      </div>
  
                  <div class="carousel-item">
                    <div class="col-md-4">
                        <div class="avatar mx-auto">
                            <img src="Team/T-2.jpg" class="rounded z-depth-1-half" alt="SAI KIRAN YADLAPALLI">
                          </div>
                          <h5 class="font-weight-normal text-white my-3">TEJA SRINIVAS ANEM</h5>
                          <h6 class="text-uppercase text-white mb-4"><strong>President</strong></h6>
                    </div>
                  </div>
  
                  <div class="carousel-item">
                    <div class="col-md-4">
                        <div class="avatar mx-auto">
                            <img src="Team/T-3.JPG" class="rounded z-depth-1-half" alt="SAI KIRAN YADLAPALLI">
                          </div>
                          <h5 class="font-weight-normal text-white my-3">TEJA SRINIVAS ANEM</h5>
                          <h6 class="text-uppercase text-white mb-4"><strong>President</strong></h6>
                    </div>
                  </div>
  
                  <div class="carousel-item">
                    <div class="col-md-4">
                        <div class="avatar mx-auto">
                            <img src="Team/T-4.jpeg" class="rounded z-depth-1-half" alt="SAI KIRAN YADLAPALLI">
                          </div>
                          <h5 class="font-weight-normal text-white my-3">TEJA SRINIVAS ANEM</h5>
                          <h6 class="text-uppercase text-white mb-4"><strong>President</strong></h6>
                    </div>
                  </div>

                  <div class="carousel-item">
                    <div class="col-md-4">
                        <div class="avatar mx-auto">
                            <img src="Team/T-5.jpg" class="rounded z-depth-1-half" alt="SAI KIRAN YADLAPALLI">
                          </div>
                          <h5 class="font-weight-normal text-white my-3">TEJA SRINIVAS ANEM</h5>
                          <h6 class="text-uppercase text-white mb-4"><strong>President</strong></h6>
                    </div>
                  </div>
                </div>


                <a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next w-auto" href="#recipeCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        </div>
  
    </section>
  
    <script>
    $('#recipeCarousel').carousel({
      interval: 8000
    })
    
    $('.carousel .carousel-item').each(function(){
        var minPerSlide = 3;
        var next = $(this).next();
        if (!next.length) {
        next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));
        
        for (var i=0;i<minPerSlide;i++) {
            next=next.next();
            if (!next.length) {
                next = $(this).siblings(':first');
              }
            
            next.children(':first-child').clone().appendTo($(this));
          }
    });
    </script>

  <!-- Admin Team Section Ends -->

  <!-- Tech Team Section Starts -->

  <section class="event-section text-center mb-4 mt-5" id="event">
    <h2 class="h1-responsive font-weight-normal mt-5 mb-5 text-white" id="headt">Technical Team</h2>

    <div class="container text-center mb-3 mt-5">
        <div class="row mx-auto my-auto">
            <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
                <div class="carousel-inner w-100" role="listbox">
                    <div class="carousel-item active">
                        <div class="col-md-4">
                            <div class="avatar mx-auto">
                                <img src="Team/T-1.jpg" class="rounded z-depth-1-half" alt="SAI KIRAN YADLAPALLI">
                              </div>
                              <h5 class="font-weight-normal text-white my-3">TEJA SRINIVAS ANEM</h5>
                              <h6 class="text-uppercase text-white mb-4"><strong>President</strong></h6>
                        </div>
                      </div>
  
                  <div class="carousel-item">
                    <div class="col-md-4">
                        <div class="avatar mx-auto">
                            <img src="Team/T-2.jpg" class="rounded z-depth-1-half" alt="SAI KIRAN YADLAPALLI">
                          </div>
                          <h5 class="font-weight-normal text-white my-3">TEJA SRINIVAS ANEM</h5>
                          <h6 class="text-uppercase text-white mb-4"><strong>President</strong></h6>
                    </div>
                  </div>
  
                  <div class="carousel-item">
                    <div class="col-md-4">
                        <div class="avatar mx-auto">
                            <img src="Team/T-3.JPG" class="rounded z-depth-1-half" alt="SAI KIRAN YADLAPALLI">
                          </div>
                          <h5 class="font-weight-normal text-white my-3">TEJA SRINIVAS ANEM</h5>
                          <h6 class="text-uppercase text-white mb-4"><strong>President</strong></h6>
                    </div>
                  </div>
  
                  <div class="carousel-item">
                    <div class="col-md-4">
                        <div class="avatar mx-auto">
                            <img src="Team/T-4.jpeg" class="rounded z-depth-1-half" alt="SAI KIRAN YADLAPALLI">
                          </div>
                          <h5 class="font-weight-normal text-white my-3">TEJA SRINIVAS ANEM</h5>
                          <h6 class="text-uppercase text-white mb-4"><strong>President</strong></h6>
                    </div>
                  </div>

                  <div class="carousel-item">
                    <div class="col-md-4">
                        <div class="avatar mx-auto">
                            <img src="Team/T-5.jpg" class="rounded z-depth-1-half" alt="SAI KIRAN YADLAPALLI">
                          </div>
                          <h5 class="font-weight-normal text-white my-3">TEJA SRINIVAS ANEM</h5>
                          <h6 class="text-uppercase text-white mb-4"><strong>President</strong></h6>
                    </div>
                  </div>
                </div>

                
                <a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next w-auto" href="#recipeCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        </div>
  
    </section>
  
    <script>
    $('#recipeCarousel').carousel({
      interval: 8000
    })
    
    $('.carousel .carousel-item').each(function(){
        var minPerSlide = 3;
        var next = $(this).next();
        if (!next.length) {
        next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));
        
        for (var i=0;i<minPerSlide;i++) {
            next=next.next();
            if (!next.length) {
                next = $(this).siblings(':first');
              }
            
            next.children(':first-child').clone().appendTo($(this));
          }
    });
    </script>

  <!-- Tech Team Section Ends -->

  <!-- Footer Starts -->

  <div class="container-fluid footer text-light mt-5 pt-5 p-2" style="background-color: rgb(37, 39, 41);">
    <p class="text-center mb-0">&copy; Copyright QHUB VIT-AP - 2022 | All rights reserved</p>
    <hr style="background-color: rgb(102, 107, 107)">
    <div class="text-center icons elegant color-dark">
      <a href="#" target="_blank" style="text-decoration: none; color: white; font-size: 40px; padding-right: 0.8%;"><i
          class="fab bottomicons mx-2 fa-instagram-square"></i></a>
      <a href="#" target="_blank" style="text-decoration: none; color: white; font-size: 40px;"><i
          class="fab bottomicons mx-2 fa-linkedin"></i></a>
    </div>
  </div>

  <!-- Footer Ends -->

  </body>
  <script src="Js/script.js"></script>
  <script src="Js/jquery.min.js"></script>
  <script src="Js/popper.js"></script>
  <script src="Js/owl.carousel.min.js"></script>
  <script src="Js/main.js"></script>
  <script src="https://kit.fontawesome.com/273b239f7f.js" crossorigin="anonymous"></script>
</html>
