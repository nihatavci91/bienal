<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienal</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/splitting/dist/splitting.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="./assets/js/main.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css">
    <link rel="stylesheet" href="https://unpkg.com/splitting/dist/splitting.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-ddark position-fixed w-100">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse positon-fixed" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#page1"><div class="d-flex align-items-center"><img src="./assets/images/manu-icon.png" class="mr-2 nav-one"><span>HOME</span></div></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#page2"><div class="d-flex align-items-center"><img src="./assets/images/manu-icon.png" class="mr-2 nav-two"><span>ABOUT</span></div></a>
            </li>
        </ul>
        <div class="logo-container d-none d-lg-flex">
            <div class="logo"><a href="#page1"><img src="./assets/images/logolar/Varlık 1.png"></a></div>
        </div>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#page4"><div class="d-flex align-items-center"><img src="./assets/images/manu-icon.png" class="mr-2 nav-three"><span>VIDEOS</span></div></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#page5"><div class="d-flex align-items-center"><img src="./assets/images/manu-icon.png" class="mr-2 nav-four"><span>CO-WORKERS</span></div></a>
            </li>
        </ul>
    </div>
</nav>

<a id="buttonTop"></a>
<div id="page1">
    <div class="container">
        <div class="sc-logo d-flex d-lg-none"><img src="./assets/images/logolar/Varlık 1.png"></div>
        <div class="slider-content d-flex justify-content-center">
            <div class="d">
                <button type="button" class="btn btn-outline-warning mb-4" data-toggle="modal" data-target="#contactModal">
                    <img src="./assets/images/icons/contact.png" class="mr-2">
                    Contact
                </button>
                <div class="language-wrapper justify-content-center mb-1">
                    <div class="tr-lang  d-flex justify-content-center align-items-center mr-2" id="tr_switch" onClick="tikla(this.id)">TR</div>
                    <div class="en-lang active d-flex justify-content-center align-items-center">EN</div>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="custom-control custom-switch lang-switch">
                        <input type="checkbox" class="custom-control-input" id="customSwitch1" value="2">
                        <label class="custom-control-label" for="customSwitch1"></label>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<div id="page2" class="page position-relative">
    <div class="page-2-content bg-Fdark m-auto d-flex align-items-center">
        <div class="slogan-title"><?php echo $printed['description_en']; ?></div>
    </div>
    <div class="left-side">
        <div class="pilot-bg-shape">
            <img src="./assets/images/horizontal-shape.png">
        </div>
        <div class="pilot-image">
            <img src="./assets/images/pilot.png">
        </div>
        <div class="vertical-text we-are-text d-none d-md-flex">ABOUT US</div>
        <div class="arrow-selector d-none d-md-flex">
            <img src="./assets/images/ok.png">
        </div>
    </div>
    <div class="right-side">
        <div class="drone-bg-shape d-none d-md-flex">
            <img src="./assets/images/vertical-shape.png">
        </div>
        <div class="drone-img d-none d-md-flex">
            <img src="./assets/images/drone-film.png">
        </div>
        <div class="d-flex align-items-center dots-wrapper">
            <div class="dots">
                <div class="dot"><img src="./assets/images/star.png"> </div>
                <div class="dot"><img src="./assets/images/star.png"> </div>
                <div class="dot"><img src="./assets/images/star.png"> </div>
            </div>
        </div>
    </div>

