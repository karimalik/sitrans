@extends('layouts.app')

@section('title')
 ::Sitrans:Commerce International:Logitique et Transport
@endsection

@section('content')
    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid mb-5">
        <div class="container text-center py-5">
            <h1 class="text-white display-3 mb-5"> {{__('SITRANS')}} </h1>
            <h1 class="text-primary mb-4">Société Internationale De Transit</h1>
        </div>
    </div>
    <!-- Header End -->

    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 pb-4 pb-lg-0">
                    <img class="img-fluid w-100" src="img/about.jpg" alt="">
                    <div class="bg-primary text-dark text-center p-4">
                        <h3 class="m-0">26+ Ans D'Experiences</h3>
                    </div>
                </div>
                <div class="col-lg-7">
                    <h6 class="text-primary text-uppercase font-weight-bold">QUI SOMMES NOUS ?</h6>
                    <h1 class="mb-4">Votre Transitaire Fiable et Plus Rapide</h1>
                    <p class="mb-4">La société internationale de transit « SITRANS » est une entreprise
                        exerçant principalement ses activités dans le secteur du commerce internationale et du
                        transport basée à Douala. Il s’agit d’un groupe de professionnels dotés d’une très grande
                        expérience au service des importateurs et exportateurs depuis plus 26 ans. Ces différents
                        professionnels et experts   vous aideront à mener à bien efficacement tous vos besoins et
                        opérations complexes sur le plan national et international concernant le transit Douanes;
                        l’import et l’export ; le commerce Général des marchandises.
                    </p>
                    <a class="border-bottom text-decoration-none" href="{{ route('about')}}">Voir Plus</a>
                    {{-- <div class="d-flex align-items-center pt-2">
                        <button type="button" class="btn-play" data-toggle="modal"
                            data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">
                            <span></span>
                        </button>
                        <h5 class="font-weight-bold m-0 ml-4">Play Video</h5>
                    </div> --}}
                </div>
            </div>
        </div>
        <!-- Video Modal -->
        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!--  Quote Request Start -->
    <div class="container-fluid bg-secondary my-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 py-5 py-lg-0">
                    <h6 class="text-primary text-uppercase font-weight-bold">Obtenez Un Devis</h6>
                    <h1 class="mb-4">Demandez un devis gratuit</h1>
                    <p class="mb-4">
                        Pour mieux vous servir de bout en bout, SITRANS a maîtrisé tous les métiers de la chaîne logistique et s’est entourée des meilleurs spécialistes
                        du domaine afin d’assurer SECURITE-FLUIDITE-RAPIDITE-RESPECT DES DELAIS
                    </p>

                </div>
                <div class="col-lg-5">
                    <div class="bg-primary py-5 px-4 px-sm-5">
                        <form class="py-5">
                            <div class="form-group">
                                <input type="text" class="form-control border-0 p-4" placeholder="Nom" required="required" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control border-0 p-4" placeholder="Email" required="required" />
                            </div>
                            <div class="form-group">
                                <textarea class="form-control border-0 p-4" rows="3" name="message" placeholder="Message"
                                    required="required"></textarea>
                            </div>
                            <div class="form-group">
                                <select class="custom-select border-0 px-4" style="height: 47px;">
                                    <option selected>Choix..</option>
                                    <option value="Transit">Transit & Douane </option>
                                    <option value="Logistique et Transport ">Logistique et Transport </option>
                                    <option value="Conseille">Conseil</option>
                                    <option value="Prestation Diverse">Prestation Diverse</option>
                                </select>
                            </div>
                            <div>
                                <button class="btn btn-dark btn-block border-0 py-3" type="submit">Envoyer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote Request Start -->

    <!-- Services Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <h6 class="text-primary text-uppercase font-weight-bold">Nos Services</h6>
                <h1 class="mb-4">Meilleur service logistique</h1>
            </div>
            <div class="row pb-3">
                <div class="col-lg-3 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary mb-4 p-4">
                        <i class="fa fa-2x fa-ship text-dark pr-3"></i>
                        <h6 class="text-white font-weight-medium m-0">Transit</h6>
                    </div>
                    <p>Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet diam sea est diam</p>
                    <a class="border-bottom text-decoration-none" href="{{route('service')}}">Voir Plus</a>
                </div>
                <div class="col-lg-3 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary mb-4 p-4">
                        <i class="fa fa-2x fa-truck text-dark pr-3"></i>
                        <h6 class="text-white font-weight-medium m-0">Logistique & Transport</h6>
                    </div>
                    <p>
                        Nous offrons à nos clients différentes solutions de transport internationales
                        et des services de logistiques Hautement
                        professionnelles.
                    </p>
                    <a class="border-bottom text-decoration-none" href="{{route('service')}}">Voir Plus</a>
                </div>
                <div class="col-lg-3 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary mb-4 p-4">
                        <i class="fa fa-2x fa-warehouse text-dark pr-3"></i>
                        <h6 class="text-white font-weight-medium m-0">Gestion de stocks</h6>
                    </div>
                    <p>Nous mettons à la disposition de nos différents clients des solutions d’entreposage et de stockage de leurs marchandises.</p>
                    <a class="border-bottom text-decoration-none" href="{{route('service')}}">Voir Plus</a>
                </div>
                <div class="col-lg-3 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary mb-4 p-4">
                        <i class="fa fa-2x fa-hard-hat text-dark pr-3"></i>
                        <h6 class="text-white font-weight-medium m-0">Prestation de services</h6>
                    </div>
                    <p>
                        Nous avons les moyens de vous offrir plusieurs autres services pour
                        des activités auxiliaires ou des besoins différents à l'instar de :
                        travaux d'impressions, fourniture de matériels informatiques, etc.
                    </p>
                    <a class="border-bottom text-decoration-none" href="{{route('service')}}">Voir Plus</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->

    <!-- Features Start -->
    <div class="container-fluid bg-secondary my-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img class="img-fluid w-100" src="img/feature.jpg" alt="">
                </div>
                <div class="col-lg-7 py-5 py-lg-0">
                    <h6 class="text-primary text-uppercase font-weight-bold">Pourquoi nous choisir? </h6>
                    <h1 class="mb-4">Des services logistiques plus rapides, plus sûrs et plus fiables</h1>
                    <p class="mb-4">
                        Depuis plus de 26 ans La Société Internationale de Transit « SITRANS SARL » met à la disposition du monde entier
                        son expertise dans le domaine du transport et de prestations de services divers.
                        Spécialiste du transit et du transport en qualité de Commissionnaire en Douanes agrée (CDA) Justifiée par notre agrément national et notre agrément CEMAC, Dotée d’une forte expérience et d’une très grande maitrise du domaine,
                        nous possédons les moyens de vous offrir des services de qualité.
                    </p>
                    <ul class="list-inline">
                        <li><h6><i class="far fa-dot-circle text-primary mr-3"></i>Best In Industry</h6>
                        <li><h6><i class="far fa-dot-circle text-primary mr-3"></i>Emergency Services</h6></li>
                        <li><h6><i class="far fa-dot-circle text-primary mr-3"></i>24/7 Customer Support</h6></li>
                    </ul>
                    <a href="{{ route('about')}}" class="btn btn-primary mt-3 py-2 px-4">Voir Plus</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    {{-- <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center pb-2">
                <h6 class="text-primary text-uppercase font-weight-bold">Testimonial</h6>
                <h1 class="mb-4">Our Clients Say</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="position-relative bg-secondary p-4">
                    <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid rounded-circle" src="img/testimonial-1.jpg" style="width: 60px; height: 60px;" alt="">
                        <div class="ml-3">
                            <h6 class="font-weight-semi-bold m-0">Client Name</h6>
                            <small>- Profession</small>
                        </div>
                    </div>
                    <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr clita lorem. Dolor ipsum sanct clita</p>
                </div>
                <div class="position-relative bg-secondary p-4">
                    <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid rounded-circle" src="img/testimonial-2.jpg" style="width: 60px; height: 60px;" alt="">
                        <div class="ml-3">
                            <h6 class="font-weight-semi-bold m-0">Client Name</h6>
                            <small>- Profession</small>
                        </div>
                    </div>
                    <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr clita lorem. Dolor ipsum sanct clita</p>
                </div>
                <div class="position-relative bg-secondary p-4">
                    <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid rounded-circle" src="img/testimonial-3.jpg" style="width: 60px; height: 60px;" alt="">
                        <div class="ml-3">
                            <h6 class="font-weight-semi-bold m-0">Client Name</h6>
                            <small>- Profession</small>
                        </div>
                    </div>
                    <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr clita lorem. Dolor ipsum sanct clita</p>
                </div>
                <div class="position-relative bg-secondary p-4">
                    <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid rounded-circle" src="img/testimonial-4.jpg" style="width: 60px; height: 60px;" alt="">
                        <div class="ml-3">
                            <h6 class="font-weight-semi-bold m-0">Client Name</h6>
                            <small>- Profession</small>
                        </div>
                    </div>
                    <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr clita lorem. Dolor ipsum sanct clita</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End --> --}}
@endsection
