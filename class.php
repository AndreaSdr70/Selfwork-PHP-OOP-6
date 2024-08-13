<?php
// class.php

// Classe astratta Category
abstract class Category {
    // Metodo astratto
    abstract public function getMyCategory();
}

// Classe figlia Attualita
class Attualita extends Category {
    public function getMyCategory() {
        echo "Categoria: Attualità
";
    }
}

// Classe figlia Sport
class Sport extends Category {
    public function getMyCategory() {
        echo "Categoria: Sport
";
    }
}

// Classe figlia Gossip
class Gossip extends Category {
    public function getMyCategory() {
        echo "Categoria: Gossip
";
    }
}

// Classe figlia Storia
class Storia extends Category {
    public function getMyCategory() {
        echo "Categoria: Storia
";
    }
}

// Esempio d'uso
$categories = [
    new Attualita(),
    new Sport(),
    new Gossip(),
    new Storia(),
];

foreach ($categories as $category) {
    $category->getMyCategory();
}
?>
