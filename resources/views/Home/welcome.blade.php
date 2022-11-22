
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Meyawo landing page.">
    <meta name="author" content="Devcrud">
    <title>@yield('title')</title>
    <!-- font icons -->
    <link rel="stylesheet" href="{{ asset('homePageTemplate/assets/vendors/themify-icons/css/themify-icons.css') }}">
    <!-- Bootstrap + Meyawo main styles -->
	<link rel="stylesheet" href="{{ asset('homePageTemplate/assets/css/meyawo.css')}}">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <!-- Page Navbar -->
    <nav class="custom-navbar" data-spy="affix" data-offset-top="20">
        <div class="container">
            <a class="logo" href="/">SMART1</a>         
            <ul class="nav">
                <li class="item">
                    <a class="link" href="/login">Login</a>
                </li>
                <li class="item">
                    <a class="link" href="/register">Register</a>
                </li>
            </ul>
            <a href="javascript:void(0)" id="nav-toggle" class="hamburger hamburger--elastic">
                <div class="hamburger-box">
                  <div class="hamburger-inner"></div>
                </div>
            </a>
        </div>          
    </nav><!-- End of Page Navbar -->

    <!-- page header -->
    <header id="home" class="header">
        <div class="overlay"></div>
        <div class="header-content container">
            <h1 class="header-title">
                <span class="up">Selamat Datang</span>
                <br>
                <span class="down">SMK Antartika 1 Sidoarjo</span>
            </h1>
            <p class="header-subtitle">Pilih Sekolah Berkualitas Bukan Janji Tapi Bukti</p>            

        </div>              
    </header><!-- end of page header -->

    <!-- footer -->
    <div class="container">
        <footer class="footer">       
            <p class="mb-0">Copyright <script>document.write(new Date().getFullYear())</script> &copy; <a href="">Andy</a></p>
        </footer>
    </div> <!-- end of page footer -->
	
	<!-- core  -->
    <script src="{{asset('homePageTemplate/assets/vendors/jquery/jquery-3.4.1.js')}}"></script>
    <script src="{{asset('homePageTemplate/assets/vendors/bootstrap/bootstrap.bundle.js')}}"></script>

    <!-- bootstrap 3 affix -->
	<script src="{{asset('homePageTemplate/assets/vendors/bootstrap/bootstrap.affix.js')}}"></script>

    <!-- Meyawo js -->
    <script src="{{asset('homePageTemplate/assets/js/meyawo.js')}}"></script>

</body>
</html>
