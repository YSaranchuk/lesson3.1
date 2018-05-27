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
$сarCooper = new Car();
$сarAudi->marka = 'MINI';
$сarAudi->modelavto = 'Cooper';
$сarAudi->coloravto = 'grey';
$сarBMV = new Car();
$сarBMV->marka = 'BMV';
$сarBMV->modelavto = 'X8';
$сarBMV->coloravto = 'red';

// Телевизор
class TV
{
    public $marka;
    public $resolution;
    public $diagonal;
    public function getTV()
    {
        echo $this->marka . ' ' . $this->resolution . ' ' . $this->diagonal;
    }
}
$tvSony = new TV();
$tvSony->mark = 'Sony';
$tvSony->resolution = 'FULL HD';
$tvSony->diagonal = 'white';
$tvLG = new TV();
$tvLG->mark = 'LG';
$tvLG->resolution = '4K';
$tvLG->diagonal = 'black';

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
$penParker->mark = 'Parker';
$penParker->collection = 'Jotter';
$penParker->color = 'black';
$penPero = new BallpointPen();
$penPero->mark = 'Pero';
$penPero->collection = 'Caran';
$penPero->color = 'black';
// Утка
class Duck
{
    public $breed;
    public $dwelling;
    public function getDuck()
    {
        echo $this->breed . ', обитание: ' . $this->dwelling;
    }
}
$duckPekin = new Duck();
$duckPekin->breed = 'Скрудж МакДак ';
$duckPekin->dwelling = 'Дисней';
$duckRussia = new Duck();
$duckRussia->breed = 'Русская утка';
$duckRussia->dwelling = 'Россия';
// Товар
class Goods
{
    public $name;
    public $category;
    public $price;
    public function getGoods()
    {
        echo $this->name . ' ' . $this->category . '' . $this->price;
    }
}
$goodsApple = new Goods();
$goodsApple->name = 'iPhone';
$goodsApple->category = 'Телефон';
$goodsApple->price = 35000;
$goodsSony = new Goods();
$goodsSony->name = 'Sony XA';
$goodsSony->category = 'Телефон';
$goodsSony->price = 25000;
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">

    <title>Document</title>
</head>
<body>
<?=$сarBMV->getCar();?>

</body>
</html>
