@extends('layout.frontlayout')
@section('header')
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="height: 500px;overflow: hidden">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="images/header2.png" alt="First slide">
                {{--<div class="carousel-caption d-none d-md-block">
                    <h5>...</h5>
                    <p>...</p>
                </div>--}}
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/header1.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/header1.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true" style="background-image: url('images/prev.png')"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true" style="background-image: url('images/next.png')"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
@endsection

@section('content')
<div class="album text-muted">
    <div class="container">
        <div class="row p-5">
            <div class="col-lg-12 bg-white " style="border-radius: 50px">
                <div class="row text-center"><div class="col-lg-12">
                <h2 class="display-5 primary font-weight-bold">Où tout a commencé...</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center primary" style="font-size: 16px">
                        <p>
                            L’un de nos 2 co-fondateur passait BAC pour la seconde fois, avec tout le stress, l’anxiétéet la peur, d’un plausible et similaire échec...
                            <br><br>Exactement pendant la période des préparations, avant la composition finale, il se sentait plus ou moinsprêt à affronter les examens finaux, il se rendait chaque matin aux cours de renforcementauxquels il était fortement impliqué, il n’hésitait pas également à traiter tous les sujets possible
                            afin de mettre toutes les chances de son coté.<br><br>
                            Jusqu’à ce qu’il tombe sur cette annonce qui était dans l’un des transports en commun qu’il prenait
                            presque tous les matins et qui aurait pu lui échapper.
                            <br><br>Sur cette annonce on pouvait lire.
                            « Le BAC c’est 30% de connaissance et 70% de maitrise de soi »<br><br>
                            C’était la première fois qu’une annonce avait autant d’impact sur lui de surcroit dans un transport en commun...il a donc décidé un jour de contacter l’annonceur pour en savoir plus...
                            <br><br>Si nous avons rendu ce canal accéssible aujourd’hui c’est uniquementparce que cette annonce a sans doute changé le cours de sa vie,
                            lui a permis de reussir à son BAC mais également à gérer certaines situations
                            de stress et d’anxiété lié au travail et à la vie quotidienne...
                        </p>

                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div>
        </div>
    </div>
</div>
@endsection
