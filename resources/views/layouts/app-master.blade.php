<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>management-stock</title>
       <!--  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />-->
        
        <link href="{!! url('assets/css/app.css')!!}" rel="stylesheet" />
        <link href="{!! url('assets/bootstrap/css/bootstrap.min.css')!!}" rel="stylesheet">
   
        @stack('addClient')
        @stack('client')
        </head>
    <body class="sb-nav-fixed">
        
     @include('nav.navbar')
     @include('nav.sidebar')
     
     
        
     <div id="layoutSidenav_content">
                <main>
             
            @yield('content')
            
               </main>


         <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        <script src="assets/js/datatables-simple-demo.js"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
      
       
      
  @include('nav.footer')
    </body>
</html>
