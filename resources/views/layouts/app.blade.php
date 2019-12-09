
<!--
 * CoreUI Pro - Bootstrap 4 Admin Template
 * @version v1.0.8
 * @link http://coreui.io/pro/
 * Copyright (c) 2018 creativeLabs Łukasz Holeczek
 * @license http://coreui.io/pro/license/
 -->
 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="CoreUI Pro - Bootstrap 4 Admin Template">
  <meta name="author" content="Łukasz Holeczek">
  <meta name="keyword" content=",">
  <link rel="shortcut icon" href="img/favicon.png">
  <title>CoreUI Pro - Bootstrap 4 Admin Template</title>
   @include('layouts.partials.style')
  

</head>


<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">


  <div class="app-body">
    <
    <!-- Main content -->
    <main class="main">

      <!-- Breadcrumb -->
      

      <div class="container-fluid">

        @yield('content')
      </div>
      <!-- /.conainer-fluid -->
    </main>

    

  </div>

    
     @include('layouts.partials.scripts')
     
</body>
</html>