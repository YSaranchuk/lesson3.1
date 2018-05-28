<?php
// Машина
class AvtoPro
{
    public $marka;
    public $modelavto;
    public $coloravto;
}
class Car extends AvtoPro
{
    public function getCar()
    {
        $html = $this->marka . ' ' . $this->modelavto . ' ' . $this->coloravto;
        return $html;
    }
}
$сarBMV = new Car();
$сarBMV->marka = 'BMV';
$сarBMV->modelavto = 'i8';
$сarBMV->coloravto = 'red';
$сarCooper = new Car();
$сarCooper->marka = 'MINI';
$сarCooper->modelavto = 'Cooper';
$сarCooper->coloravto = 'grey';
// Телевизор
class TV
{
    public $markamodel;
    public $resolution;
    public $diagonal;
    public function getTV()
    {
        echo $this->markamodel . ' ' . $this->resolution . ' ' . $this->diagonal;
    }
}
$tvSony = new TV();
$tvSony->markamodel = 'Sony KD-65XE9305';
$tvSony->resolution = 'HDR';
$tvSony->diagonal = 46;
$tvLG = new TV();
$tvLG->markamodel = 'LG 43UH610V';
$tvLG->resolution = '4K';
$tvLG->diagonal = 49;

// Шариковая ручка
class BallpointPen
{
    public $marka;
    public $collection;
    public $color;
    public function getPen()
    {
        echo $this->marka . ' ' . $this->collection . ' ' . $this->color;
    }
}
$penParker = new BallpointPen();
$penParker->marka = 'Parker';
$penParker->collection = 'Jotter';
$penParker->color = 'black';
$penPero = new BallpointPen();
$penPero->marka = 'Pero';
$penPero->collection = 'Caran';
$penPero->color = 'black';

// Утка
class Duck
{
    public $species;
    public $habitat;
    public $edible;
    public function getDuck()
    {
        echo $this->species . ', be: ' . $this->habitat . ' ' . $this->edible;
    } 
}    
$duckEn = new Duck();
$duckEn->species = 'Scrooge McDuck ';
$duckEn->habitat = 'Disney';
$duckEn->edible = false;
$duckRu = new Duck();
$duckRu->species = 'Drake';
$duckRu->habitat = 'Altai';
$duckRu->edible = true;
// Товар
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
    <meta charset="UTF-8"><?php
// Машина
class AvtoPro
{
    public $marka;
    public $modelavto;
    public $coloravto;
}
class Car extends AvtoPro
{
    public function getCar()
    {
        $html = $this->marka . ' ' . $this->modelavto . ' ' . $this->coloravto;
        return $html;
    }
}
$сarBMV = new Car();
$сarBMV->marka = 'BMV';
$сarBMV->modelavto = 'i8';
$сarBMV->coloravto = 'red';
$сarCooper = new Car();
$сarCooper->marka = 'MINI';
$сarCooper->modelavto = 'Cooper';
$сarCooper->coloravto = 'grey';
// Телевизор
class TV
{
    public $markamodel;
    public $resolution;
    public $diagonal;
    public function getTV()
    {
        echo $this->markamodel . ' ' . $this->resolution . ' ' . $this->diagonal;
    }
}
$tvSony = new TV();
$tvSony->markamodel = 'Sony KD-65XE9305';
$tvSony->resolution = 'HDR';
$tvSony->diagonal = 46;
$tvLG = new TV();
$tvLG->markamodel = 'LG 43UH610V';
$tvLG->resolution = '4K';
$tvLG->diagonal = 49;
// Шариковая ручка
class BallpointPen
{
    public $marka;
    public $collection;
    public $color;
    public function getPen()
    {
        echo $this->marka . ' ' . $this->collection . ' ' . $this->color;
    }
}
$penParker = new BallpointPen();
$penParker->marka = 'Parker';
$penParker->collection = 'Jotter';
$penParker->color = 'black';
$penPero = new BallpointPen();
$penPero->marka = 'Pero';
$penPero->collection = 'Caran';
$penPero->color = 'black';
// Утка
class Duck
{
    public $species;
    public $habitat;
    public $edible;
    public function getDuck()
    {
        echo $this->species . ', be: ' . $this->habitat . ', you can eat? ' . $this->edible;
    } 
}    
$duckEn = new Duck();
$duckEn->species = 'Scrooge McDuck ';
$duckEn->habitat = 'Disney';
$duckEn->edible = 'No';
$duckRu = new Duck();
$duckRu->species = 'Drake';
$duckRu->habitat = 'Altai';
$duckRu->edible = 'Yes';
// Товар
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
$goodsPhone->price = 39000;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Document</title>
</head>
<body>
<?=$сarCooper->getCar() . '<br>';?>
<?=$сarBMV->getCar() . '<br>' . '<hr>';?>
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
