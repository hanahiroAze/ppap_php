<?php

echo 'PPAP♪' . PHP_EOL;

$i = new \PicoTaro();

$i->have('pen', 'apple');
$floor1 = $i->say();
echo $i->say();
echo PHP_EOL;

$i->have('pen', 'pineapple');
$floor2 = $i->say();
echo $i->say();
echo PHP_EOL;

$i->have($floor1, $floor2);
echo $i->say();
echo PHP_EOL;
echo PHP_EOL;
echo $i->say();

class PicoTaro
{
    private $rightHand = '';
    private $leftHand = '';

    public function have($rightHand, $leftHand)
    {
        $this->rightHand = $rightHand;
        $this->leftHand = $leftHand;
    }

    public function say()
    {
        return $this->order($this->rightHand, $this->leftHand);
    }

    public function order($rightHand, $leftHand)
    {
        $words = '';

        if ($rightHand == 'pen' && $leftHand == 'apple') {
            $words = 'applePen';
        } elseif ($rightHand == 'pen' && $leftHand == 'pineapple') {
            $words = 'pineapplePen';
        } elseif ($rightHand == 'applePen' && $leftHand == 'pineapplePen') {
            $words = 'penPineappleApplePen';
        }

        return $words;
    }
}