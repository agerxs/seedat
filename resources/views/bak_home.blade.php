@extends('layout.frontlayout')
@section('header')
    <section class="">
        <img src="images/banner.jpg" alt="" width="100%">
    </section>
@endsection

@section('content')
<div class="album text-muted">
    <div class="container">
        <div class="row p-5">
            <div class="col-lg-12  shadow p-5 bg-white " style="border-radius: 50px">
                <div class="row text-center"><div class="col-lg-12">
                <h2 class="display-6 primary font-weight-bold">Simulez une campagne</h2>
                <h6>en fonction de vos objectifs marketing</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 text-center primary font-weight-bold">
                        <img class="bd-placeholder-img rounded-circle" src="/images/1.jpg" height="50"  alt="1"/>
                        <h6 class="secondary font-weight-bold text-center pt-2">Offre promotionnelle d'un bien ou service</h6>
                        <p>
                            -50% Vente telephone portable. <br>
                            Livraison de colis partout
                            en Côte d’Ivoire 100ère livraisons
                        </p>

                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4 text-center primary font-weight-bold">
                        <img class="bd-placeholder-img rounded-circle" src="/images/2.jpg" height="50"  alt="1"/><h6 class="secondary font-weight-bold text-center pt-2">Passer une annonce</h6>
                        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4 text-center primary font-weight-bold">
                        <img class="bd-placeholder-img rounded-circle" src="/images/3.jpg" height="50"  alt="1"/><h6 class="secondary font-weight-bold text-center pt-2">Publicité</h6>
                        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>

                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div>
        </div>
        <div class="row p-5 ">
        <div class="col-lg-12">
            <h2 class="font-weight-bold display-6 text-center primary pb-5">Commandez vos espaces partout en Abidjan</h2>
            <div class="col-lg-12  shadow p-5 bg-white border-rounded">
                <div class="row font-weight-bold">
                    <div class="col-lg-12">
                        <h4 class="font-weight-bold text-center mb-5 primary">Réservez jusqu'à 100 véhicules dans toutes les communes d'Abidjan</h4>
                    </div>

                    <div class="col-lg-6">
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="secondary">Commune</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1" class="secondary">Nombre de véhicules</label>
                                        <input type="number" class="form-control" id="exampleInputPassword1">
                                    </div>
                                </div>
                                <div class="col-lg-6"><div class="form-group">
                                        <label for="exampleInputPassword1" class="secondary">Votre cible</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1">
                                    </div></div>
                            </div>
                            <!--<div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>-->

                    </div>
                    <div class="col-lg-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="secondary">Objectifs Marketing</label>
                                <input type="number" class="form-control primary" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <small id="emailHelp" class="form-text text-muted">Lorem Ipsum.</small>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1" class="secondary">Début de la campagne</label>
                                        <input type="date" class="form-control" id="exampleInputPassword1">
                                    </div>
                                </div>
                                <div class="col-lg-6"><div class="form-group">
                                        <label for="exampleInputPassword1" class="secondary">Fin de la campagne</label>
                                        <input type="date" class="form-control" id="exampleInputPassword1">
                                    </div></div>
                            </div>
                        <button type="submit" class="btn btn-primary">Envoyer</button>
                    </form>

                    </div>

                </div></div>
        </div>
        </div>
    </div>
</div>
@endsection
