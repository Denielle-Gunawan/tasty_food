<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tasty Food || Kontak</title>

    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/kontak.css') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <section class="hero-contact">
        <div class="background img-fluid">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/home">TASTY FOOD</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/home">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="/tentang">TENTANG</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="/berita">BERITA</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="/galeri">GALERI</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="/kontak">KONTAK</a>
                            </li>
                        </ul>
                    </div>
            </nav>
            <h1>KONTAK KAMI</h1>
        </div>
    </section>
    <!-- navbar end -->
    <!-- navbar end -->

    {{-- kontak start --}}
    <section class="container-fluid">
        <h3>KONTAK KAMI</h3>
        <div class="row rows-cols-2">
            <div class="col">
                <input type="text" placeholder="Subject">
            </div>
            <div>
                <input type="text" placeholder="Name">
            </div>
            <div>
                <input type="email" placeholder="Email">
            </div>
            <div class="">
                <textarea name="" id="" rows="5" placeholder="Massage"></textarea>
            </div>
            <div class="col">
                <button type="button" class="btn btn-dark">KIRIM</button>
            </div>
        </div>
    </section>
    {{-- kontak end --}}

    {{-- information start --}}
    <section class="container-fluid">
        <div class="row rows-cols-3">
            <div class="info col">
                <img src="{{asset('./img/mail1.png')}}" alt="">
                <p>tastyfood@gmail.com</p>
            </div>
            <div class="info col">
                <img src="{{asset('./img/mail1.png')}}" alt="">
                <p>+62 812 3456 7890</p>
            </div>
            <div class="info col">
                <img src="{{asset('./img/map1.png')}}" alt="">
                <p>Kota Bandung, Jawa Barat</p>
            </div>
        </div>
    </section>
    {{-- information end --}}

{{-- map start --}}
<section class="map container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-12 lapisan-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.558851650418!2d107.66179861431733!3d-6.9432060698981015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7c381e3c323%3A0x5f5160f6c9796e4b!2sCYBERLABS%20-%20Jasa%20Digital%20Marketing%20%7C%20Jasa%20Pembuatan%20Website%20%7C%20Jasa%20Pembuatan%20Aplikasi!5e0!3m2!1sid!2sid!4v1675948059925!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>
{{-- map end --}}

{{-- footer start --}}
<footer>
    <section class="footer">
        <div class="container-footer row">
            <div class="text-footer col-12 col-md-6 col-lg-3">
                <h2>Tasty Food</h2>
                <p>Lorem ipsum, dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim venia, quis nostrud<br>
                    exercitatin ullamco laboris nisi uy aliquip es ea commodo consequat
                </p>
                <div class="sosmed-link">
                    <a href=""><img src="{{ asset('img/fb1.png') }}" alt=""></a>
                    <a href=""><img src="{{ asset('img/002-twitter.png') }}" alt=""></a>
                </div>
            </div>
            <div class="link-footer col-12 col-md-6 col-lg-3">
                <h3>Useful Links</h3>
                <a href="#">Blog</a>
                <a href="#">Hewan</a>
                <a href="#">Galeri</a>
                <a href="#">Testimonial</a>
            </div>
            <div class="privacy-footer col-12 col-md-6 col-lg-3">
                <h3>Privacy</h3>
                <a href="#">Karir</a>
                <a href="#">Tentang Kami</a>
                <a href="#">Kontak Kami</a>
                <a href="#">Servis</a>
            </div>
            <div class="contact-footer col-12 col-md-6 col-lg-3">
                <h3>Contact Info</h3>
                <div class="img-email">
                    <img src="{{ asset('./img/mail2.png') }}" alt=""><a href="#">tastyfood@gmail.com</a>
                </div>
                <div class="img-telp">
                    <img src="{{ asset('img/call1.png') }}" alt=""><a href="#">+62 812 3456 7890</a>
                </div>
                <div class="img-addres">
                    <img src="{{ asset('img/map1.png') }}" alt=""><a href="#">Kota Bandung, Jawa Barat</a>
                </div>
            </div>
        </div>
        <div class="copyright-footer">
            <a href="#">Copyright ©2023 All rights reserved</a>
        </div>
    </section>
</footer>
{{-- footer end --}}


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>
