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
				{{-- <div class="form-group">
					<input wire:model.debounce.250ms="search" name="s" value="" class="form-control"
						placeholder="Enter Keyword" type="text">

					<button type="submit" value="submit" class="btn"><i class="icon_search"
							aria-hidden="true"></i></button>
				</div> --}}
			</div>

			<div class="col-md-5 col-sm-7 col-xs-12" style="text-align: right">
				<ul class="list-inline icon">

					@auth
					<li>
						@if (Auth::user()->service1 == null )
						<a href="{{ route('create.contact') }}"><i class="la la-plus-square"></i> <span>Mettre à jour
								votre Smart Contact</span></a>
						@else
						<a href="{{ route('view.contact') }}"><i class="la la-plus-square"></i> <span>Votre Smart
								Contact</span></a>
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
								compte </span></a></li>
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
<hr>

<div class="bread-crumb">

</div>

<div class="job-post pt-20 pb-30">
	<div class="container">
		<form enctype="multipart/form-data" method="POST" action="{{ route('ask.new.service') }}" class="job-post-from">
			@csrf
			<h2>Faire une demande de metier</h2>
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label>Nom & Prenoms</label>
						<input name="name" type="text" class="form-control" id="exampleInput1"
							placeholder="Nom et Prenoms" required>
					</div>
				</div>

				<div class="col-md-12">
					<div class="form-group">
						<label for="exampleFormControlTextarea1">Categorie</label>
						<textarea required class="form-control description-area" id="exampleFormControlTextarea1"
							rows="6" name="service" placeholder="Categorie"></textarea>
					</div>
				</div>

				<div class="col-md-12 text-center">
					<button type="submit"
						style="border-radius: 0px !important;background: #FED700 !important; color: black;"
						class="post-btn">
						Envoyer
					</button>
				</div>
			</div>
		</form>
	</div>
</div>



@endsection