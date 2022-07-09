@extends('layouts.template')

@section('content')

<!--==========================
    Intro Section
  ============================-->
<section id="intro">
    <div class="intro-container wow fadeIn">
        <h1 class="mb-4 pb-0">{{$evento->nome}}</h1><br>
        <h1 class="mb-4 pb-3 " style="font-size: 1.8em; padding: 0 150px;"><span>{{$evento->tema}}</span></h1>
        <p class="mb-4 pb-0">{{$evento->data_inicio}} à {{$evento->data_fim}}, {{$evento->local}}</p>
        @if ($evento->link_youtube)
        <a href="{{$evento->link_youtube}}" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
        @endif
        <a href="#sobre" class="about-btn scrollto">Sobre o Evento</a>
    </div>
</section>

<main id="main">

    <!--==========================
      About Section
    ============================-->
    <section id="sobre">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2>Sobre o Evento</h2>
                    <p>{{$evento->sobre_evento}}</p>
                </div>
                <div class="col-lg-3">
                    <h2>Onde</h2>
                    <p>{{$evento->local}}</p>
                    <p>{{$evento->endereco}}</p>
                </div>
                <div class="col-lg-3">
                    <h2>Quando</h2>
                    <p>INICIO: {{$evento->data_inicio}} às {{$evento->hora_inicio}}</p>
                    <p>FIM: {{$evento->data_fim}} às {{$evento->hora_fim}} </p>
                </div>
            </div>

        </div>

    </section>

    @if ($evento->palestrante)
    <!--==========================
      Speakers Section
    ============================-->
    <section id="confirmados" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2>Palestrantes, Mediador, Convidados e Confirmados</h2>
                <p>Aqui estão alguns de nossos confirmados</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="speaker">
                        <img src="img/speakers/1.jpg" alt="Speaker 1" class="img-fluid">
                        <div class="details">
                            <h3><a href="speaker-details.html">Brenden Legros</a></h3>
                            <p>Quas alias incidunt</p>
                            <div class="social">
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="speaker">
                        <img src="img/speakers/2.jpg" alt="Speaker 2" class="img-fluid">
                        <div class="details">
                            <h3><a href="speaker-details.html">Hubert Hirthe</a></h3>
                            <p>Consequuntur odio aut</p>
                            <div class="social">
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="speaker">
                        <img src="img/speakers/3.jpg" alt="Speaker 3" class="img-fluid">
                        <div class="details">
                            <h3><a href="speaker-details.html">Cole Emmerich</a></h3>
                            <p>Fugiat laborum et</p>
                            <div class="social">
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="speaker">
                        <img src="img/speakers/4.jpg" alt="Speaker 4" class="img-fluid">
                        <div class="details">
                            <h3><a href="speaker-details.html">Jack Christiansen</a></h3>
                            <p>Debitis iure vero</p>
                            <div class="social">
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="speaker">
                        <img src="img/speakers/5.jpg" alt="Speaker 5" class="img-fluid">
                        <div class="details">
                            <h3><a href="speaker-details.html">Alejandrin Littel</a></h3>
                            <p>Qui molestiae natus</p>
                            <div class="social">
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="speaker">
                        <img src="img/speakers/6.jpg" alt="Speaker 6" class="img-fluid">
                        <div class="details">
                            <h3><a href="speaker-details.html">Willow Trantow</a></h3>
                            <p>Non autem dicta</p>
                            <div class="social">
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    @endif
    @if ($evento->programacao)
    <!--==========================
      Schedule Section
    ============================-->
    <section id="programacao" class="section-with-bg">
        <div class="container wow fadeInUp">
            <div class="section-header">
                <h2>Programação</h2>
                <p>Aqui está a nossa agenda de eventos</p>
            </div>

            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" href="#day-1" role="tab" data-toggle="tab">Dia 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#day-2" role="tab" data-toggle="tab">Dia 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#day-3" role="tab" data-toggle="tab">Dia 3</a>
                </li>
            </ul>

            <h3 class="sub-heading">Nenhum prazer virá quando os libertos e corruptos seguirem, nem os deveres serão cumpridos. É um prazer encontrar alguém que precisa de trabalho duro.</h3>

            <div class="tab-content row justify-content-center">

                <!-- Schdule Day 1 -->
                <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">

                    <div class="row schedule-item">
                        <div class="col-md-2"><time>09:30 AM</time></div>
                        <div class="col-md-10">
                            <h4>Registration</h4>
                            <p>Fugit voluptas iusto maiores temporibus autem numquam magnam.</p>
                        </div>
                    </div>

                    <div class="row schedule-item">
                        <div class="col-md-2"><time>10:00 AM</time></div>
                        <div class="col-md-10">
                            <div class="speaker">
                                <img src="img/speakers/1.jpg" alt="Brenden Legros">
                            </div>
                            <h4>Keynote <span>Brenden Legros</span></h4>
                            <p>Facere provident incidunt quos voluptas.</p>
                        </div>
                    </div>

                    <div class="row schedule-item">
                        <div class="col-md-2"><time>11:00 AM</time></div>
                        <div class="col-md-10">
                            <div class="speaker">
                                <img src="img/speakers/2.jpg" alt="Hubert Hirthe">
                            </div>
                            <h4>Et voluptatem iusto dicta nobis. <span>Hubert Hirthe</span></h4>
                            <p>Maiores dignissimos neque qui cum accusantium ut sit sint inventore.</p>
                        </div>
                    </div>

                    <div class="row schedule-item">
                        <div class="col-md-2"><time>12:00 AM</time></div>
                        <div class="col-md-10">
                            <div class="speaker">
                                <img src="img/speakers/3.jpg" alt="Cole Emmerich">
                            </div>
                            <h4>Explicabo et rerum quis et ut ea. <span>Cole Emmerich</span></h4>
                            <p>Veniam accusantium laborum nihil eos eaque accusantium aspernatur.</p>
                        </div>
                    </div>

                    <div class="row schedule-item">
                        <div class="col-md-2"><time>02:00 PM</time></div>
                        <div class="col-md-10">
                            <div class="speaker">
                                <img src="img/speakers/4.jpg" alt="Jack Christiansen">
                            </div>
                            <h4>Qui non qui vel amet culpa sequi. <span>Jack Christiansen</span></h4>
                            <p>Nam ex distinctio voluptatem doloremque suscipit iusto.</p>
                        </div>
                    </div>

                    <div class="row schedule-item">
                        <div class="col-md-2"><time>03:00 PM</time></div>
                        <div class="col-md-10">
                            <div class="speaker">
                                <img src="img/speakers/5.jpg" alt="Alejandrin Littel">
                            </div>
                            <h4>Quos ratione neque expedita asperiores. <span>Alejandrin Littel</span></h4>
                            <p>Eligendi quo eveniet est nobis et ad temporibus odio quo.</p>
                        </div>
                    </div>

                    <div class="row schedule-item">
                        <div class="col-md-2"><time>04:00 PM</time></div>
                        <div class="col-md-10">
                            <div class="speaker">
                                <img src="img/speakers/6.jpg" alt="Willow Trantow">
                            </div>
                            <h4>Quo qui praesentium nesciunt <span>Willow Trantow</span></h4>
                            <p>Voluptatem et alias dolorum est aut sit enim neque veritatis.</p>
                        </div>
                    </div>

                </div>
                <!-- End Schdule Day 1 -->

                <!-- Schdule Day 2 -->
                <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-2">

                    <div class="row schedule-item">
                        <div class="col-md-2"><time>10:00 AM</time></div>
                        <div class="col-md-10">
                            <div class="speaker">
                                <img src="img/speakers/1.jpg" alt="Brenden Legros">
                            </div>
                            <h4>Libero corrupti explicabo itaque. <span>Brenden Legros</span></h4>
                            <p>Facere provident incidunt quos voluptas.</p>
                        </div>
                    </div>

                    <div class="row schedule-item">
                        <div class="col-md-2"><time>11:00 AM</time></div>
                        <div class="col-md-10">
                            <div class="speaker">
                                <img src="img/speakers/2.jpg" alt="Hubert Hirthe">
                            </div>
                            <h4>Et voluptatem iusto dicta nobis. <span>Hubert Hirthe</span></h4>
                            <p>Maiores dignissimos neque qui cum accusantium ut sit sint inventore.</p>
                        </div>
                    </div>

                    <div class="row schedule-item">
                        <div class="col-md-2"><time>12:00 AM</time></div>
                        <div class="col-md-10">
                            <div class="speaker">
                                <img src="img/speakers/3.jpg" alt="Cole Emmerich">
                            </div>
                            <h4>Explicabo et rerum quis et ut ea. <span>Cole Emmerich</span></h4>
                            <p>Veniam accusantium laborum nihil eos eaque accusantium aspernatur.</p>
                        </div>
                    </div>

                    <div class="row schedule-item">
                        <div class="col-md-2"><time>02:00 PM</time></div>
                        <div class="col-md-10">
                            <div class="speaker">
                                <img src="img/speakers/4.jpg" alt="Jack Christiansen">
                            </div>
                            <h4>Qui non qui vel amet culpa sequi. <span>Jack Christiansen</span></h4>
                            <p>Nam ex distinctio voluptatem doloremque suscipit iusto.</p>
                        </div>
                    </div>

                    <div class="row schedule-item">
                        <div class="col-md-2"><time>03:00 PM</time></div>
                        <div class="col-md-10">
                            <div class="speaker">
                                <img src="img/speakers/5.jpg" alt="Alejandrin Littel">
                            </div>
                            <h4>Quos ratione neque expedita asperiores. <span>Alejandrin Littel</span></h4>
                            <p>Eligendi quo eveniet est nobis et ad temporibus odio quo.</p>
                        </div>
                    </div>

                    <div class="row schedule-item">
                        <div class="col-md-2"><time>04:00 PM</time></div>
                        <div class="col-md-10">
                            <div class="speaker">
                                <img src="img/speakers/6.jpg" alt="Willow Trantow">
                            </div>
                            <h4>Quo qui praesentium nesciunt <span>Willow Trantow</span></h4>
                            <p>Voluptatem et alias dolorum est aut sit enim neque veritatis.</p>
                        </div>
                    </div>

                </div>
                <!-- End Schdule Day 2 -->

                <!-- Schdule Day 3 -->
                <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-3">

                    <div class="row schedule-item">
                        <div class="col-md-2"><time>10:00 AM</time></div>
                        <div class="col-md-10">
                            <div class="speaker">
                                <img src="img/speakers/2.jpg" alt="Hubert Hirthe">
                            </div>
                            <h4>Et voluptatem iusto dicta nobis. <span>Hubert Hirthe</span></h4>
                            <p>Maiores dignissimos neque qui cum accusantium ut sit sint inventore.</p>
                        </div>
                    </div>

                    <div class="row schedule-item">
                        <div class="col-md-2"><time>11:00 AM</time></div>
                        <div class="col-md-10">
                            <div class="speaker">
                                <img src="img/speakers/3.jpg" alt="Cole Emmerich">
                            </div>
                            <h4>Explicabo et rerum quis et ut ea. <span>Cole Emmerich</span></h4>
                            <p>Veniam accusantium laborum nihil eos eaque accusantium aspernatur.</p>
                        </div>
                    </div>

                    <div class="row schedule-item">
                        <div class="col-md-2"><time>12:00 AM</time></div>
                        <div class="col-md-10">
                            <div class="speaker">
                                <img src="img/speakers/1.jpg" alt="Brenden Legros">
                            </div>
                            <h4>Libero corrupti explicabo itaque. <span>Brenden Legros</span></h4>
                            <p>Facere provident incidunt quos voluptas.</p>
                        </div>
                    </div>

                    <div class="row schedule-item">
                        <div class="col-md-2"><time>02:00 PM</time></div>
                        <div class="col-md-10">
                            <div class="speaker">
                                <img src="img/speakers/4.jpg" alt="Jack Christiansen">
                            </div>
                            <h4>Qui non qui vel amet culpa sequi. <span>Jack Christiansen</span></h4>
                            <p>Nam ex distinctio voluptatem doloremque suscipit iusto.</p>
                        </div>
                    </div>

                    <div class="row schedule-item">
                        <div class="col-md-2"><time>03:00 PM</time></div>
                        <div class="col-md-10">
                            <div class="speaker">
                                <img src="img/speakers/5.jpg" alt="Alejandrin Littel">
                            </div>
                            <h4>Quos ratione neque expedita asperiores. <span>Alejandrin Littel</span></h4>
                            <p>Eligendi quo eveniet est nobis et ad temporibus odio quo.</p>
                        </div>
                    </div>

                    <div class="row schedule-item">
                        <div class="col-md-2"><time>04:00 PM</time></div>
                        <div class="col-md-10">
                            <div class="speaker">
                                <img src="img/speakers/6.jpg" alt="Willow Trantow">
                            </div>
                            <h4>Quo qui praesentium nesciunt <span>Willow Trantow</span></h4>
                            <p>Voluptatem et alias dolorum est aut sit enim neque veritatis.</p>
                        </div>
                    </div>

                </div>
                <!-- End Schdule Day 2 -->

            </div>

        </div>

    </section>
    @endif
    <!--==========================
      Venue Section
    ============================-->
    <section id="local" class="wow fadeInUp">

        <div class="container-fluid">

            <div class="section-header">
                <h2>Local do Evento</h2>
                <p>Informações e galeria de localização do local do evento</p>
            </div>

            <div class="row no-gutters">
                <div class="col-lg-6 venue-map">
                    <iframe src="{{$evento->link_mapa}}" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>

                <div class="col-lg-6 venue-info">
                    <div class="row justify-content-center">
                        <div class="col-11 col-lg-8">
                            <h3>{{$evento->local}}</h3>
                            <p>{{$evento->sobre_local}}</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="container-fluid venue-gallery-container">
            <div class="row no-gutters">

                <div class="col-lg-3 col-md-4">
                    <div class="venue-gallery">
                        <a href="img/venue-gallery/1.jpg" class="venobox" data-gall="venue-gallery">
                            <img src="img/venue-gallery/1.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="venue-gallery">
                        <a href="img/venue-gallery/2.jpg" class="venobox" data-gall="venue-gallery">
                            <img src="img/venue-gallery/2.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="venue-gallery">
                        <a href="img/venue-gallery/3.jpg" class="venobox" data-gall="venue-gallery">
                            <img src="img/venue-gallery/3.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="venue-gallery">
                        <a href="img/venue-gallery/4.jpg" class="venobox" data-gall="venue-gallery">
                            <img src="img/venue-gallery/4.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="venue-gallery">
                        <a href="img/venue-gallery/5.jpg" class="venobox" data-gall="venue-gallery">
                            <img src="img/venue-gallery/5.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="venue-gallery">
                        <a href="img/venue-gallery/6.jpg" class="venobox" data-gall="venue-gallery">
                            <img src="img/venue-gallery/6.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="venue-gallery">
                        <a href="img/venue-gallery/7.jpg" class="venobox" data-gall="venue-gallery">
                            <img src="img/venue-gallery/7.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="venue-gallery">
                        <a href="img/venue-gallery/8.jpg" class="venobox" data-gall="venue-gallery">
                            <img src="img/venue-gallery/8.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

            </div>
        </div>

    </section>
    @if ($evento->hoteis)
    <!--==========================
      Hotels Section
    ============================-->
    <section id="hoteis" class="section-with-bg wow fadeInUp">

        <div class="container">
            <div class="section-header">
                <h2>Hotéis</h2>
                <p>Estes são alguns hotéis próximos</p>
            </div>

            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div class="hotel">
                        <div class="hotel-img">
                            <img src="img/hotels/1.jpg" alt="Hotel 1" class="img-fluid">
                        </div>
                        <h3><a href="#">Hotel 1</a></h3>
                        <div class="stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <p>0.4 Mile from the Venue</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="hotel">
                        <div class="hotel-img">
                            <img src="img/hotels/2.jpg" alt="Hotel 2" class="img-fluid">
                        </div>
                        <h3><a href="#">Hotel 2</a></h3>
                        <div class="stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-full"></i>
                        </div>
                        <p>0.5 Mile from the Venue</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="hotel">
                        <div class="hotel-img">
                            <img src="img/hotels/3.jpg" alt="Hotel 3" class="img-fluid">
                        </div>
                        <h3><a href="#">Hotel 3</a></h3>
                        <div class="stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <p>0.6 Mile from the Venue</p>
                    </div>
                </div>

            </div>
        </div>

    </section>
    @endif
    @if ($evento->galeria)
    <!--==========================
      Gallery Section
    ============================-->
    <section id="galeria" class="wow fadeInUp">

        <div class="container">
            <div class="section-header">
                <h2>Galeria</h2>
                <p>Confira nossa galeria de eventos recentes</p>
            </div>
        </div>

        <div class="owl-carousel gallery-carousel">
            <a href="img/gallery/1.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/1.jpg" alt=""></a>
            <a href="img/gallery/2.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/2.jpg" alt=""></a>
            <a href="img/gallery/3.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/3.jpg" alt=""></a>
            <a href="img/gallery/4.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/4.jpg" alt=""></a>
            <a href="img/gallery/5.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/5.jpg" alt=""></a>
            <a href="img/gallery/6.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/6.jpg" alt=""></a>
            <a href="img/gallery/7.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/7.jpg" alt=""></a>
            <a href="img/gallery/8.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/8.jpg" alt=""></a>
        </div>

    </section>
    @endif

    <!--==========================
      Sponsors Section
    ============================-->
    <section id="organizacao" class="section-with-bg wow fadeInUp">

        <div class="container">
            <div class="section-header">
                <h2>Organização/Apoio</h2>
            </div>

            <div class="row no-gutters supporters-wrap clearfix">

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="supporter-logo">
                        <img src="img/supporters/1.png" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="supporter-logo">
                        <img src="img/supporters/2.png" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="supporter-logo">
                        <img src="img/supporters/3.png" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="supporter-logo">
                        <img src="img/supporters/4.png" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="supporter-logo">
                        <img src="img/supporters/5.png" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="supporter-logo">
                        <img src="img/supporters/6.png" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="supporter-logo">
                        <img src="img/supporters/7.png" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="supporter-logo">
                        <img src="img/supporters/8.png" class="img-fluid" alt="">
                    </div>
                </div>

            </div>

        </div>

    </section>


    <!--==========================
      F.A.Q Section
    ============================-->
    <section id="faq" class="wow fadeInUp">

        <div class="container">

            <div class="section-header">
                <h2>PERGUNTAS FREQUENTES
                </h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <ul id="faq-list">
                        @if($evento->faq)

                        @foreach($evento->faq as $faq)
                        <li>
                            <a data-toggle="collapse" class="collapsed" href="#faq1">Non consectetur a erat nam at lectus urna duis? <i class="fa fa-minus-circle"></i></a>
                            <div id="faq1" class="collapse" data-parent="#faq-list">
                                <p>
                                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                                </p>
                            </div>
                        </li>
                        @endforeach
                        @else
                        <div class="" style=" text-align: center; padding: 100px  0;">

                            <h3>Use o fomulario abaixo, para nos contatar e tirar suas dúvidas.</h3>

                        </div>
                        @endif
                    </ul>
                </div>
            </div>

        </div>

    </section>









    @if(0)
    <!--==========================
      Subscribe Section
    ============================-->
    <section id="subscribe">
        <div class="container wow fadeInUp">
            <div class="section-header">
                <h2>Newsletter</h2>
                <p>Rerum numquam illum recusandae quia mollitia consequatur.</p>
            </div>

            <form method="POST" action="#">
                <div class="form-row justify-content-center">
                    <div class="col-auto">
                        <input type="text" class="form-control" placeholder="Enter your Email">
                    </div>
                    <div class="col-auto">
                        <button type="submit">Subscribe</button>
                    </div>
                </div>
            </form>

        </div>
    </section>

    <!--==========================
      Buy Ticket Section
    ============================-->
    <section id="buy-tickets" class="section-with-bg wow fadeInUp">
        <div class="container">

            <div class="section-header">
                <h2>Buy Tickets</h2>
                <p>Velit consequatur consequatur inventore iste fugit unde omnis eum aut.</p>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-5 mb-lg-0">
                        <div class="card-body">
                            <h5 class="card-title text-muted text-uppercase text-center">Standard Access</h5>
                            <h6 class="card-price text-center">$150</h6>
                            <hr>
                            <ul class="fa-ul">
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Regular Seating</li>
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Coffee Break</li>
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Custom Badge</li>
                                <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Community Access</li>
                                <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Workshop Access</li>
                                <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>After Party</li>
                            </ul>
                            <hr>
                            <div class="text-center">
                                <button type="button" class="btn" data-toggle="modal" data-target="#buy-ticket-modal" data-ticket-type="standard-access">Buy Now</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card mb-5 mb-lg-0">
                        <div class="card-body">
                            <h5 class="card-title text-muted text-uppercase text-center">Pro Access</h5>
                            <h6 class="card-price text-center">$250</h6>
                            <hr>
                            <ul class="fa-ul">
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Regular Seating</li>
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Coffee Break</li>
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Custom Badge</li>
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Community Access</li>
                                <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Workshop Access</li>
                                <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>After Party</li>
                            </ul>
                            <hr>
                            <div class="text-center">
                                <button type="button" class="btn" data-toggle="modal" data-target="#buy-ticket-modal" data-ticket-type="pro-access">Buy Now</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Pro Tier -->
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-muted text-uppercase text-center">Premium Access</h5>
                            <h6 class="card-price text-center">$350</h6>
                            <hr>
                            <ul class="fa-ul">
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Regular Seating</li>
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Coffee Break</li>
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Custom Badge</li>
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Community Access</li>
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Workshop Access</li>
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>After Party</li>
                            </ul>
                            <hr>
                            <div class="text-center">
                                <button type="button" class="btn" data-toggle="modal" data-target="#buy-ticket-modal" data-ticket-type="premium-access">Buy Now</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Modal Order Form -->
        <div id="buy-ticket-modal" class="modal fade">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Buy Tickets</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="#">
                            <div class="form-group">
                                <input type="text" class="form-control" name="your-name" placeholder="Your Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="your-email" placeholder="Your Email">
                            </div>
                            <div class="form-group">
                                <select id="ticket-type" name="ticket-type" class="form-control">
                                    <option value="">-- Select Your Ticket Type --</option>
                                    <option value="standard-access">Standard Access</option>
                                    <option value="pro-access">Pro Access</option>
                                    <option value="premium-access">Premium Access</option>
                                </select>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn">Buy Now</button>
                            </div>
                        </form>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

    </section>
    @endif











    <!--==========================
      Contact Section
    ============================-->
    <section id="contato" class="section-bg wow fadeInUp">

        <div class="container">

            <div class="section-header">
                <h2>Contate-nos</h2>
                <p>Fique a vontade para nos mandar uma mensagem.</p>
            </div>

            <div class="row contact-info">

                <div class="col-md-4">
                    <div class="contact-address">
                        <i class="ion-ios-location-outline"></i>
                        <h3>Endereço</h3>
                        <address>{{$evento->local_organizacao}}</address>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-phone">
                        <i class="ion-ios-telephone-outline"></i>
                        <h3>Contato</h3>
                        <p><a href="tel:+55{{$evento->contato}}">{{$evento->contato}}</a></p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-email">
                        <i class="ion-ios-email-outline"></i>
                        <h3>Email</h3>
                        <p><a href="mailto:{{$evento->email}}">{{$evento->email}}</a></p>
                    </div>
                </div>

            </div>

            <div class="form">
                <div id="sendmessage">Sua mensagem foi enviada. Obrigado!</div>
                <div id="errormessage"></div>
                <form action="" method="post" role="form" class="contactForm">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Seu nome" data-rule="minlen:4" data-msg="Por favor insira pelo menos 4 caracteres" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Seu Email" data-rule="email" data-msg="Por favor insira um email válido" />
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto" data-rule="minlen:4" data-msg="Porfavor insira pelo menos 8 caracter" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Por favor escreva sua mensagem para nós" placeholder="Menssagem"></textarea>
                        <div class="validation"></div>
                    </div>
                    <div class="text-center"><button type="submit">Enviar Mensagem</button></div>
                </form>
            </div>

        </div>
    </section><!-- #contact -->

</main>
@endsection