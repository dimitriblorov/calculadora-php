<?php

class Calculadora {
       
    public float $total = 0;

    public function add($sum) {
        $this->total += $sum;
    }

    public function sub($subtract) {
        $this->total -= $subtract;
    }

    public function multiply($multiply) {
        $this->total *= $multiply;
    }

    public function divide($divide) {
        $this->total /= $divide;
    }

    public function total() {
        return $this->total;
    }

    public function clear() {
        $this->total = 0;
    }
}