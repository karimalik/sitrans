@extends('layouts.app')

@section('title')
 ::Sitrans:Services:Transport Maritime:Imprimerie:Douane:Commerce Générale:Negoce International
@endsection


@section('content')
    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid mb-5">
        <div class="container text-center py-5">
            <h1 class="text-white display-3">Services</h1>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="{{ route('index') }}">Accueil</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0">Services</p>
            </div>
        </div>
    </div>
    <!-- Header End -->



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
                </div>
                <div class="col-lg-3 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary mb-4 p-4">
                        <i class="fa fa-2x fa-warehouse text-dark pr-3"></i>
                        <h6 class="text-white font-weight-medium m-0">Gestion de stocks</h6>
                    </div>
                    <p>Nous mettons à la disposition de nos différents clients des solutions d’entreposage et de stockage de leurs marchandises.</p>

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
                </div>
                <div class="col-lg-3 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary mb-4 p-4">
                        <i class="fa fa-2x fa-user-tie text-dark pr-3"></i>
                        <h6 class="text-white font-weight-medium m-0">Conseil</h6>
                    </div>
                    <p>
                        Les importateurs et les exportateurs non pas toujours la bonne
                        information, Ils ont besoin d’un professionnel qui maitrise le commerce International
                        pour faciliter les conditions d’exportation/importation de la marchandise échangée.
                    </p>
                </div>
                <div class="col-lg-3 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary mb-4 p-4">
                        <i class="fa fa-2x fa-handshake text-dark pr-3"></i>
                        <h6 class="text-white font-weight-medium m-0">Négoce International </h6>
                    </div>
                    <p>
                        Pour vos activités d'échange ou de commerce à grande et petite échelle,
                        nos consultants vous aideront à trouver des produits de qualité au plus bas prix.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->

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
                                    <option selected>Choix...</option>
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


    <!-- Testimonial Start -->
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
    <!-- Testimonial End -->
@endsection
