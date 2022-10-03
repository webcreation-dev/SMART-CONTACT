<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Cities;
use Illuminate\Support\Facades\Auth;


class ManageContact extends Component
{
    public $country = "";
    public $state = "";
    public $district = "";

    public $city = "";
    public $sexe = "";
    public $search = "";

    public function render()
    {

        $userQuery = User::query();

        if ($this->search != "") {

            $userQuery->where("service1", "LIKE", "%". $this->search ."%")
                        ->orWhere("service2", "LIKE", "%". $this->search ."%")
                        ->orWhere("service3", "LIKE", "%". $this->search ."%")
                        ->orWhere("categorie1", "LIKE", "%". $this->search ."%")
                        ->orWhere("categorie2", "LIKE", "%". $this->search ."%")
                        ->orWhere("categorie3", "LIKE", "%". $this->search ."%")
                        ->orWhere("country", "LIKE", "%". $this->search ."%")
                        ->orWhere("region", "LIKE", "%". $this->search ."%")
                        ->orWhere("city", "LIKE", "%". $this->search ."%"); 
        }

        if ($this->sexe != "") {
            $userQuery->where("sexe", $this->sexe);
        }
        if ($this->sexe == "all") {
            $userQuery = User::query();
        }

        if ($this->city != "") {
            $userQuery->where("city", $this->city);
        }
        if ($this->city == "all") {
            $userQuery = User::query();
        }

        $users = [
            "users" => $userQuery->where('service1', '!=', null)
                ->latest()
                ->paginate(3),
            "cities" => Cities::all(),
        ];

        if(Auth::check() == true) {
            $profil = [
                "profil" => User::where("id", Auth::user()->id)->first(),
                
            ];
           
            return view('welcome',$profil, $users)
            ->extends("layouts.app")
            ->section("content");
        }else {

            return view('welcome', $users )
                ->extends("layouts.app")
                ->section("content");
        }

    }

}



