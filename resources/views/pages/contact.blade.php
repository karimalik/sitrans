@extends('layouts.app')

@section('title')
 ::Sitrans:Contact-Us:Gestion De Stocks:Import:Export:Conseil
@endsection


@section('content')
    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid mb-5">
        <div class="container text-center py-5">
            <h1 class="text-white display-3">Contact</h1>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="{{ route('index') }}">Accueil</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0">Contact</p>
            </div>
        </div>
    </div>
    <!-- Header End -->

     <!-- Contact Start -->
     <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 pb-4 pb-lg-0">
                    <div class="bg-primary text-dark text-center p-4">
                        <h4 class="m-0"><i class="fa fa-map-marker-alt text-white mr-2"></i>Bonanjo,Immeuble OMCC, Première étage</h4>
                    </div>
                    <iframe style="width: 100%; height: 470px;"
                        src="https://maps.google.com/maps?q=Douala,%20bonanjo&t=k&z=15&ie=UTF8&iwloc=&output=embed"
                        frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="col-lg-7">
                    <h6 class="text-primary text-uppercase font-weight-bold">Contactez-Nous</h6>
                    <p class="mb-4">Contactez-nous pour toute question.</p>
                    <div class="contact-form bg-secondary" style="padding: 30px;">
                        <div id="success"></div>
                        <form method="POST" action="{{ route('contact.store')}}">
                            @csrf
                            <div class="control-group">
                                <input type="text" class="form-control border-0 p-4" name="name" placeholder="Nom"
                                    required="required"/>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control border-0 p-4" name="email" placeholder="Email"
                                    required="required" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control border-0 p-4" name="sujet" placeholder="Sujet"
                                    required="required" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control border-0 py-3 px-4" rows="3" name="message" placeholder="Message"
                                    required="required"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-primary py-3 px-4" type="submit" id="sendMessageButton">Send
                                    Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