</div>
<div id="page3" class="page position-relative">
    <img src="./assets/images/gradient.png" class="gradient-page-top">
    <div class="d-flex align-items-center h-100">
        <div class="d-block d-lg-flex align-items-center justify-content-center    mx-lg-5">
            <div class="wwp-title-wrapper d-flex d-lg-block align-items-center">

                <div class="position-relative title-ancation-wrapper">
                    <div class="star-page-three mb-0 mb-lg-5 pb-0 pb-lg-3">
                        <img src="./assets/images/star.png">
                    </div>
                    <div class="title-animation">
                        <div class="wwp-title vertical-text">ABOUT US</div>
                        <div class="wwp-title vertical-text">ABOUT US</div>
                    </div>
                </div>

            </div>
            <div class="wwp-wrps d-flex justify-content-center mx-2 mx-md-5">
                <div class="wwp-description mx-0 mx-md-5" data-splitting="lines">
                    <?php echo $about['description_en'] ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="page4" class="page position-relative">
    <div class="www-title mb-5 pb-5 pb-sm-0 mb-sm-0">
        <div class="www-img-1" style="margin-top: -7px;"><img src="./assets/images/yonok.png"></div>
        <div class="position-relative title-animation-wrapper">
            <div class="title-animation">
                <div>VIDEOS</div>
                <div>VIDEOS</div>
            </div>
        </div>
        <div class="www-img-1"><img src="./assets/images/yonok.png"></div>
    </div>
    <div class="slider-page">
        <div class="h-100 align-items-center d-none d-lg-flex">
            <div class="video-slider">
                @foreach($our_works as $index => $item)
                    @if($item['image_check'] == 1)
                        <div class="slide slide--{{$index}}">
                            <img src="./images/{{$item['image_url']}}">
                        </div>
                    @else
                        <div class="slide slide--{{$index}}">
                            <a href="#Modal{{$index}}" data-toggle="modal" data-target="#Modal{{$index}}">
                                <img src="./images/{{$item['image_url']}}">
                            </a>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        <div class="d-lg-none">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    @foreach($our_works as $index => $item)
                        @if($item['image_check' == 1])
                            <div class="carousel-item active">
                                <a href="#Modal{{$index}}" data-toggle="modal{{$index}}" data-target="#Modal{{$index}}">
                                    <img src="./assets/images/kapak/reels1.png">
                                </a>
                            </div>
                        @else
                            <div class="carousel-item active">
                                <a href="#exampleModal" data-toggle="modal" data-target="#exampleModal">
                                    <img src="./assets/images/kapak/reels1.png">
                                </a>
                            </div>
                        @endif
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>
<div id="page5" class="page position-relative d-flex align-items-center justify-content-center h-100">
    <div class="">
        <div class="www-title mb-5 pb-5 pb-sm-0 mb-sm-0 mb-lg-5 pb-lg-2">
            <div class="www-img-1"><img src="./assets/images/yonok.png"></div>
            <div class="position-relative title-animation-wrapper">
                <div class="title-animation">
                    <div>CO-WORKERS</div>
                    <div>CO-WORKERS</div>
                </div>
            </div>
            <div class="www-img-1"><img src="./assets/images/yonok.png"></div>
        </div>
        <div class="www-logos-wrp container h-auto">
            <div class="row align-items-stretch">
                @foreach($works as $index => $item)
                    <div class="col-4 col-md-3 col-lg-2 mb-4 d-flex justify-content-center align-items-center">
                        <img src="./images/{{$item['image_url']}}">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@foreach($our_works as $index => $item)

    <div class="modal fade slider-modal" id="Modal{{$index}}" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel">Video Başlık</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="embed-responsive embed-responsive-16by9">
                            <?php echo $item['video_url']; ?>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
                </div>
            </div>
        </div>
    </div>
@endforeach
<div class="modal fade slider-modal contactModal" id="contactModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Contact</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 mb-4 mb-md-0 mb-xl-4">
                        <div class="mb-2">
                            <p class="mb-1"><strong>Adresimiz</strong></p>
                            <p class="mb-0"><?php echo $about['address'] ?> <br>
                                {{$about['tel']}}</p>
                            <a href="mailto:{{$about['email']}}" style="color: #FF9015">{{$about['email']}}</a>
                        </div>
                        <iframe class="map" src="<?php echo $about['map'] ?>"></iframe>

                    </div>
                    <div class="col-12">
                        <form>
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">E-Mail</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Phone</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Message</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Send</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</body>
<script>

    $(document).ready(function() {
        //set initial state.

        $('#customSwitch1').change(function() {
            window.location.href = "{{ route('home')}}";

        });
    });
    $(window).on('scroll', function() {
        target = $("#page2").offset().top + (250);
        if ($(window).scrollTop() < target) {

        } else {
            Splitting();
        }
        return
    });

    function tikla(tiklanan_id){
        window.location.href = "{{ route('home')}}";
    }

    $(window).on('scroll', function() {
        page1 = $("#page2").offset().top + (0);
        page2 = $("#page4").offset().top + (0);
        page3 = $("#page5").offset().top + (0);
        page4 = $("#page5").offset().top + (130)



        if ($(window).scrollTop() < page1) {
            $(".nav-link img").removeClass("img-transform");
            $(".nav-one").addClass("img-transform");
        }
        else if ($(window).scrollTop() < page2) {
            $(".nav-link img").removeClass("img-transform");
            $(".nav-two").addClass("img-transform");
        }
        else if ($(window).scrollTop() < page3) {
            $(".nav-link img").removeClass("img-transform");
            $(".nav-three").addClass("img-transform");
        }
        else if ($(window).scrollTop() < page4) {
            $(".nav-link img").removeClass("img-transform");
            $(".nav-four").addClass("img-transform");
        }
        else{

        }
        return

    });



    $(window).scroll(function() {
        if ($(window).scrollTop() > 400) {
            $(".slider-content div").addClass("d-none");
        } else {
            $(".slider-content div").removeClass("d-none");
        }
    });


    ScrollTrigger.create({
        animation: gsap.from(".logo", {
            y: "50vh",
            scale: 6,
            yPercent: -160,
        }),
        scrub: true,
        trigger: ".page",
        start: "top bottom",
        endTrigger: ".page",
        end: "top center",
    })
</script>
</html>
