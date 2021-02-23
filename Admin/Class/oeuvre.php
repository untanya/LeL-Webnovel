<?php

include 'chapter.php';



class Oeuvre {
    private $nom;
    private $auteur;
    private $vue;
    private $avancementVO;
    private $avancementVUS;
    private $lienVO;
    private $genre;
    private $synopsis;
    private $chapitre;
    private $image;

    public function __construct($nom, $auteur, $vue, $avancementVO, $avancementVUS, $lienVO, $genre, $synopsis, $chapitre=NULL, $image) {
        $this->setName($nom);
        $this->setAuthor($auteur);
        $this->setView($vue);
        $this->setAdvancementVO($avancementVO);
        $this->setAdvancementVUS($avancementVUS);
        $this->setLinkVO($lienVO);
        $this->setGenre($genre);
        $this->setSynopsis($synopsis);
        $this->setChapter($chapitre);
        $this->setImg($image);
    }

    public function getName(){
        echo $this->nom;
    }

    public function getAuthor(){
        echo $this->auteur;
    }

    public function getView(){
        echo $this->vue;
    }

    public function getAdvancementVO(){
        echo $this->avancementVO;
    }

    public function getAdvancementVUS(){
        echo $this->avancementVUS;
    }

    public function getLinkVO(){
        echo $this->lienVO;
    }

    public function getGenre(){
        echo $this->genre;
    }

    public function getSysnopsis(){
        echo $this->synopsis;
    }

    public function getChapter(){
        echo $this->chapitre;
    }

    public function getImg(){
        echo $this->image;
    }

    public function setName($nom){
        if (is_string($nom)) {
            $this->nom = $nom;
        } else {
            throw new Exception("La valeur rentrée doit être un string");
        }
    }

    public function setAuthor($auteur){
        if (is_string($auteur)) {
            $this->auteur = $auteur;
        } else {
            throw new Exception("La valeur rentrée doit être un string");
        }
    }

    public function setView($vue){
        if (is_int($vue)) {
            $this->vue = $vue;
        } else {
            throw new Exception("La valeur rentrée doit être un entier");
        }
    }

    public function setAdvancementVO($avancementVO){
        if (is_int($avancementVO)) {
            $this->avancementVO = $avancementVO;
        } else {
            throw new Exception("La valeur rentrée doit être un entier");
        }
    }
    
    public function setLinkVO($lienVO){
        if (is_string($lienVO)) {
            $this->lienVO = $lienVO;
        } else {
            throw new Exception("La valeur rentrée doit être un lien");
        }
    }

    public function setAdvancementVUS($avancementVUS){
        if (is_int($avancementVUS)) {
            $this->avancementVUS = $avancementVUS;
        } else {
            throw new Exception("La valeur rentrée doit être un entier");
        }
    }

    public function setGenre($genre){
        if (is_string($genre)) {
            $this->genre = $genre;
        } else {
            throw new Exception("La valeur rentrée doit être un entier");
        }
    }

    public function setSynopsis($synopsis){
        if (is_string($synopsis)) {
            $this->synopsis = $synopsis;
        } else {
            throw new Exception("La valeur rentrée doit être un string");
        }
    }

    public function setChapter($chapitre){
        if (is_string($chapitre)) {
            $this->chapitre = $chapitre;
        } else {
            throw new Exception("La valeur rentrée doit être un entier");
        }
    }

    public function setImg($image){
        if (is_string($image)) {
            $this->image = $image;
        } else {
            throw new Exception("La valeur rentrée doit être un string");
        }
    }

    public function getAttributes(){
        echo "L'oeuvre $this->nom de $this->auteur.";
        echo "<br />", "\n";
        echo "la team US est au $this->avancementVUS chap, et la VO est au $this->avancementVO chap.";
        echo "<br />", "\n";
        echo "L'oeuvre a fait $this->vue";
        echo "<br />", "\n";
        echo "le lien pour la VO : $this->lienVO.";
        echo "<br />", "\n";
        echo "Cette oeuvre a pour genre : $this->genre.";
        echo "<br />", "\n";
        echo "Son synopsis : $this->synopsis.";
        echo "<br />", "\n";
        echo "Sommaire : $this->chapitre";
        echo "<br />", "\n";
        echo "$this->image";
    }
}

$oeuvre1 = new Oeuvre(
    "Everyone Else is Returnee", 
    "Toika", 
    1782, 
    380, 
    380, 
    'https://xiaowaz.fr/series-abandonnees/everyone-else-is-a-returnee', 
    "Seul", 
    "Yu Ilhan est un poissard. Livré à lui-même après le départ de ses accompagnateurs en sortie scolaire, 
    oublié par ses parents sur l’aire d’autoroute, c’est maintenant l’humanité tout entière qui l’a abandonné. 
    Seul, Yu Ilhan va devoir s’adapter à un nouveau mode de vie, et attendre son retour. 
    Il aura toutefois tout le temps nécessaire pour ça… Et lorsque l’humanité reviendra, 
    que le mana et les monstres se déverseront sur Terre, sera-t-il enfin visible à leurs yeux ?", 
    'https://xiaowaz.fr/articles/eer-prologue/', 
    'https://xiaowaz.fr/wp-content/uploads/2017/12/Everyone-Else-is-a-Returnee-1.jpg'
    );
$oeuvre1->getAttributes();


?>


