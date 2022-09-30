@extends('layouts.app')

@section('title')
 ::Sitrans:About-Us:Commerce International:transport maritime
@endsection

@section('content')
    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid mb-5">
        <div class="container text-center py-5">
            <h1 class="text-white display-3">{{__('A Propos')}}</h1>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="{{ route('index') }}">{{__('Accueil')}}</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0">{{__('A Propos')}}</p>
            </div>
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
                        <h3 class="m-0">26+ Ans D'Experience</h3>
                    </div>
                </div>
                <div class="col-lg-7">
                    <h6 class="text-primary text-uppercase font-weight-bold">QUI SOMMES NOUS ?</h6>
                    <h1 class="mb-4">Votre Transitaire Fiable et Plus Rapide</h1>
                    <p class="mb-4">
                        La société internationale de transit « SITRANS » est une entreprise
                        exerçant principalement ses activités dans le secteur du commerce internationale et du
                        transport basée à Douala. Il s’agit d’un groupe de professionnels dotés d’une très grande
                        expérience au service des importateurs et exportateurs depuis plus 26 ans. Ces différents
                        professionnels et experts   vous aideront à mener à bien efficacement tous vos besoins et
                        opérations complexes sur le plan national et international concernant le transit Douanes;
                        l’import et l’export ; le commerce Général des marchandises.
                    </p>
                    <hr>
                    <h6 class="text-primary text-uppercase font-weight-bold">Pourquoi nous choisir?</h6>
                    <p class="mb-4">
                        Depuis plus de 26 ans La Société Internationale de Transit « SITRANS SARL » met à la disposition du monde entier son expertise dans le domaine du transport et de prestations de services divers
                        Spécialiste du transit et du transport en qualité de Commissionnaire en Douanes agrée (CDA) Justifiée par notre agrément national et notre agrément CEMAC, Dotée d’une forte expérience et d’une très grande
                        maitrise du domaine, nous possédons les moyens de vous offrir des services de qualité hautement supérieur tout en utilisant un très grand nombre de partenaires présent dans notre vaste réseau. Notre Principal Objectif est de toujours satisfaire aux attentes de nos différents clients dans le monde pour établir une relation de confiance avec celui-ci et par la même occasion étendre notre Notoriété :
                        « C’est l’efficacité en moindre cout dans toutes vos opérations qui confirment la confiance ».

                    </p>
                </div>

            </div>
        </div>
    </div>
    <!-- About End -->




    {{-- <!-- Team Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <h6 class="text-primary text-uppercase font-weight-bold">Notre Equipe</h6>
                <h1 class="mb-4">Découvrez notre équipe</h1>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="team card position-relative overflow-hidden border-0 mb-5">
                        <img class="card-img-top" src="img/team-1.jpg" alt="">
                        <div class="card-body text-center p-0">
                            <div class="team-text d-flex flex-column justify-content-center bg-secondary">
                                <h5 class="font-weight-bold">Full Name</h5>
                                <span>Designation</span>
                            </div>
                            <div class="team-social d-flex align-items-center justify-content-center bg-primary">
                                <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-outline-dark btn-social" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team card position-relative overflow-hidden border-0 mb-5">
                        <img class="card-img-top" src="img/team-2.jpg" alt="">
                        <div class="card-body text-center p-0">
                            <div class="team-text d-flex flex-column justify-content-center bg-secondary">
                                <h5 class="font-weight-bold">Full Name</h5>
                                <span>Designation</span>
                            </div>
                            <div class="team-social d-flex align-items-center justify-content-center bg-primary">
                                <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-outline-dark btn-social" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team card position-relative overflow-hidden border-0 mb-5">
                        <img class="card-img-top" src="img/team-3.jpg" alt="">
                        <div class="card-body text-center p-0">
                            <div class="team-text d-flex flex-column justify-content-center bg-secondary">
                                <h5 class="font-weight-bold">Full Name</h5>
                                <span>Designation</span>
                            </div>
                            <div class="team-social d-flex align-items-center justify-content-center bg-primary">
                                <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-outline-dark btn-social" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team card position-relative overflow-hidden border-0 mb-5">
                        <img class="card-img-top" src="img/team-4.jpg" alt="">
                        <div class="card-body text-center p-0">
                            <div class="team-text d-flex flex-column justify-content-center bg-secondary">
                                <h5 class="font-weight-bold">Full Name</h5>
                                <span>Designation</span>
                            </div>
                            <div class="team-social d-flex align-items-center justify-content-center bg-primary">
                                <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-outline-dark btn-social" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End --> --}}
@endsection
