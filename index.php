<?php
class Movie {

    public $title;

    public $poster;

    public $genre;

    public $director;

    public $releaseyear;

    public $duration;

    public $plot;

    public $awards;

    public function __construct($_title) {
        $this->title = $_title;
    }

    public function tellMeThePlot() {
        return $this->plot;
    }

    public function tellMeAboutAwards() {
        return $this->awards;
    }
}

// Istance 1
$memento = new Movie('Memento');
$memento->poster = 'https://pad.mymovies.it/filmclub/2001/01/012/locandina.jpg';
$memento->genre = 'Thriller';
$memento->director = 'Christopher Nolan';
$memento->duration = '113';
$memento->releaseyear = '2000';
$memento->plot = 'Memento vede protagonista Leonard "Lenny" Shelby (Guy Pearce), un ex investigatore di una compagnia assicurativa. L\'uomo indossa abiti costosi, guida una Jaguar, ma vive in un modesto albergo pagando tutto in contanti. Soffre di perdita di memoria a breve termine e visto che non riesce a trattenere le informazioni per più di 15 minuti, scatta polaroid e scrive continuamente tutto ciò che succede appuntandolo su dei post-it e sul corpo con dei tatuaggi che lo aiutano a ricordare. Grazie a questo sistema, sa che due uomini hanno violentato e ucciso la moglie Catherine e che gli hanno provocato il trauma mnemonico colpendolo alla testa; la sua unica preoccupazione è quella di rintracciarli per vendicarsi. Non può fidarsi di nessuno, nemmeno del suo amico poliziotto Teddy Gamell (Joe Pantoliano) o dell\'amante Nathalie (Carrie-Anne Moss). Un caso di quando lavorava come investigatore è stato determinante per Lenny: la storia di Sammy Jankis (Stephen Tobolowsky), affetto dalla stessa malattia della memoria in seguito ad un incidente, a cui aveva negato il risarcimento assicurativo, archiviando la pratica poiché legata secondo lui ad un problema mentale e non fisico. La moglie diabetica, disperata, si era fatta iniettare più dosi di insulina a breve distanza l\'una dall\'altra per mettere alla prova la buona fede del marito, che alla fine era stato internato in un ospedale psichiatrico per aver provocato il coma della consorte. Lenny, scosso da questi avvenimenti, aveva capito la veridicità della malattia di Sammy, e quando si era ritrovato a soffrire della stessa sua patologia, si era tatuato sul polso la frase "Ricordati di Sammy Jankis" e aveva iniziato a registrare ogni avvenimento per non incappare nella stessa tragica fine del suo cliente. Tutta la pellicola si svolge come la ricostruzione di Lenny che cerca di capire come sia arrivato ad uccidere colui che ritiene essere l\'assassino della moglie all\'inizio del film, in una serie di macchinosi ragionamenti e supposizioni, fino ad un risultato sconvolgente e inaspettato.';
$memento->awards = '2002 - Premio Oscar: Candidatura alla migliore sceneggiatura originale a Christopher Nolan e Jonathan Nolan - Candidatura al miglior montaggio a Dody Dorn;<br>
                    2002 - Golden Globe: Candidatura alla migliore sceneggiatura a Christopher Nolan;<br>
                    2002 - Premio Oscar: Candidatura alla migliore sceneggiatura originale a Christopher Nolan e Jonathan Nolan, Candidatura al miglior montaggio a Dody Dorn;<br>
                    2002 - Golden Globe: Candidatura alla migliore sceneggiatura a Christopher Nolan;<br>
                    2000 - Festival del cinema americano di Deauville: Premio speciale della giuria, premio della critica internazionale, premio CinéLive Award;<br>
                    2000 - Catalonian International Film Festival: Premio per la miglior sceneggiatura;<br>
                    2001 - Sundance Film Festival: Premio Waldo Salt Screenwriting Award per la miglior sceneggiatura;<br>
                    2001 - British Independent Film Awards 2001: Miglior film straniero in lingua inglese<;br>
                    2001 - National Board of Review of Motion Pictures: Migliori dieci film dell\'anno.';

