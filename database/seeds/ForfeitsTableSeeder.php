<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ForfeitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('forfeits')->insert([
            [
                'score' => 4,
                'description_fr' => 'Maquille toi de façon originale et publie la photo.',
                'description_en' => 'Put some make-up in an funky way and post the photo.',
            ],
            [
                'score' => 5,
                'description_fr' => 'Leave no trace. Effectue immédiatement une tâche ménagère.',
                'description_en' => 'Leave not trace. Do immediately a cleaning task.',
            ],
            [
                'score' => 6,
                'description_fr' => 'Sers toi un truc à boire et demande à un ami distant de faire de même. Trinquez.',
                'description_en' => 'Serve yourself a drink and ask a remote friend to do the same. Cheers.',
            ],
            [
                'score' => 7,
                'description_fr' => 'Fais ta meilleure imitation d\'un zombie et publie la vidéo.',
                'description_en' => 'Do you best imitation of a zombie and post the video.',
            ],
            [
                'score' => 8,
                'description_fr' => 'Fais un calin à un objet dans la pièce et parle-lui comme si il était vivant.',
                'description_en' => 'Hug an item in the room and talk like if it was alive.',
            ],
            [
                'score' => 9,
                'description_fr' => 'Fais deviner à un ami distant un personage de film avec une courte vidéo.',
                'description_en' => 'Make a remote friend guess a movie character with a short video of yourself.',
            ],
            [
                'score' => 10,
                'description_fr' => 'Ouvre ta fenêtre et trinque avec le premier voisin que tu vois.',
                'description_en' => 'Open you window and cheer with the first neighbour in sight.',
            ],
            [
                'score' => 11,
                'description_fr' => 'Publie une vidéo de toi entrain de danser farouchement.',
                'description_en' => 'Post a video of yourself dancing like crazy.',
            ],
            [
                'score' => 12,
                'description_fr' => 'Raconte dans une conversation groupée une expérience sexuelle insolite que tu as déjà faite.',
                'description_en' => 'Tell in a group chat a sexual experience you have already done.',
            ],
            [
                'score' => 13,
                'description_fr' => 'Essaye de faire l\'hélicoptère avec ta bite ou un sein. Ne PUBLIE PAS la vidéo.',
                'description_en' => 'Try to do the helicopter with your dick a booby. DON\'T post the video.',
            ],
            [
                'score' => 14,
                'description_fr' => 'Denude toi devant ton écran pendant 15 minutes.',
                'description_en' => 'Get nude in front of you screen for 15 minutes.',
            ],
            [
                'score' => 15,
                'description_fr' => 'Mime un acte sexuel avec un objet et publie la vidéo.',
                'description_en' => 'Pretend to have sex with an item and post the video.',
            ],
            [
                'score' => 16,
                'description_fr' => 'Ouvre la fenêtre et offre une danse endiablée aux voisins',
                'description_en' => 'Open you window and dance like crazy in front of your neighbours',
            ],
            [
                'score' => 17,
                'description_fr' => 'Raconte dans un message privé quelque chose que tu n\'as jamais dit à personne.',
                'description_en' => 'Send in a private message something you have never said to anybody.',
            ],
            [
                'score' => 18,
                'description_fr' => 'Fait une demande en mariage en vidéo et envoie la à quelqu\'un de ton choix.',
                'description_en' => 'Propose someone in a video and send it to the person.',
            ],
            [
                'score' => 19,
                'description_fr' => 'Passe le balais ou l\'aspirateur de façon super sexy et publie la vidéo.',
                'description_en' => 'Sweep the floor or vaccuum in a super sexy way and post the video.',
            ],
            [
                'score' => 20,
                'description_fr' => 'Enregistre toi en audio entrain de mimer un orgasme. Partage l\'enregistrement.',
                'description_en' => 'Make a audio recording of yourself pretending to have a orgasm. Share the recording.',
            ],
            [
                'score' => 21,
                'description_fr' => 'Fait une vidéo de toi entrain de t\'auto administrer une fessée et publie là.',
                'description_en' => 'Make a video of yourself giving you a spanking. Share the video.',
            ],
            [
                'score' => 22,
                'description_fr' => 'Fais une vidéo de toi entrain d\'administrer une fessée à n\'importe quoi et publie là.',
                'description_en' => 'Make a video of yourself giving a spanking to anything. Share the video.',
            ],
            [
                'score' => 23,
                'description_fr' => 'Joue à chi-fu-mi en webcam avec un ami distant. Le perdant doit faire livrer un cadeau au gagnant.',
                'description_en' => 'Play chi-fu-mi via webcam with a remote friend. The looser must have a gift delivered to the winner.',
            ],
            [
                'score' => 24,
                'description_fr' => 'Sers toi un verre et apprécie pleinement le moment.',
                'description_en' => 'Serve yourself a drink and appreciate fully the moment.',
            ],
            [
                'score' => 25,
                'description_fr' => 'Fais le tour de ton appartement ou maison en mimant un cheval fringuant.',
                'description_en' => 'Pretend to be a dashing horse and tour your flat or house.',
            ],
            [
                'score' => 26,
                'description_fr' => 'Embrasse quelq\'un par écran interposé.',
                'description_en' => 'Kiss each-other in video with a remote friend.',
            ],
            [
                'score' => 27,
                'description_fr' => 'Enlève un sous-vêtement pendant 1 heure.',
                'description_en' => 'Remove some underwear for an hour.',
            ],
            [
                'score' => 28,
                'description_fr' => 'Ouvre la fenêtre et fait la conversation avec un voisin au hasard.',
                'description_en' => 'Open your window and talk with a random neighbour.',
            ],
            [
                'score' => 29,
                'description_fr' => 'Execute en vidéo la parade amoureuse d\'un animal réel ou imaginaire et publie là.',
                'description_en' => 'Film yourself doing a imaginary or real animal love parade. Share the video.',
            ],
            [
                'score' => 30,
                'description_fr' => 'Raconte à un ami une vérité et un mensonge sur toi. Il doit deviner quel est le mensonge.',
                'description_en' => 'Tell a friend one truth and one lie about yourself. He must guess which one is a lie.',
            ],
            [
                'score' => 31,
                'description_fr' => 'Envoie en message privé un compliment légendaire à l\'un des membre du Solonia Wilds Bar (cf la page facebook).',
                'description_en' => 'Send a private message a legendary compliment to one of the Solonia Wilds Bar members (check the facebook page).',
            ],
            [
                'score' => 32,
                'description_fr' => 'Sers toi un verre et bois-le cul sec.',
                'description_en' => 'Serve yourself a drink a drink it bottoms up.',
            ],
            [
                'score' => 33,
                'description_fr' => 'Raconte dans une conversation groupée une nouvelle expérience sexuelle que tu aimerais vivre.',
                'description_en' => 'Tell in a group chat a new sexual experience you would love to have.',
            ],
            [
                'score' => 34,
                'description_fr' => 'Mime une scène de film célèbre avec deux ou plusieurs objets de la pièce. Publie une vidéo.',
                'description_en' => 'Use two or more items in a room to mimic a famouse movie scene. Post a video.',
            ],
            [
                'score' => 35,
                'description_fr' => 'Raconte dans une conversation groupée une expérience sexuelle un peu honteuse que tu as vécue.',
                'description_en' => 'Tell in a group chat a shameful sexual experience you had.',
            ],
            [
                'score' => 36,
                'description_fr' => 'Appelle quelqu\'un et mime une relation sexuelle au téléphone.',
                'description_en' => 'Call someone and pretend to have sex over the phone.',
            ],
            [
                'score' => 37,
                'description_fr' => 'Envoie à quelqu\'un quel est des 10 principes du Burning Man ton préféré et pourquoi (Google les).',
                'description_en' => 'Send someone which one of the 10 principles of Burning Man you prefer and why (Google it).',
            ],
            [
                'score' => 38,
                'description_fr' => 'Effort communautaire : répare, nettoie ou entretien quelque chose dans ton immeuble ou un espace publique non loin.',
                'description_en' => 'Communal effort: repair, clean or maintain something in your building or a public place around.',
            ],
        ]);
    }
}
