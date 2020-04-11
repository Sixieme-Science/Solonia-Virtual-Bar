<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ForfeitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('forfeits')->truncate();

        DB::table('forfeits')->insert([
            [
                'score' => 2,
                'description_fr' => 'Relance !',
                'description_en' => 'Roll again !',
            ],
            [
                'score' => 3,
                'description_fr' => 'Relance !',
                'description_en' => 'Roll again !',
            ],
            [
                'score' => 4,
                'description_fr' => 'Trouve quelque chose pour te faire une peinture tribale sur le visage.',
                'description_en' => 'Put some make-up in an funky way and post the photo.',
            ],
            [
                'score' => 5,
                'description_fr' => 'Leave no trace. Montre aux personnes connectées à quel point ton appartement est bien rangé.',
                'description_en' => 'Leave not trace. Do immediately a cleaning task.',
            ],
            [
                'score' => 6,
                'description_fr' => 'Bois ton verre cul-sec.',
                'description_en' => 'Serve yourself a drink and ask a remote friend to do the same. Cheers.',
            ],
            [
                'score' => 7,
                'description_fr' => 'Fais ta meilleure imitation d\'un pangolin',
                'description_en' => 'Do you best imitation of a zombie and post the video.',
            ],
            [
                'score' => 8,
                'description_fr' => 'Fais ta meilleure imitation du coronavirus',
                'description_en' => 'Hug an item in the room and talk like if it was alive.',
            ],
            [
                'score' => 9,
                'description_fr' => 'En mimant seulement, fais deviner un personnage de film aux personnes connectées.',
                'description_en' => 'Make a remote friend guess a movie character with a short video of yourself.',
            ],
            [
                'score' => 10,
                'description_fr' => 'Ouvre ta fenêtre et trinque avec tes voisins',
                'description_en' => 'Open you window and cheer with the first neighbour in sight.',
            ],
            [
                'score' => 11,
                'description_fr' => 'Fais une furieuse démonstration de danse.',
                'description_en' => 'Post a video of yourself dancing like crazy.',
            ],
            [
                'score' => 12,
                'description_fr' => 'Raconte une expérience sexuelle insolite que tu as déjà faite.',
                'description_en' => 'Tell in a group chat a sexual experience you have already done.',
            ],
            [
                'score' => 13,
                'description_fr' => 'Raconte une expérience sexuelle insolite que tu aimerais faire.',
                'description_en' => 'Try to do the helicopter with your dick a booby. DON\'T post the video.',
            ],
            [
                'score' => 14,
                'description_fr' => 'Mets toi en sous-vêtements pendant 10 minutes (éviter le gage 27 ensuite ...).',
                'description_en' => 'Get nude in front of you screen for 15 minutes.',
            ],
            [
                'score' => 15,
                'description_fr' => 'Fais une belle démonstration de air sex.',
                'description_en' => 'Pretend to have sex with an item and post the video.',
            ],
            [
                'score' => 16,
                'description_fr' => 'Trouve et porte un chapeau ou un accessoire de costume.',
                'description_en' => 'Open you window and dance like crazy in front of your neighbours',
            ],
            [
                'score' => 17,
                'description_fr' => 'Raconte quelque chose que tu n\'as jamais dit à personne.',
                'description_en' => 'Send in a private message something you have never said to anybody.',
            ],
            [
                'score' => 18,
                'description_fr' => 'Fais une demande en mariage à une personne connectée.',
                'description_en' => 'Propose someone in a video and send it to the person.',
            ],
            [
                'score' => 19,
                'description_fr' => 'Passe le balais ou l\'aspirateur de façon sexuellement explicite .',
                'description_en' => 'Sweep the floor or vaccuum in a super sexy way and post the video.',
            ],
            [
                'score' => 20,
                'description_fr' => 'Simule un orgasme bruyant, pendant au moins 10 secondes',
                'description_en' => 'Make a audio recording of yourself pretending to have a orgasm. Share the recording.',
            ],
            [
                'score' => 21,
                'description_fr' => 'Administre-toi une jolie de fessée.',
                'description_en' => 'Make a video of yourself giving you a spanking. Share the video.',
            ],
            [
                'score' => 22,
                'description_fr' => 'Montre l\'objet le plus insolite de la pièce où tu es.',
                'description_en' => 'Make a video of yourself giving a spanking to anything. Share the video.',
            ],
            [
                'score' => 23,
                'description_fr' => 'Joue à chi-fu-mi avec une des personnes connectées.',
                'description_en' => 'Play chi-fu-mi via webcam with a remote friend. The looser must have a gift delivered to the winner.',
            ],
            [
                'score' => 24,
                'description_fr' => 'Bois une gorgée de ton verre de façon sexuellement explicite.',
                'description_en' => 'Serve yourself a drink and appreciate fully the moment.',
            ],
            [
                'score' => 25,
                'description_fr' => 'Fais le tour de la pièce en mimant une licone et en criant "je suis une licone !".',
                'description_en' => 'Pretend to be a dashing horse and tour your flat or house.',
            ],
            [
                'score' => 26,
                'description_fr' => 'Pose tes lèvres sur ta caméra. Peut-être certaines personnes connectées te chopperont virutellement.',
                'description_en' => 'Kiss each-other in video with a remote friend.',
            ],
            [
                'score' => 27,
                'description_fr' => 'Enlève un sous-vêtement et suspens-le derrière toi.',
                'description_en' => 'Remove some underwear for an hour.',
            ],
            [
                'score' => 28,
                'description_fr' => 'Résume l\'ensemble de ta vie en 20 secondes.',
                'description_en' => 'Open your window and talk with a random neighbour.',
            ],
            [
                'score' => 29,
                'description_fr' => 'Imite ou invente la parade amoureuse d\'un animal.',
                'description_en' => 'Film yourself doing a imaginary or real animal love parade. Share the video.',
            ],
            [
                'score' => 30,
                'description_fr' => 'Raconte à une personne connectée une vérité et un mensonge sur toi. Il ne doit pas trouver quel est le mensonge.',
                'description_en' => 'Tell a friend one truth and one lie about yourself. He must guess which one is a lie.',
            ],
            [
                'score' => 31,
                'description_fr' => 'Fais un compliment légendaire à l\'une des personnes connectées.',
                'description_en' => 'Send a private message a legendary compliment to one of the Solonia Wilds Bar members (check the facebook page).',
            ],
            [
                'score' => 32,
                'description_fr' => 'Sers toi un verre et bois-le cul sec.',
                'description_en' => 'Serve yourself a drink a drink it bottoms up.',
            ],
            [
                'score' => 33,
                'description_fr' => 'Raconte une nouvelle expérience sexuelle que tu aimerais vivre.',
                'description_en' => 'Tell in a group chat a new sexual experience you would love to have.',
            ],
            [
                'score' => 34,
                'description_fr' => 'Fais devnier une oeuvre célèbre, tous supports confondus, en mimant un des passages ou scène.',
                'description_en' => 'Use two or more items in a room to mimic a famouse movie scene. Post a video.',
            ],
            [
                'score' => 35,
                'description_fr' => 'Raconte une expérience sexuelle honteuse (mais qui reste drôle) que tu as vécu.',
                'description_en' => 'Tell in a group chat a shameful sexual experience you had.',
            ],
            [
                'score' => 36,
                'description_fr' => 'Rappelle la dernière personne qui t\'a appelé et dis lui que tu l\'aimes.',
                'description_en' => 'Call someone and pretend to have sex over the phone.',
            ],
            [
                'score' => 37,
                'description_fr' => 'Confesse quel est ton principe préféré parmi ceux du Burning Man et pourquoi (Google si besoin).',
                'description_en' => 'Send someone which one of the 10 principles of Burning Man you prefer and why (Google it).',
            ],
            [
                'score' => 38,
                'description_fr' => 'Montre un objet que tu as fabriqué toi-même. A défaut, confesse ta meilleure recette de cuisine.',
                'description_en' => 'Communal effort: repair, clean or maintain something in your building or a public place around.',
            ],
            [
                'score' => 39,
                'description_fr' => 'Relance !',
                'description_en' => 'Roll again !',
            ],
            [
                'score' => 40,
                'description_fr' => 'Relance !',
                'description_en' => 'Roll again !',
            ],
        ]);
    }
}
