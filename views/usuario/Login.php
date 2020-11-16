<!DOCTYPE html>
<html lang="en">

<head>
   <link rel="icon" href="assets/Books_icon-icons.com_76879.ico">   
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <!-- Owl-Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />
    
    <!-- Font Awesome CDN -->
    <script src="https://kit.fontawesome.com/23412c6a8d.js"></script>

    <!-- Custom Style-->
    <link rel="stylesheet" href="css/Style.css">
</head>

<body>
    <div class="container">
        <div class="panel">
            <div class="row">
                <div class="col liquid">
                    <h4><i class="fas fa-drafting-compass"></i> Millenium S.A.C</h4>

                    <!-- Owl-Carousel -->
                    <div class="owl-carousel owl-theme">                        
                        <img src="assets/book_lover_monochromatic.svg" alt="" class="login_img">
                        <img src="assets/online_shopping__monochromatic.svg" alt="" class="login_img">
                        <img src="assets/order_confirmed_monochromatic.svg" alt="" class="login_img">
                    </div>

                    <!-- /Owl-Carousel -->
                    <div class="follow">
                        Siguenos <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-twitter"></i>
                    </div>
                </div>
                <div class="col login">

                    <a href="index.php?c=cliente&a=nuevousuario"  class="btn btn-signup">Registrarse</a>                   
                    
                    <form method="POST" id="nuevo" name="nuevo" action="index.php?c=cliente&a=validausuario">
                        <div class="titles">
                            <h6>Deja que las palabras te den gracias</h6>
                            <h3>Libreria Millenium</h3>
                        </div>
                        <div class="form-group">
                            <input id="cuenta" name="cuenta" type="text" placeholder="DNI" class="form-input">
                            <div class="input-icon">
                                <i class="fas fa-user"></i>
                            </div>
                        </div>
                        <div class="form-group">
                            <input id="password" name="password" type="password" placeholder="Password" class="form-input">
                            <div class="input-icon">
                                <i class="fas fa-user-lock"></i>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-login">Login</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function () {

            $('.owl-carousel').owlCarousel({
                loop: true,
                autoplay: true,
                autoplayTimeout: 2000,
                autoplayHoverPause: true,
                items: 1
            });
        });
    </script>  
</body>

</html>