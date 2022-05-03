<?php

namespace Database\Seeders;
use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Question::create([
            'title' => 'Question 1/20',
            'body' => 'Votre adresse mail',
            'question_type'=>'b',
            'options'=>''
        ]);

        Question::create([
            'title' => 'Question 2/20',
            'body' => 'Votre âge',
            'question_type'=>'b',
            'options'=>''
            
        ]);

        Question::create([
            'title' => 'Question 3/20',
            'body' => 'Votre sexe',
            'question_type'=>'a',
            'options'=>'Homme, Femme, Préfère de pas répondre'
        ]);

        Question::create([
            'title' => 'Question 4/20',
            'body' => 'Nombre de personne dans votre foyer (adulte & enfants)',
            'question_type'=>'c',
            'options'=>''

        ]);

        Question::create([
            'title' => 'Question 5/20',
            'body' => 'Votre profession',
            'question_type'=>'b',
            'options'=>''

        ]);

        Question::create([
            'title' => 'Question 6/20',
            'body' => 'Quel marque de casque VR utilisez vous ?',
            'question_type'=>'a',
            'options'=>'Occulus Rift/s, HTC Vive, Windows Mixed Reality, PSVR'

        ]);

        Question::create([
            'title' => 'Question 7/20',
            'body' => 'Sur quel magasin d’application achetez vous des contenus VR ?',
            'question_type'=>'a',
            'options'=>'SteamVR, Occulus store, Viveport, Playstation VR, Google
            Play, Windows store'

        ]);

        Question::create([
            'title' => 'Question 8/20',
            'body' => 'Quel casque envisagez-vous d’acheter dans un futur proche ?',
            'question_type'=>'a',
            'options'=>'Occulus Quest, Occulus Go, HTC Vive Pro, Autre, Aucun'

        ]);

        Question::create([
            'title' => 'Question 9/20',
            'body' => 'Au sein de votre foyer, combien de personne utilisent votre casque VR pour regarder Bigscreen
            ?',
            'question_type'=>'c',
            'options'=>''

        ]);

        Question::create([
            'title' => 'Question 10/20',
            'body' => 'Vous utilisez principalement Bigscreen pour : ',
            'question_type'=>'a',
            'options'=>'regarder des émissions TV en direct, regarder des films,
            jouer en solo, jouer en team'

        ]);

        Question::create([
            'title' => 'Question 11/20',
            'body' => 'Combien donnez vous de point pour la qualité de l’image sur Bigscreen ?',
            'question_type'=>'c',
            'options'=>''

        ]);

        Question::create([
            'title' => 'Question 12/20',
            'body' => 'Combien donnez vous de point pour le confort d’utilisation de l’interface Bigscreen ?',
            'question_type'=>'c',
            'options'=>''

        ]);

        Question::create([
            'title' => 'Question 13/20',
            'body' => 'Combien donnez vous de point pour la connection réseau de Bigscreen ?',
            'question_type'=>'c',
            'options'=>''

        ]);

        Question::create([
            'title' => 'Question 14/20',
            'body' => 'Combien donnez vous de point pour la qualité des graphismes 3D dans Bigscreen ?',
            'question_type'=>'c',
            'options'=>''

        ]);

        Question::create([
            'title' => 'Question 15/20',
            'body' => 'Combien donnez vous de point pour la qualité audio dans Bigscreen ?',
            'question_type'=>'c',
            'options'=>''

        ]);

        Question::create([
            'title' => 'Question 16/20',
            'body' => 'Aimeriez vous avoir des notifications plus précises au cours de vos sessions Bigscreen ?',
            'question_type'=>'a',
            'options'=>'Oui,Non'

        ]);

        Question::create([
            'title' => 'Question 17/20',
            'body' => 'Aimeriez vous pouvoir inviter un ami à rejoindre votre session via son smartphone ?',
            'question_type'=>'a',
            'options'=>'Oui,Non'

        ]);

        Question::create([
            'title' => 'Question 18/20',
            'body' => 'Aimeriez vous pouvoir enregistrer des émissions TV pour pouvoir les regarder ultérieurement ?',
            'question_type'=>'c',
            'options'=>''

        ]);

        Question::create([
            'title' => 'Question 19/20',
            'body' => 'Aimeriez vous jouer à des jeux exclusifs sur votre Bigscreen ?',
            'question_type'=>'c',
            'options'=>''

        ]);

        Question::create([
            'title' => 'Question 20/20',
            'body' => 'Quelle nouvelle fonctionnalité de vos rêve devrait exister sur Bigscreen ?',
            'question_type'=>'b',
            'options'=>''

        ]);
    }
}
