<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;


class UserFactory extends Factory
{

     /**
     * Define the model's default state.
     *
     * @var string
     */

    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail(),
            'numberPhone' => $this->faker->unique()->phoneNumber,
            'profil' => $this->faker->randomElement(["entreprise", "professionnel"], 1),
            'sexe' => $this->faker->randomElement([
                'Homme',
                'Femme',
            ]),
            'categorie1' => $this->faker->randomElement([
                'Biologie - Chimie',
            ]),
            'service1' => $this->faker->randomElement([
                'Agent / Agente de stérilisation',
                'Animalier / Animalière de laboratoire',
                'Aromaticien / Aromaticienne',
                'Bio-informaticien / Bio-informaticienne',
                'Botaniste',
                'Employé / Employée technique de laboratoire',
                'Ingénieur / Ingénieure de recherche produit',
                'Microbiologiste',
                'Parfumeur / Parfumeuse',
                'Technicien / Technicienne analyse et la qualité de l’eau',
                'Technicien / Technicienne biologiste',
                'Technicien / Technicienne chimiste',
                'Technicien / Technicienne de la qualité de l’air',
                'Technicien / Technicienne galéniste',
                'Technicien principal / Technicienne principale de la police technique et scientifique',
                'Technicienne / Technicien de laboratoire',
                'Thanatopracteur / Thanatopractrice',
            ]),
            'description1' => $this->faker->paragraph(2),
            'categorie2' => $this->faker->randomElement([
                'Biologie - Chimie',
            ]),
            'service2' => $this->faker->randomElement([
                'Agent / Agente de stérilisation',
                'Animalier / Animalière de laboratoire',
                'Aromaticien / Aromaticienne',
                'Bio-informaticien / Bio-informaticienne',
                'Botaniste',
                'Employé / Employée technique de laboratoire',
                'Ingénieur / Ingénieure de recherche produit',
                'Microbiologiste',
                'Parfumeur / Parfumeuse',
                'Technicien / Technicienne analyse et la qualité de l’eau',
                'Technicien / Technicienne biologiste',
                'Technicien / Technicienne chimiste',
                'Technicien / Technicienne de la qualité de l’air',
                'Technicien / Technicienne galéniste',
                'Technicien principal / Technicienne principale de la police technique et scientifique',
                'Technicienne / Technicien de laboratoire',
                'Thanatopracteur / Thanatopractrice',
            ]),
            'description2' => $this->faker->paragraph(2),
            'categorie3' => $this->faker->randomElement([
                'Biologie - Chimie',
            ]),
            'service3' => $this->faker->randomElement([
                'Agent / Agente de stérilisation',
                'Animalier / Animalière de laboratoire',
                'Aromaticien / Aromaticienne',
                'Bio-informaticien / Bio-informaticienne',
                'Botaniste',
                'Employé / Employée technique de laboratoire',
                'Ingénieur / Ingénieure de recherche produit',
                'Microbiologiste',
                'Parfumeur / Parfumeuse',
                'Technicien / Technicienne analyse et la qualité de l’eau',
                'Technicien / Technicienne biologiste',
                'Technicien / Technicienne chimiste',
                'Technicien / Technicienne de la qualité de l’air',
                'Technicien / Technicienne galéniste',
                'Technicien principal / Technicienne principale de la police technique et scientifique',
                'Technicienne / Technicien de laboratoire',
                'Thanatopracteur / Thanatopractrice',
            ]),
            'description3' => $this->faker->paragraph(2),
            'imageProfil'=> $this->faker->randomFloat(2, 0, 10000),
            'country' => 'Benin',
            'region' => $this->faker->randomElement([
                "Zou Department",
            ]),
            'city' => $this->faker->randomElement([
                "Abomey",
                "Bohicon",
                "Commune of Agbangnizoun",
                "Cové",
            ]),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}

