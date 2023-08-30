<!doctype html>
<html lang="ar" dir="rtl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Navbar Template · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbars/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    

    <!-- Bootstrap core CSS -->
    <link href={{asset("../import/assets/dist/css/bootstrap.rtl.min.css")}} rel="stylesheet">
    

    <!-- Custom styles for NAVBAR -->
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for MAP -->
    <style>
      /* Set the size of the div element that contains the map */
      #map {
        height: 100%; /* The height is 400 pixels */
        width: 75%; /* The width is the width of the web page */
      }
    </style>
    

  </head>
  <body>
    
<main>
  <!--NAVBAR Block-->
  
  <!--NAVBAR Block-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-warning" aria-label="Fifth navbar example">
    <div class="container-fluid">
      <a class="navbar-brand text-primary" href="#">
        <!--canvas-->
          الباحثون العرب
        <!--/canvas-->

      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample05">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link text-primary" aria-current="page" href="#">الرئيسية</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-primary" href="#">من نحن</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-primary" href="#" tabindex="-1" aria-disabled="false">اطلب بحثك</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-primary" href="#" id="dropdown05" data-bs-toggle="dropdown" aria-expanded="false">التخصصات</a>
            <ul class="dropdown-menu bg-warning" aria-labelledby="dropdown05">
                @foreach ($chapters as $chapter)
                    <li><a class="dropdown-item text-primary" href="#">{{$chapter->name}}</a></li>
                @endforeach
              
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link text-primary" href="#">تواصل معنا</a>
          </li>
        </ul>

        <form>
          <input class="form-control text-primary" type="text" placeholder="بحث" aria-label="Search">
        </form>
	
      </div>
    </div>
  </nav>

  <!-- SHOWCASE Block -->
  <section class="bg-primary text-light p-1 text-sm-start">
    <div class="container">
      <div class="d-sm-flex align-items-center justify-content-between">
        <div>
          <h1>أنت في <span class="text-warning"> خزنة الدراسات والأبحاث</span></h1>
          <p class="lead">
            يتوفر لدينا دراسات بمختلف العناوين، 
            يمكنك الإبحار في الدراسات والأبحاث المتوفرة بحسب التبويب المطلوب.  
            في حال عدم العثور على ما تريد، يرجى عدم التردد في طلب الدراسة...
          </p>
          <div class="btn btn-warning btn-lg text-primary">أطلب بحثك الآن</div>
        </div>
        <img class="img-fluid w-50 d-none d-sm-block" src={{asset("../import/images/showcase.png")}} alt="أنت في خزنة الدراسات والأبحاث">
      </div>
    </div>
  </section>



  <!-- BOXES Block -->
  <section class="p-5">
    <div class="container">
      <div class="row text-center">
        <div class="col-md">
          <div class="card bg-primary text-warning">
            <div class="card-body text-center">
              <div class="h1">
                <i class="bi bi-credit-card-fill"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card bg-primary text-warning">
            <div class="card-body text-center">
              <div class="h1">
                <i class="bi bi-laptop"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card bg-primary text-warning">
            <div class="card-body text-center">
              <div class="h1">
                <i class="bi bi-laptop"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>




  <!-- FOOTER Block (Contact & Map) -->
  <section class="p-5">
    <div class="container">
      <div class="row g-4">
        <div class="col-md">
          <h2 class="text-center mb-4">تواصل معنا</h2>
          <ul class="list-group list-group-flush lead">
            <li class="list-group-item">
              <span class="fw-bold">المكتب الرئيسي: </span>الأردن، عمان، شارع الجامعة، الباب الشمالي
            </li>
            <li class="list-group-item">
              <span class="fw-bold">الهاتف: </span> <span dir="rtl">+962 7 7777 7777</span>
            </li>
            <li class="list-group-item">
              <span class="fw-bold">البريد الإلكتروني: </span>aaaa@aaaaa.com
            </li>
            <li class="list-group-item">
              <span class="fw-bold">فيسبوك: </span><a href="#">fb.com/ameennasan</a>
            </li>
          </ul>
        </div>
        <div class="col-md">
          <div id="map"></div>

        </div>
      </div>
    </div>
  </section>

</main>


    <script src={{asset("../import/assets/dist/js/bootstrap.bundle.min.js")}}></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&callback=initMap&v=weekly"
      defer
    ></script>
    <script>
      // Initialize and add the map
function initMap() {
  // The location of Uluru
  const uluru = { lat: 32.0203057, lng: 35.8689411 };
  // The map, centered at Uluru
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 18,
    center: uluru,
  });
  // The marker, positioned at Uluru
  const marker = new google.maps.Marker({
    position: uluru,
    map: map,
  });
}

window.initMap = initMap;
    </script>

      
  </body>
</html>
