<?php
class Car {
    public function __construct($marka, $coloravto, $price) {
        $this->marka = $marka;
	    $this->coloravto = $coloravto;
        $this->price = $price;
    }
     public function getPrice() {
        echo $this->marka . ' ' . $this->coloravto . ' ' . $this->price;
    }
}
$сarBMV = new Car('BMV i8', 'red', 2000000);
$сarCooper = new Car('MINICooper', 'grey', 2500000);

class TV {
    public function __construct($markamodel, $resolution, $diagonal) {
        $this->markamodel = $markamodel;
	    $this->resolution = $resolution;
        $this->diagonal = $diagonal;
    }
    public function getTV() {
        echo $this->markamodel . ' ' . $this->resolution . ' ' . $this->diagonal;
    }
}
$tvSony = new TV('Sony KD-65XE9305', 'HDR', 46);
$tvLG = new TV('LG 43UH610V', '4K', 49);

class BallpointPen {
    public function __construct($marka, $collection, $color) {
    $this->marka = $marka;
    $this->collection = $collection;
    $this->color = $color;
}
    public function getPen() {
        echo $this->marka . ' ' . $this->collection . ' ' . $this->color;
    }
}
$penParker = new BallpointPen('Parker', 'Jotter', 'black');
$penPero = new BallpointPen('Pero', 'Caran', 'black');

class Duck {
    public function __construct($species, $habitat, $edible) {
    $this->species = $species;
    $this->habitat = $habitat;
    $this->edible = $edible;
}
    public function getDuck() {
        echo $this->species . ', be: ' . $this->habitat . '. Edible? ' . $this->edible;
    } 
}    
$duckEn = new Duck('Scrooge McDuck', 'Disney', 'No. It \'s a rich duck');
$duckRu = new Duck('Drake', 'Altai', 'Yes');
// Оставляю для наглядности пример с товарами  как   __construct уменьшает и упрощает код
class Goods
{
    public $name;
    public $category;
    public $price;
    public function getGoods()
    {
        echo $this->name . ' ' . $this->category . ' ' . $this->price;
    }
}
$goodsCrisp = new Goods();
$goodsCrisp->name = 'Lays';
$goodsCrisp->category = 'FoodFastFood';
$goodsCrisp->price = 69;
$goodsPhone = new Goods();
$goodsPhone->name = 'Sony X';
$goodsPhone->category = 'Flagship';
$goodsPhone->price = 40000;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Document</title>
</head>
<body>
  <?=$сarBMV->getPrice() . '<br>';?>
  <?=$сarCooper->getPrice() . '<br>' . '<hr>';?>
  <?=$tvSony->getTV() . '<br>';?>
  <?=$tvLG->getTV() . '<br>' . '<hr>';?>
  <?=$penParker->getPen() . '<br>';?>
  <?=$penPero->getPen() . '<br>' .'<hr>';?>
  <?=$duckEn->getDuck() . '<br>';?>
  <?=$duckRu->getDuck() . '<br>' .'<hr>';?>
  <?=$goodsCrisp->getGoods() . '<br>';?>
  <?=$goodsPhone->getGoods() . '<br>' .'<hr>';?>
</body>
</html>
