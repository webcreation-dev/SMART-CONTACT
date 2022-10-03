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
<hr>

<div class="bread-crumb">
	
</div>

<div class="job-post pt-20 pb-30">
	<div class="container">
		<form enctype="multipart/form-data" method="POST" action="{{ route('edit.post.contact') }}"
			class="job-post-from">
			@csrf
			<h2>Modifier votre Smart Contact</h2>
			<div class="row">
				@if ($errors->has('secteur1'))
					<span class="help-block" style="color:#721c24;background-color:#f8d7da;border-color:#f5c6cb">
						<strong>{{ $errors->first('secteur1') }}</strong>
					</span>
					
				@endif
				
				@if ($errors->has('secteur2'))
					<span class="help-block" style="color:#721c24;background-color:#f8d7da;border-color:#f5c6cb">
						<strong>{{ $errors->first('secteur2') }}</strong>
					</span>
					
				@endif
				
				@if ($errors->has('secteur3'))
					<span class="help-block" style="color:#721c24;background-color:#f8d7da;border-color:#f5c6cb">
						<strong>{{ $errors->first('secteur3') }}</strong>
					</span>
				@endif
				<hr>

				<div class="col-md-6">
					<div class="form-group">
						<label>Telephone</label>
						<input
							style="padding-left: 40px !important;font-size:16px !important; font-family:'Source Sans Pro', sans-serif !important; color:black !important;border:1px solid #aaa !important;"
							value="{{ Auth::user()->numberPhone }}" required class="form-control" id="phone" type="tel"
							name="phone" autocomplete="given-name" />
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label>Pays</label>
						<select name="country" required class="js-example-basic-single" id="countySel"
							style="width: 100%;">
							@if (Auth::user()->country != null )
							<option value="{{ Auth::user()->country }}" style="color:#B2B2B2;">{{ Auth::user()->country
								}}</option>
							@endif
							<option style="color:#B2B2B2;">Selectionner votre pays</option>
						</select>
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label>Region</label>
						<select name="state" required class="js-example-basic-single" id="stateSel"
							style="width: 100%;">
							@if (Auth::user()->region != null )
							<option value="{{ Auth::user()->region }}" style="color:#B2B2B2;">{{ Auth::user()->region }}
							</option>
							@endif
							<option style="color:#B2B2B2;">Selectionner votre region</option>
						</select>
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label>Ville</label>
						<select name="district" required class="js-example-basic-single" id="districtSel"
							style="width: 100%;">
							@if (Auth::user()->city != null )
							<option value="{{ Auth::user()->city }}" style="color:#B2B2B2;">{{ Auth::user()->city }}
							</option>
							@endif
							<option value="AL" style="color:#B2B2B2;">Selectionner votre ville</option>
						</select>
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label>Photo</label>
						<input
							style="padding-left: 40px !important;font-size:16px !important; font-family:'Source Sans Pro', sans-serif !important; color:black !important;border:1px solid #aaa !important;"
							class="form-control" type="file" name="image">
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label>Sexe</label>
						<select name="sexe" class="js-example-basic-single" style="width: 100%;">
							<option value="" style="color:#B2B2B2;">Selectionner votre sexe</option>
							<option  @if (Auth::user()->sexe == "Homme") selected="selected" @endif value="Homme" style="color:#B2B2B2;">Homme</option>
							<option @if (Auth::user()->sexe == "Femme") selected="selected" @endif value="Femme" style="color:#B2B2B2;">Femme</option>
						</select>
					</div>
				</div>

				<div class="col-md-12">
					<hr>
					<div class="row">
						<div class="col-4" style="text-align: left;">
							<label for="">Profession 1</label>
							<input id="desc1" name="profession" checked type="radio">
						</div>
						<div class="col-4" style="text-align: center;">
							<label for="">Profession 2</label>
							<input id="desc2" name="profession" type="radio">
						</div>
						<div class="col-4" style="text-align: right;">
							<label for="">Profession 3</label>
							<input id="desc3" name="profession" type="radio">
						</div>
					</div>
					<hr>
				</div>

				<div class="col-md-6 profession1">
					<div class="form-group">
						<label>Secteurs d'activité</label>
						<select name="categorie1" id="slct1" onchange="populate(this.id,'slct2')" class="js-example-basic-single" style="width: 100%;">
							<option value="" class="form-control">1- Selectionner votre secteur</option>
							
							@foreach ( $categories as $categorie )
								<option @if (Auth::user()->categorie1 == $categorie) selected="selected" @endif value="{{$categorie}}">{{$categorie}}</option>
							@endforeach
						</select>
					</div>
				</div>
				<div class="col-md-6 profession1">
					<div class="form-group">
						<label>Domaine d'acitivité</label>
						<select name="secteur1" id="slct2" class="js-example-basic-single" style="width: 100%;">
							<option value="" class="form-control">1- Selectionner votre domaine</option>
							<option selected="selected" value="{{Auth::user()->service1}}">{{Auth::user()->service1}}</option>
							
						</select>
					</div>
				</div>
				<div class="col-md- profession1">
					<div class="form-group">
						<label for="exampleFormControlTextarea1">1ère Description</label>
						<textarea required class="form-control description-area" id="exampleFormControlTextarea1"
							rows="6" name="desc1" placeholder="Description">{{Auth::user()->description1}}</textarea>
					</div>
				</div>

				<div class="col-md-6 profession2">
					<div class="form-group">
						<label>Secteurs d'acitivité</label>
						<select name="categorie2" id="slct3" onchange="populate(this.id,'slct4')" class="js-example-basic-single" style="width: 100%;">
							<option value="" class="form-control">2- Selectionner votre secteur</option>
							
							@foreach ( $categories as $categorie )
								<option @if (Auth::user()->categorie2 == $categorie) selected="selected" @endif value="{{$categorie}}">{{$categorie}}</option>
							@endforeach
						</select>
					</div>
				</div>
				<div class="col-md-6 profession2">
					<div class="form-group">
						<label>Domaine d'acitivité</label>
						<select name="secteur2" id="slct4" class="js-example-basic-single" style="width: 100%;">
							<option value="" class="form-control">2- Selectionner votre domaine</option>
							<option selected="selected" value="{{Auth::user()->service2}}">{{Auth::user()->service2}}</option>
							
						</select>
					</div>
				</div>
				<div class="col-md- profession2">
					<div class="form-group">
						<label for="exampleFormControlTextarea1">2e Description</label>
						@if (Auth::user()->description2 != null )
						<textarea class="form-control description-area" id="exampleFormControlTextarea1" rows="6"
							name="desc2" placeholder="Description">{{Auth::user()->description2}}</textarea>
						@else
						<textarea class="form-control description-area" id="exampleFormControlTextarea1" rows="6"
							name="desc2" placeholder="Description"></textarea>
						@endif
					</div>
				</div>

				<div class="col-md-6 profession3">
					<div class="form-group">
						<label>Secteurs d'acitivité</label>
						<select name="categorie3" id="slct5" onchange="populate(this.id,'slct6')" class="js-example-basic-single" style="width: 100%;">
							<option value="" class="form-control">3- Selectionner votre secteur</option>
							@foreach ( $categories as $categorie )
								<option @if (Auth::user()->categorie3 == $categorie) selected="selected" @endif value="{{$categorie}}">{{$categorie}}</option>
							@endforeach
						</select>
					</div>
				</div>
				<div class="col-md-6 profession3">
					<div class="form-group">
						<label>Domaine d'acitivité</label>
						<select name="secteur3" id="slct6" class="js-example-basic-single" style="width: 100%;">
							<option value="" class="form-control">3- Selectionner votre domaine</option>
							<option selected="selected" value="{{Auth::user()->service3}}">{{Auth::user()->service3}}</option>
						</select>
					</div>
				</div>
				<div class="col-md- profession3">
					<div class="form-group">
						<label for="exampleFormControlTextarea1">3e Description</label>
						@if (Auth::user()->description3 != null )
						<textarea class="form-control description-area" id="exampleFormControlTextarea1" rows="6"
							name="desc2" placeholder="Description">{{Auth::user()->description3}}</textarea>
						@else
						<textarea class="form-control description-area" id="exampleFormControlTextarea1" rows="6"
							name="desc2" placeholder="Description"></textarea>
						@endif
					</div>
				</div>

				<div class="col-md-12 text-center">
					<button  type="submit" style="border-radius: 0px !important;background: #FED700 !important; color: black;" class="post-btn">
						Enregistrer
					</button>
					
				</div>
			</div>
		</form>
	</div>
</div>




<div style="display: none;">
	<select class="js-example-basic-single" id="districtSel1" style="width: 100%; padding:40px;">
		<option value="AL">Selectionner la ville</option>
	</select>
	<select class="js-example-basic-single" id="countySel1" style="width: 100%; padding:40px;">
		<option value="AL">Selectionner le pays</option>
	</select>
	<select class="js-example-basic-single" id="stateSel1" style="width: 100%; padding:40px;">
		<option value="AL">Selectionner la region</option>

	</select>
</div>

@endsection