// Istance 2
$eternalsunshineofthespotlessmind = new Movie('Eternal Sunshine of the Spotless Mind');
$eternalsunshineofthespotlessmind->poster = 'https://pad.mymovies.it/filmclub/2004/10/012/locandina.jpg';
$eternalsunshineofthespotlessmind->genre = 'Drammatico';
$eternalsunshineofthespotlessmind->director = 'Michel Gondry';
$eternalsunshineofthespotlessmind->duration = '108';
$eternalsunshineofthespotlessmind->releaseyear = '2004';
$eternalsunshineofthespotlessmind->plot = 'Al termine dell’ennesimo litigio con il fidanzato Joel, Clementine (Kate Winslet), una ragazza estroversa e spontanea, si rivolge al dottor Howard Mierzwiak (Tom Wilkinson) per far cancellare Joel dalla sua mente. Infatti, alla clinica Lacuna Inc., la ragazza si sottopone a una procedura in grado di eliminare tutti i ricordi collegati alla storia d\'amore finita male. Joel (Jim Carrey), il giorno dopo la cancellazione, la cerca per riappacificarsi con lei, ma lei non lo ricorda. Anche lui scopre l\'esistenza della Lacuna e sceglie di far cancellare Clementine dalla sua mente, consegnando al personale della clinica tutti gli oggetti in qualche modo collegati alla loro relazione. Seguendo la mappatura dei ricordi di Joel, inizia la procedura volta a cancellarli. Joel inizia a rivivere nella sua mente tutti i ricordi collegati a Clementine, e si rende conto di non volerla più cancellare dalla sua mente. Così, oppone resistenza alla macchina, tentando di nascondere la sua amata al di fuori dei ricordi mappati il giorno precedente, nel disperato tentativo di non dimenticarla. Questa sua resistenza causa un malfunzionamento della macchina. Joel scopre tuttavia di non poter fermare il processo ma, prima che il suo ultimo ricordo di Clementine venga cancellato, lei dice di amarlo e di tornare a cercarla nella cittadina dove si erano conosciuti. All\'alba Joel non la ricorda più. Quel giorno, festa di San Valentino, decide di disertare il lavoro e di prendere invece un treno per Montauk, dove incontra Clementine. I due, ignari l’uno dell’altra e della relazione che li univa, si conoscono e iniziano a frequentarsi. Ma il passato, anche se cancellato, incombe su di loro e metterà alla prova i loro sentimenti.';
$eternalsunshineofthespotlessmind->awards = '2005 - Premio Oscar Miglior sceneggiatura originale a Charlie Kaufman, Michel Gondry, Pierre Bismuth;<br>
                                             2005 - BAFTA Miglior sceneggiatura originale a Charlie Kaufman, Michel Gondry, Pierre Bismuth - Miglior montaggio a Valdís Óskarsdóttir;<br>
                                             2004 - Las Vegas Film Critics Society Miglior attrice a Kate Winslet - Miglior sceneggiatura;<br>
                                             2004 - National Board of Review Miglior sceneggiatura originale.';

// Istance 3                                            
$interstellar = new Movie ('Interstellar');
$interstellar->poster = 'https://pad.mymovies.it/filmclub/2014/01/001/locandina.jpg';
$interstellar->genre = 'Fantascienza';
$interstellar->director = 'Christopher Nolan';
$interstellar->duration = '168';
$interstellar->releaseyear = '2014';
$interstellar->plot = 'Il film è ambientato in un catastrofico XXI secolo, dove l’umanità, affamata e flagellata da incessanti tempeste di sabbia, si regge sul negazionismo. Durante una tempesta, Joseph Cooper (Matthew McConaughey), ex ingegnere della Nasa, e la figlia Murph (Mackenzie Foy) si imbattono in un curioso fenomeno fisico. Sul pavimento della camera di sua figlia, infatti, Cooper codifica strane strisce di sabbia che si rivelano coordinate basate su un sistema binario. Seguendole, padre e figlia si ritrovano in un centro segreto della Nasa diretto da Tom Brand e Amelia Brand (Anne Hathaway). Qui, Cooper scopre l’esistenza di un cunicolo spazio temporale vicino a Saturno, che gravita attorno al buco nero Gargantua. L’equipaggio inviato precedentemente non aveva portato a termine la missione e l’unico superstite della spedizione potrebbe essere Mann (Matt Damon). Tocca a Cooper tentare un viaggio estremo, per risolvere la Teoria del tutto e salvare l’umanità. Mentre Murph crede che suo padre la stia abbandonando, Cooper, Amelia e l’equipaggio partono per studiare l’entità del buco nero. Nello spazio il tempo scorre più lentamente, mentre sulla Terra, Murph (Jessica Chastain) diventata adulta, scopre che Tom, pur decifrando l’equazione, aveva dichiarato l’impossibilità di impiegarla per i suoi progetti. A corto di carburante, gli astronauti raggiungono il pianeta da cui Mann, partito anni prima, trasmette ancora informazioni alla base. Mentre Murph riesce a rivelare la verità a suo padre, Mann si scopre ormai preda della follia e cerca di impadronirsi della navicella. Cooper riesce a salvare Amelia, ma finisce in una pentadimensione creata da entità superiori, in cui l’uomo può manipolare il tempo e lo spazio.';
$interstellar->awards = '2015 - Premio Oscar Migliori effetti speciali a Paul Franklin, Andrew Lockley, Ian Hunter e Scott Fisher;<br>
                         2015 - Empire Awards Miglior film Miglior regista a Christopher Nolan;<br>
                         2015 - Saturn Awards Miglior film di fantascienza - Miglior attore emergente a Mackenzie Foy - Miglior sceneggiatura a Christopher Nolan e Jonathan Nolan - Miglior colonna sonora a Hans Zimmer.';

// Istance 4
$joker = new Movie ('Joker');
$joker->poster = 'https://pad.mymovies.it/filmclub/2018/06/066/locandina.jpg';
$joker->genre = 'Drammatico';
$joker->director = 'Todd Phillips';
$joker->duration = '122';
$joker->releaseyear = '2019';
$joker->plot ='Joker è incentrato sulla figura dell\'iconico villain, ed è una storia originale, diversa da qualsiasi altro film su questo celebre personaggio apparso sul grande schermo fino ad ora. L\'esplorazione di Phillips su Arthur Fleck, interpretato in modo indimenticabile da Joaquin Phoenix, è quella di un uomo che lotta per trovare la sua strada in una società fratturata come Gotham. Durante il giorno lavora come pagliaccio, di notte si sforza di essere un comico di cabaret... ma scopre che lo zimbello sembra essere proprio lui. Intrappolato in un\'esistenza ciclica sempre in bilico tra apatia e crudeltà, Arthur prenderà una decisione sbagliata che provocherà una reazione a catena di eventi, utili alla cruda analisi di questo personaggio. L\'esplorazione da parte del regista Todd Phillips su Arthur Fleck, un uomo ignorato dalla società, non vuole soltanto uno studio crudo del personaggio ma una storia più ampia che si prefigge di lasciare un insegnamento, un monito. Oltre a Joaquin Phoenix, il cast del film vede protagonisti Robert De Niro, Zazie Beetz e Frances Conroy.';
$joker->awards = '2020 - Premi Oscar Miglior attore a Joaquin Phoenix - Migliore colonna sonora a Hildur Guðnadóttir;<br>
                  2020 - Golden Globe Miglior attore in un film drammatico a Joaquin Phoenix - Miglior colonna sonora originale in un film a Hildur Guðnadóttir;<br>
                  2020 - Premi BAFTA Miglior attore protagonista a Joaquin Phoenix - Migliore colonna sonora a Hildur Guðnadóttir;<br>
                  2019 - Mostra internazionale d\'arte cinematografica Leone d\'oro al miglior film;<br>
                  2019 - Satellite Award - Migliore sceneggiatura non originale a Todd Phillips e Scott Silver - Migliore colonna sonora originale a Hildur Guðnadóttir.';

// Istance 5
$perfettisconosciuti = new Movie ('Perfetti Sconosciuti');
$perfettisconosciuti->poster = 'https://pad.mymovies.it/filmclub/2016/01/005/locandina.jpg';
$perfettisconosciuti->genre = 'Commedia';
$perfettisconosciuti->director = 'Paolo Genovese';
$perfettisconosciuti->duration = '97';
$perfettisconosciuti->releaseyear = '2016';
$perfettisconosciuti->plot = 'Il film ruota attorno alle vicende che si susseguono durante una cena tra amici apparentemente tranquilla, in occasione di un\'eclissi lunare da guardare tutti insieme sul balcone. I proprietari di casa, un raffinato appartamento romano, sono Eva (Kasia Smutniak) e Rocco (Marco Giallini), marito e moglie da tempo in crisi: lui è un chirurgo plastico che si è sempre mostrato scettico rispetto all\'utilità della psicoterapia, mentre lei è una psicoanalista che ha un rapporto conflittuale con la figlia adolescente, Sofia (Benedetta Porcaroli). La coppia decide di invitare a cena gli amici di sempre: i novelli sposi Bianca (Alba Rohrwacher), timida, riservata ed educata e Cosimo (Edoardo Leo), tassista con la voglia di cambiare quotidianamente lavoro, i coniugi Lele (Valerio Mastandrea), funzionario che lavora in un ufficio legale e Carlotta (Anna Foglietta), donna dedita alla famiglia ed infine Peppe (Giuseppe Battiston), insegnante di educazione fisica in sovrappeso e attualmente disoccupato. Da sempre single, Peppe si è fidanzato di recente con Lucilla, che però non è presente alla cena per colpa di un\'influenza. Tra una portata e l\'altra, Eva si dice convinta che tante coppie si lascerebbero se ogni rispettivo partner controllasse il contenuto del cellulare dell\'altro. Propone così una sorta di gioco: ognuno di loro dovrà mettere il proprio cellulare in mezzo al tavolo e ogni chiamata o messaggio che arriverà nel corso della serata dovrà essere condiviso pubblicamente con gli altri. Tutti decidono di partecipare, ma ben presto quello che doveva essere un semplice gioco si trasforma in una vero e proprio massacro. Infatti verranno a galla una serie di verità e di segreti inconfessabili che potrebbero distruggere completamente il rapporto tre le varie coppie e l\'amicizia fra tutti i commensali. Col procedere della serata, in maniera progressiva, tra momenti goliardici e altri di forte contrasto e tensione, verranno svelati i lati segreti di ognuno dei protagonisti, con la consapevolezza che pur conoscendosi tutti da tempo si ritroveranno ad essere dei "perfetti sconosciuti" in seguito a un colpo di scena inaspettato...';
$perfettisconosciuti->awards = '2016 - David di Donatello Miglior film a Paolo Genovese - Migliore sceneggiatura a Paolo Genovese, Filippo Bologna, Paolo Costella, Paola Mammini, Rolando Ravello;<br>
                                2016 - Nastri d\'argento Migliore commedia a Paolo Genovese - Migliore canzone originale (Perfetti sconosciuti) a Bungaro e Cesare Chiodo, e Fiorella Mannoia - Nastro d\'argento speciale a tutto il cast compreso il casting director;<br>
                                2016 – Globo d\'oro Migliore commedia a Paolo Genovese;<br>
                                2016 – Ciak d\'oro Miglior film a Paolo Genovese - Migliore sceneggiatura a Paolo Genovese, Filippo Bologna, Paolo Costella, Paola Mammini, Rolando Ravello - Migliore attore protagonista a Marco Giallini - Migliore canzone originale (Perfetti sconosciuti) a Bungaro, Cesare Chiodo e Fiorella Mannoia.';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php-oop-1</title>
</head>
<body>

    <!-- H1 Title -->
    <h1>
        Tra i miei film preferiti:
    </h1>
     
    <!-- Movie 1 -->
    <h2>
        <!-- Title -->
        - <?php echo $memento->title; ?> 
    </h2>

    <div>
        <!-- Poster -->
        <img src="<?php echo $memento->poster; ?>" alt="<?php echo $memento->title; ?>">
    </div>

    <br>

    <div>
        <!-- Genre -->
        Film <?php echo $memento->genre; ?>

        <!-- Release Year -->
        del <?php echo $memento->releaseyear; ?>

        <!-- Director -->
        scritto e diretto da <?php echo $memento->director; ?>,

        <!-- Duration -->
        della durata di <?php echo $memento->duration; ?> minuti.
    </div>

    <br>

    <div>
        Trama: <br>
        <em>
            <!-- Function Plot -->
            <?php echo $memento->tellMeThePlot(); ?>
        </em>
    </div>

    <br>

    <div>
        Premi e riconoscimenti: <br>
        <em>
            <!-- Function Awards -->
            <?php echo $memento->tellMeAboutAwards(); ?>
        </em>
    </div>

    <br>

    <!-- Movie 2 -->
    <!-- Title -->
    <h2>
        - <?php echo $eternalsunshineofthespotlessmind->title; ?> 
    </h2>

    <div>
        <!-- Poster -->
        <img src="<?php echo $eternalsunshineofthespotlessmind->poster; ?>" alt="<?php echo $eternalsunshineofthespotlessmind->title; ?>">
    </div>

    <div>
        <!-- Genre -->
        Film <?php echo $eternalsunshineofthespotlessmind->genre; ?>

        <!-- Release Year -->
        del <?php echo $eternalsunshineofthespotlessmind->releaseyear; ?>

        <!-- Director -->
        scritto e diretto da <?php echo $eternalsunshineofthespotlessmind->director; ?>,

        <!-- Duration -->
        della durata di <?php echo $eternalsunshineofthespotlessmind->duration; ?> minuti.
    </div>

    <br>

    <div>
        Trama: <br>
        <em>
            <!-- Function Plot -->
            <?php echo $eternalsunshineofthespotlessmind->tellMeThePlot(); ?>
        </em>
    </div>
    <br>
    <div>
        Premi e riconoscimenti: <br>
        <em>
            <!-- Function Awards -->
            <?php echo $eternalsunshineofthespotlessmind->tellMeAboutAwards(); ?>
        </em>
    </div>

    <br>

    <!-- Movie 3 -->
    <h2>
        <!-- Title -->
        - <?php echo $interstellar->title; ?> 
    </h2>

    <div>
        <!-- Poster -->
        <img src="<?php echo $interstellar->poster; ?>" alt="<?php echo $interstellar->title; ?>">
    </div>

    <div>
        <!-- Genre -->
        Film <?php echo $interstellar->genre; ?>

        <!-- Release Year -->
        del <?php echo $interstellar->releaseyear; ?>

        <!-- Director -->
        scritto e diretto da <?php echo $interstellar->director; ?>,

        <!-- Duration -->
        della durata di <?php echo $interstellar->duration; ?> minuti.
    </div>

    <br>

    <div>
        Trama: <br>
        <em>
            <!-- Function Plot -->
            <?php echo $interstellar->tellMeThePlot(); ?>
        </em>
    </div>
    <br>
    <div>
        Premi e riconoscimenti: <br>
        <em>
            <!-- Function Awards -->
            <?php echo $interstellar->tellMeAboutAwards(); ?>
        </em>
    </div>

    <br>

    <!-- Movie 4 -->
    <h2>
        <!-- Title -->
        - <?php echo $joker->title; ?> 
    </h2>

    <div>
        <!-- Poster -->
        <img src="<?php echo $joker->poster; ?>" alt="<?php echo $joker->title; ?>">
    </div>

    <div>
        <!-- Genre -->
        Film <?php echo $joker->genre; ?>

        <!-- Release Year -->
        del <?php echo $joker->releaseyear; ?>

        <!-- Director -->
        scritto e diretto da <?php echo $joker->director; ?>,

        <!-- Duration -->
        della durata di <?php echo $joker->duration; ?> minuti.
    </div>

    <br>

    <div>
        Trama: <br>
        <em>
            <!-- Function Plot -->
            <?php echo $joker->tellMeThePlot(); ?>
        </em>
    </div>
    <br>
    <div>
        Premi e riconoscimenti: <br>
        <em>
            <!-- Function Awards -->
            <?php echo $joker->tellMeAboutAwards(); ?>
        </em>
    </div>

    <br>

    <!-- Movie 5 -->
    <h2>
        <!-- Title -->
        - <?php echo $perfettisconosciuti->title; ?> 
    </h2>

    <div>
        <!-- Poster -->
        <img src="<?php echo $perfettisconosciuti->poster; ?>" alt="<?php echo $perfettisconosciuti->title; ?>">
    </div>

    <div>
        <!-- Genre -->
        Film <?php echo $perfettisconosciuti->genre; ?>

        <!-- Release Year -->
        del <?php echo $perfettisconosciuti->releaseyear; ?>

        <!-- Director -->
        scritto e diretto da <?php echo $perfettisconosciuti->director; ?>,

        <!-- Duration -->
        della durata di <?php echo $perfettisconosciuti->duration; ?> minuti.
    </div>

    <br>

    <div>
        Trama: <br>
        <em>
            <!-- Function Plot -->
            <?php echo $perfettisconosciuti->tellMeThePlot(); ?>
        </em>
    </div>

    <br>

    <div>
        Premi e riconoscimenti: <br>
        <em>
            <!-- Function Awards -->
            <?php echo $perfettisconosciuti->tellMeAboutAwards(); ?>
        </em>
    </div>
</body>
</html>