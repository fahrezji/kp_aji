
<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bootstrap Template Atlas</title>
    <meta name="description" content="Free bootstrap template Atlas">
    <link rel="icon" href="img/favicon.png" sizes="32x32" type="image/png">
    <!-- custom.css -->
    <link rel="stylesheet" href="{{ asset('/assets/css/custom.css') }}">
    <!-- bootstrap.min.css -->
    <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
	<!-- font-awesome -->
    <link rel="stylesheet" href="{{ asset('/assets/font-awesome-4.7.0/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/font-awesome-4.7.0/css/font-awesome.min.css') }}">

    <!-- AOS -->
    <link rel="stylesheet" href="{{ asset('/assets/css/aos.css') }}">
</head>

<body>
    <!-- banner -->
    <div class="jumbotron jumbotron-fluid" id="banner" style="background-image: url({{ asset ('assets/img/wisuda3.jpg')}}) ; background-size:cover;">
        <div class="container text-center text-md-left">
            <header>
                <div class="row justify-content-between">
                    <div class="col-2">
                        <img src="{{asset ('/assets/img/logo.png')}}" alt="logo">
                    </div>
                    <div class="col-6 align-self-center text-right">
                        <a href="/sesi/login" class="text-white lead">Login</a>
                    </div>
                </div>
            </header>
            <h1 data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="display-3 text-white font-weight-bold my-5">
            	Jalan Baru<br>
            	Untuk Memulai Kuliah
            </h1>
            <p data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="lead text-white my-4">
                Lorem ipsum dolor sit amet, id nec enim autem oblique, ei dico mentitum duo.
                <br> Illum iusto laoreet his te. Lorem partiendo mel ex. Ad vitae admodum voluptatum per.
            </p>
            <a href="/sesi/register" data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="btn my-4 font-weight-bold atlas-cta cta-green">Register</a>
        </div>
    </div>
    <!-- three-blcok -->
    <div class="container my-5 py-2">
        <h2 class="text-center font-weight-bold my-5">Fasilitas</h2>
        <div class="row">
            <div data-aos="fade-up" data-aos-delay="0" data-aos-duration="1000" data-aos-once="true" class="col-md-4 text-center">
                <img src="{{asset ('/assets/img/lab.png')}}" alt="Anti-spam" class="mx-auto" width="300px">
                <h4 class="mt-4">Lab Komputer</h4>

            </div>
            <div data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-once="true" class="col-md-4 text-center">
                <img src="{{asset ('/assets/img/badminton.png')}}" alt="Phishing Detect" class="mx-auto" width="300px">
                <h4 class="mt-4">Gor</h4>

            </div>
            <div data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000" data-aos-once="true" class="col-md-4 text-center">
                <img src="{{asset ('/assets/img/mosque2.png')}}" alt="Smart Scan" class="mx-auto" width="320px">
                <h4>Mushola</h4>

            </div>
        </div>
    </div>
    <!-- feature (skew background) -->
    <div class="jumbotron jumbotron-fluid feature" id="feature-first">
        <div class="container my-5">
            <div class="row justify-content-between text-center text-md-left">
                <div data-aos="fade-right" data-aos-duration="1000" data-aos-once="true" class="col-md-6">
                    <h2 class="font-weight-bold">Take a look inside</h2>
                    <p class="my-4">Te iisque labitur eos, nec sale argumentum scribentur no,
                        <br> augue disputando in vim. Erat fugit sit at, ius lorem deserunt deterruisset no.</p>
                    <a href="/sesi/register" class="btn my-4 font-weight-bold atlas-cta cta-blue">Register</a>
                </div>
                <div data-aos="fade-left" data-aos-duration="1000" data-aos-once="true" class="col-md-6 align-self-center">
                    <img src="{{asset ('/assets/img/halaman.jpg')}}" alt="Take a look inside" class="mx-auto d-block">
                </div>
            </div>
        </div>
    </div>
    <!-- feature (green background) -->
    <div class="jumbotron jumbotron-fluid feature" id="feature-last">
        <div class="container">
            <div class="row justify-content-between text-center text-md-left">
                <div data-aos="fade-left" data-aos-duration="1000" data-aos-once="true" class="col-md-6 flex-md-last">
                    <h2 class="font-weight-bold">Safe and reliable</h2>
                    <p class="my-4">
                        Duo suas detracto maiestatis ad, commodo lucilius invenire nec ad,
                        <br> eum et oratio disputationi. Falli lobortis his ad
                    </p>
                    <a href="/sesi/register" class="btn my-4 font-weight-bold atlas-cta cta-blue">Register</a>
                </div>
                <div data-aos="fade-right" data-aos-duration="1000" data-aos-once="true" class="col-md-6 align-self-center flex-md-first">
                    <img src="{{asset ('/assets/img/wisuda.jpg')}}" alt="Safe and reliable" class="mx-auto d-block">
                </div>
            </div>
        </div>
    </div>

    <!-- price table -->
    <div class="container my-5 py-2" id="price-table">
        <h2 class="text-center font-weight-bold d-block mb-3">Komentar Tamu</h2>
        <div class="row">
            <div data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000" data-aos-once="true" class="col-md-4 text-center py-4 mt-5">
                <h4 class="my-4">Wanda</h4>
                <img src="{{asset ('/assets/img/wanda.jpeg')}}" class="rounded-circle">
                <ul class="list-unstyled">
                   <p class="mt-3"> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur, aliquid!</p>
                </ul>
                {{-- <a href="#" class="btn my-4 font-weight-bold atlas-cta cta-ghost">Get Free</a> --}}
            </div>
            <div data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" class="col-md-4 text-center py-4 mt-5 rounded" id="price-table__premium">
                <h4 class="my-4">Andung Raju</h4>
                <img src="{{asset ('/assets/img/aldi.jpeg')}}" class="rounded-circle">
                <ul class="list-unstyled">
                    <p class="mt-3"> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur, aliquid!</p>
                </ul>
                {{-- <a href="#" class="btn my-4 font-weight-bold atlas-cta cta-green">Get Free</a> --}}
            </div>
            <div data-aos="fade-left" data-aos-delay="200" data-aos-duration="1000" data-aos-once="true" class="col-md-4 text-center py-4 mt-5">
                <h4 class="my-4">Septian Permadi</h4>
                <img src="{{asset ('/assets/img/septian.jpeg')}}" class="rounded-circle">
                <ul class="list-unstyled">
                    <p class="mt-3"> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur, aliquid!</p>
                </ul>
                {{-- <a href="#" class="btn my-4 font-weight-bold atlas-cta cta-ghost">Get Free</a> --}}
            </div>
        </div>
    </div>
    <!-- client -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-md-2 py-2 align-self-center">
                    <img src="{{asset ('/assets/img/client-1.png')}}" class="mx-auto d-block">
                </div>
                <div class="col-sm-4 col-md-2 py-2 align-self-center">
                    <img src="{{asset ('/assets/img/client-2.png')}}" class="mx-auto d-block">
                </div>
                <div class="col-sm-4 col-md-2 py-2 align-self-center">
                    <img src="{{asset ('/assets/img/client-3.png')}}" class="mx-auto d-block">
                </div>
                <div class="col-sm-4 col-md-2 py-2 align-self-center">
                    <img src="{{asset ('/assets/img/client-4.png')}}" class="mx-auto d-block">
                </div>
                <div class="col-sm-4 col-md-2 py-2 align-self-center">
                    <img src="{{asset ('/assets/img/client-5.png')}}" class="mx-auto d-block">
                </div>
                <div class="col-sm-4 col-md-2 py-2 align-self-center">
                    <img src="{{asset ('/assets/img/client-6.png')}}" class="mx-auto d-block">
                </div>
            </div>
        </div>
    </div>
    <!-- contact -->
    <div class="jumbotron jumbotron-fluid" id="contact" style="background-image: url({{ asset ('assets/img/contact-bk.jpg')}});">
        <div class="container my-5">
            <div class="row justify-content-between">
                <div class="col-md-6 text-white">
                    <h2 class="font-weight-bold">Kontak Kita</h2>
                    {{-- <p class="my-4">
                        Te iisque labitur eos, nec sale argumentum scribentur,
                        <br> augue disputando in vim. Erat fugit sit at, ius lorem.
                    </p> --}}
                    <ul class="list-unstyled">
                        <li>Email : info@stmik-mi.ac.id</li>
                        <li>Phone : +62 (022) 523 0382 </li>
                        <li>Address :Jl. Soekarno-Hatta No. 211 Leuwipanjang Bandung - Jawa Barat</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <form>
                        <h2 class="font-weight-bold">Isi Komentar</h2>
                    	<div class="row">

	                        <div class="form-group col-md-6">

	                            <label for="name">Your Name</label>
	                            <input type="name" class="form-control" id="name">
	                        </div>
	                        <div class="form-group col-md-6">
	                            <label for="Email">Your Email</label>
	                            <input type="email" class="form-control" id="Email">
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label for="message">Message</label>
	                        <textarea class="form-control" id="message" rows="3"></textarea>
	                    </div>
                        <button type="submit" class="btn font-weight-bold atlas-cta atlas-cta-wide cta-green my-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

	<!-- copyright -->
	<div class="jumbotron jumbotron-fluid" id="copyright">
        <div class="container">
            <div class="row justify-content-between">
            	<div class="col-md-6 text-white align-self-center text-center text-md-left my-2">
                    Copyright © 2018 Chen, Yi-Ya.
                </div>
                <div class="col-md-6 align-self-center text-center text-md-right my-2" id="social-media">
                    <a href="#" class="d-inline-block text-center ml-2">
                    	<i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="d-inline-block text-center ml-2">
                    	<i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="d-inline-block text-center ml-2">
                    	<i class="fa fa-medium" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="d-inline-block text-center ml-2">
                    	<i class="fa fa-linkedin" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- AOS -->
    <script src="{{asset ('/assets/js/aos.js')}}"></script>
    <script>
      AOS.init({
      });
    </script>
    {{-- panggil css --}}
    {{-- <script src="{{asset ('/assets/css/aos.css')}}"></script>
    <script src="{{asset ('/assets/css/app.css')}}"></script>
    <script src="{{asset ('/assets/css/bootstrap.min.css')}}"></script>
    <script src="{{asset ('/assets/css/custom.css')}}"></script>
    <script src="{{asset ('/assets/css/main.css')}}"></script> --}}

    {{-- panggil js --}}
    {{-- <script src="{{asset ('/assets/js/aos.js')}}"></script>
    <script src="{{asset ('/assets/js/app.js')}}"></script>
    <script src="{{asset ('/assets/js/bootstrap.js')}}"></script>
    <script src="{{asset ('/assets/js/main.js')}}"></script> --}}

</body>

</html>
