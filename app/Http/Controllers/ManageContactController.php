<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\Signal;
use App\Mail\AskNewService;
use App\Models\Cities;
use Illuminate\Support\Facades\Auth;

class ManageContactController extends Controller
{
    public function editPostContact(Request $request) {

        // dd($request);

        $this->validate($request, [
            'secteur2' => 'different:secteur1|different:secteur3',
            'secteur3' => 'different:secteur1|different:secteur2',
          ]);

        //   dd(1);

        $currentUser = User::where("id", Auth::user()->id)->first();

        $currentUser->update([
            'numberPhone' => $request->phone,
            'country' => $request->country,
            'region' => $request->state,
            'sexe' => $request->sexe === null ? Auth::user()->sexe : $request->sexe,
            'city' => $request->district,
            'categorie1' => $request->categorie1,
            'service1' => $request->secteur1,
            'description1' => $request->desc1,
            'categorie2' => $request->categorie2  === null ? Auth::user()->categorie2 : $request->categorie2,
            'service2' => $request->secteur2 === null ? Auth::user()->service2 : $request->secteur2,
            'description2' => $request->desc2 === null ? Auth::user()->description2 : $request->desc2,
            'categorie3' => $request->categorie3  === null ? Auth::user()->categorie3 : $request->categorie3,
            'service3'  => $request->secteur3 === null ? Auth::user()->service3 : $request->secteur3,
            'description3' => $request->desc3 === null ? Auth::user()->description3 : $request->desc3,
            'imageProfil' =>  $request->image === null ? Auth::user()->imageProfil : $request->file('image')->getClientOriginalName(),
        ]);

        $city = Cities::where("city", $request->district)->first();
        if($city == null) {
            Cities::create([
                'city' => $request->district,
            ]);
        }

        if($request->image != null) {
            $nameImageProfil = $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public/images/', $nameImageProfil);
        }

        return redirect(route('view.contact')); 
    }

    public function createContact() {

        return view('smart_contact');
    }

    public function viewContact() {

        return view('edit');
    }

    public function editGetContact() {

        if(Auth::user()->service1 == null) {
            return view('smart_contact');
        }else {
            return view('update_smart_contact');
        }
    }

    public function certifiedContact($id) {
        $contact = User::where("id", $id)->first();
        $contact->statut = 'certified';
        $contact->save();
        return back();
    }

    public function uncertifiedContact($id) {
        $contact = User::where("id", $id)->first();
        $contact->statut = 'nocertified';
        $contact->save();
        return back();
    }

    public function signalContact($email) {
        $contact = User::where("email", $email)->first();
        Mail::to('adjilan2403@gmail.com')->send(new Signal($contact->name));
        return back();
    }

    public function askVueService() {
        return view('ask_vue_service');
    }

    public function askNewService(Request $request) {
        $name = $request->name;
        $service = $request->service;
        Mail::to('adjilan2403@gmail.com')->send(new AskNewService($name, $service));
        return back();
    }

    public function qrcode() {

        // Personal Information
        $firstName = 'John';
        $lastName = 'Doe';
        $title = 'Mr.';
        $email = 'john.doe@example.com';
        
        // Addresses
        $homeAddress = [
            'type' => 'home',
            'pref' => true,
            'street' => '123 my street st',
            'city' => 'My Beautiful Town',
            'state' => 'LV',
            'country' => 'Neverland',
            'zip' => '12345-678'
        ];
        $wordAddress = [
        'type' => 'work',
        'pref' => false,
        'street' => '123 my work street st',
        'city' => 'My Dreadful Town',
        'state' => 'LV',
        'country' => 'Hell',
        'zip' => '12345-678'
        ];

        $addresses = [$homeAddress, $wordAddress];
        
        // Phones
        $workPhone = [
            'type' => 'work',
            'number' => '001 555-1234',
            'cellPhone' => false
        ];
        $homePhone = [
            'type' => 'home',
            'number' => '001 555-4321',
            'cellPhone' => false
        ];
        $cellPhone = [
            'type' => 'work',
            'number' => '001 9999-8888',
            'cellPhone' => true
        ];
        
        $phones = [$workPhone, $homePhone, $cellPhone];
        
        $info = \QRCode::vCard($firstName, $lastName, $title, $email, $addresses, $phones)
                    ->setErrorCorrectionLevel('H')
                    ->setSize(2)
                    ->setMargin(20)
                    ->svg();

        // $info = \QRCode::phone('+55 31 1234-5678')
        //                 ->setSize(4)
        //                 ->setMargin(2)
        //                 ->svg(); 

        return $info; 

    } 
}