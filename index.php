<?php
// Importiamo le classi da class.php
require_once 'class.php';

class Post {
    private $titolo;
    private $categoria;
    private $tag;

    public function __construct($titolo, Category $categoria, $tag) {
        $this->titolo = $titolo;
        $this->categoria = $categoria;
        $this->tag = $tag;
    }

    public function mostraArticolo() {
        echo "Titolo: " . $this->titolo . "\n";
        echo "Categoria: " . $this->categoria->getMyCategory() . "\n";
        echo "Tag: " . $this->tag . "\n";
    }
}

// Creiamo delle istanze delle categorie
$attualita = new Attualita();
$sport = new Sport();
$gossip = new Gossip();
$storia = new Storia();

// Creiamo delle istanze della classe Post
$post1 = new Post("Ultime news", $attualita, "news, attualità");
$post2 = new Post("Match di oggi", $sport, "sport, calcio");
$post3 = new Post("Le ultime sul gossip", $gossip, "gossip, celebrità");
$post4 = new Post("Evoluzione storica", $storia, "storia, cultura");

// Mostriamo gli articoli
$post1->mostraArticolo();
echo "\n";
$post2->mostraArticolo();
echo "\n";
$post3->mostraArticolo();
echo "\n";
$post4->mostraArticolo();
?>
