<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GEGANA</title>

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/carousel.css') }}">

</head>
<body>
   @include('components.navbar')

   
   <section class="hero d-flex flex-column justify-content-center align-items-center" id="home">
       
       <div class="bg-overlay"></div>
       <div class="gambar">

           <img  src="{{ asset('assets/image/bg.jpg')}}" alt="">
       </div>
       <div class="container">
           <div class="row">
               
               <div class="col-lg-8 col-md-10 mx-auto col-12">
                      <div class="hero-text mt-5 text-center">
                        
                           
                           
                      </div>
                 </div>

            </div>
       </div>
</section>


    <!-- SCRIPTS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>