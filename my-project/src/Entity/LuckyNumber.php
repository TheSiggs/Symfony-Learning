<?php
namespace App\Entity;

class LuckyNumber {
    protected $number;

    public function getNumber(): int {
        return $this->number;
    }

    public function setNumber(int $number): void {
        $this->number = $number;
    }
}