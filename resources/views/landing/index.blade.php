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

    <body data-spy="scroll" data-target="#navbarNav" data-offset="50">


        <!-- MENU BAR -->
        @include('components.navbar')
    
    
         <!-- HERO -->
       @include('components.hero')
    
        <!-- konten -->
        @include('components.konten')
    
    
         <!-- bagian about -->
         @include('components.about')
    
    
         <!-- isi affah enak nya? -->
        @include('components.fungsi')
    
    
        
    
    
         <!-- CONTACT -->
         @include('components.kontak')
    
    
         <!-- FOOTER -->
        @include('components.footer')
  


    <!-- SCRIPTS -->
    {{-- <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/smoothscroll.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script> --}}

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/smoothscroll.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/carousel.js"></script>
   
</body>
</html>