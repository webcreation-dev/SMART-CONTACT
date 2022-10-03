@extends('layouts.app')

@section('content')

<?php 

	$categories = [
        'Agriculture - Paysage',
        'Alimentation - Agroalimentaire',
        'Animaux',
        'Architecture - Décoration',
        'Armée – Sécurité - Secours',
        'Artisanat d’art – Design - Mode',
        'Banque - Finance - Assurance',
        'Biologie - Chimie',
        'BTP - Urbanisme',
        'Cinéma – Audiovisuel - Jeux vidéo',
        'Commerce - Immobilier',
        'Communication - Journalisme - Marketing',
        'Culture – Spectacle- Patrimoine',
        'Droit - Justice',
        'Edition - Imprimerie - Livre',
        'Electricité - Electronique - Robotique',
        'Energie',
        'Enseignement - Formation - Insertion',
    ];

?>

<div class="top">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="logo">
						<a href="/">
							<img class="img-fluid logochange" src="images/logo-smart.png" alt="logo" title="logo" />
						</a>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 search">
					
				</div>

				<div class="col-md-5 col-sm-7 col-xs-12" style="text-align: right">
					<ul class="list-inline icon">

						@auth
							<li>
							@if (Auth::user()->service1 == null )
								<a href="{{ route('create.contact') }}"><i class="la la-plus-square"></i> <span>Mettre à jour votre Smart Contact</span></a>
							@else
								<a href="{{ route('view.contact') }}"><i class="la la-plus-square"></i> <span>Votre Smart Contact</span></a>
							@endif
						    </li>

							<li>
								<a href="{{ url('/logout') }}" onclick="event.preventDefault();
						document.getElementById('logout-form').submit();">
								  Déconnexion
								</a>
                                
								<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
								  {{ csrf_field() }}
								</form>
							  </li>

						@else	
                        <li><a href="http://127.0.0.1:8000/register"><i class="la la-plus-square"></i> <span>Créer un
                            compte</span></a></li>
                <li><a href="{{ route('sso.login') }}"><i class="la la-plus-square"></i>
                        <span>Connexion</span></a></li>
							
						@endauth
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="topimage">
		<img src="images/bck_bg.jpg" class="img-fluid" alt="image" title="image" />
	</div>

    <div class="bread-crumb">
        
    </div>

    <section style="padding-top:0px !important;" class="candidate-details pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="candidate-profile">
                        @if (Auth::user()->imageProfil != null)
                            <img width="120" height="120" src="{{ asset('storage/images/'. Auth::user()->imageProfil) }}"
                            style="border-radius: 50%; margin:auto;border: 3px solid #fed700;" alt="logo">
                        @else
                            <img width="120" height="120" src="{{ asset('images/profil.png') }}"
                                style="border-radius: 50%; margin:auto;" alt="logo">
                        @endif
                        <p></p>
                        <h3 style="font-size: 18px;">NOMS & PRENOMS</h3>
                        <p>{{ Auth::user()->name }}</p>

                        <h3 style="font-size: 18px;">COMPETENCES</h3>
                        <p> {{ Auth::user()->service1 }} <strong>{{ Auth::user()->service2 == null ? "" : "|" }}</strong>  
                             {{ Auth::user()->service2 }} <strong>{{ Auth::user()->service3 == null ? "" : "|" }}</strong> {{ Auth::user()->service3 }} </p>
                        
                        <h3 style="font-size: 18px;">TELEPHONE</h3>
                        <p>{{ Auth::user()->numberPhone }}</p>
                        
                        <h3 style="font-size: 18px;">EMAIL</h3>
                        <p>{{ Auth::user()->email }}</p>
                    </div>
                </div>
                <div class="col-lg-8">

                    <div class="candidate-info-text candidate-education">
                        <h3>PROFESSIONS ET DETAILS</h3>

                        <div class="education-info">
                            <h4>{{ Auth::user()->service1 }}</h4>
                            <p>{{ Auth::user()->description1 }}</p>
                        </div>

                        <div class="education-info">
                            <h4>{{ Auth::user()->service2 }}</h4>
                            <p>{{ Auth::user()->description2 }}</p>
                        </div>

                        <div class="education-info">
                            <h4>{{ Auth::user()->service3 }}</h4>
                            <p>{{ Auth::user()->description3 }}</p>
                        </div>
                    </div>
                    <div class="candidate-info-text text-center">
                        
                        <div class="theme-btn">
                            <span>
                                <a href="{{ route('edit.get.contact') }}" style="background: #FED700; color: black;" class="default-btn">Mettre à jour ton Smart Contact</a>
                            </span>

                            <span>
                                <a href="{{ route('ask.vue.service') }}" style="background: #FED700; color: black;" class="default-btn">Demande un Metier</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection
