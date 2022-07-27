<?php
class Movie {
    public $title;

    public $genre;

    public $director;

    public $duration;

    public $releaseyear;

    public $plot;

    public function __construct($_title) {
        $this->title = $_title;
    }

    public function tellMeThePlot() {
        return $this->plot;
    }
    
}

$memento = new Movie('Memento');
$memento->genre = 'Thriller';
$memento->director = 'Christopher Nolan';
$memento->duration = '113';
$memento->releaseyear = '2000';
$memento->plot = 'Memento, il film diretto da Christopher Nolan, vede protagonista Leonard "Lenny" Shelby (Guy Pearce), un ex investigatore di una compagnia assicurativa. L\'uomo indossa abiti costosi, guida una Jaguar, ma vive in un modesto albergo pagando tutto in contanti. Soffre di perdita di memoria a breve termine e visto che non riesce a trattenere le informazioni per più di 15 minuti, scatta polaroid e scrive continuamente tutto ciò che succede appuntandolo su dei post-it e sul corpo con dei tatuaggi che lo aiutano a ricordare. Grazie a questo sistema, sa che due uomini hanno violentato e ucciso la moglie Catherine e che gli hanno provocato il trauma mnemonico colpendolo alla testa; la sua unica preoccupazione è quella di rintracciarli per vendicarsi. Non può fidarsi di nessuno, nemmeno del suo amico poliziotto Teddy Gamell (Joe Pantoliano) o dell\'amante Nathalie (Carrie-Anne Moss). Un caso di quando lavorava come investigatore è stato determinante per Lenny: la storia di Sammy Jankis (Stephen Tobolowsky), affetto dalla stessa malattia della memoria in seguito ad un incidente, a cui aveva negato il risarcimento assicurativo, archiviando la pratica poiché legata secondo lui ad un problema mentale e non fisico. La moglie diabetica, disperata, si era fatta iniettare più dosi di insulina a breve distanza l\'una dall\'altra per mettere alla prova la buona fede del marito, che alla fine era stato internato in un ospedale psichiatrico per aver provocato il coma della consorte. Lenny, scosso da questi avvenimenti, aveva capito la veridicità della malattia di Sammy, e quando si era ritrovato a soffrire della stessa sua patologia, si era tatuato sul polso la frase "Ricordati di Sammy Jankis" e aveva iniziato a registrare ogni avvenimento per non incappare nella stessa tragica fine del suo cliente. Tutta la pellicola si svolge come la ricostruzione di Lenny che cerca di capire come sia arrivato ad uccidere colui che ritiene essere l\'assassino della moglie all\'inizio del film, in una serie di macchinosi ragionamenti e supposizioni, fino ad un risultato sconvolgente e inaspettato.';

$eternalsunshineofthespotlessmind = new Movie('Eternal Sunshine of the Spotless Mind');
$eternalsunshineofthespotlessmind->genre = 'Drammatico';
$eternalsunshineofthespotlessmind->director = 'Michel Gondry';
$eternalsunshineofthespotlessmind->duration = '108';
$eternalsunshineofthespotlessmind->releaseyear = '2004';
$eternalsunshineofthespotlessmind->plot = 'Se mi lasci ti cancello è un film del 2004 diretto da Michel Gondry. Al termine dell’ennesimo litigio con il fidanzato Joel, Clementine (Kate Winslet), una ragazza estroversa e spontanea, si rivolge al dottor Howard Mierzwiak (Tom Wilkinson) per far cancellare Joel dalla sua mente. Infatti, alla clinica Lacuna Inc., la ragazza si sottopone a una procedura in grado di eliminare tutti i ricordi collegati alla storia d\'amore finita male. Joel (Jim Carrey), il giorno dopo la cancellazione, la cerca per riappacificarsi con lei, ma lei non lo ricorda. Anche lui scopre l\'esistenza della Lacuna e sceglie di far cancellare Clementine dalla sua mente, consegnando al personale della clinica tutti gli oggetti in qualche modo collegati alla loro relazione. Seguendo la mappatura dei ricordi di Joel, inizia la procedura volta a cancellarli. Joel inizia a rivivere nella sua mente tutti i ricordi collegati a Clementine, e si rende conto di non volerla più cancellare dalla sua mente. Così, oppone resistenza alla macchina, tentando di nascondere la sua amata al di fuori dei ricordi mappati il giorno precedente, nel disperato tentativo di non dimenticarla. Questa sua resistenza causa un malfunzionamento della macchina. Joel scopre tuttavia di non poter fermare il processo ma, prima che il suo ultimo ricordo di Clementine venga cancellato, lei dice di amarlo e di tornare a cercarla nella cittadina dove si erano conosciuti. All\'alba Joel non la ricorda più. Quel giorno, festa di San Valentino, decide di disertare il lavoro e di prendere invece un treno per Montauk, dove incontra Clementine. I due, ignari l’uno dell’altra e della relazione che li univa, si conoscono e iniziano a frequentarsi. Ma il passato, anche se cancellato, incombe su di loro e metterà alla prova i loro sentimenti.';
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
    <h2>
        Tra i miei film preferiti:
    </h2>
        
    <h3>
        - <?php echo $memento->title; ?> 
    </h3>

    <div>
        Film <?php echo $memento->genre; ?>
        del <?php echo $memento->releaseyear; ?>
        scritto e diretto da <?php echo $memento->director; ?>,
        della durata di <?php echo $memento->duration; ?> minuti.
    </div>
    <br>
    <div>
        Trama: <br>
        <em>
            <?php echo $memento->tellMeThePlot(); ?>
        </em>
    </div>

</body>
</html>