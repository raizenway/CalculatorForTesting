<?php

use App\Calculator;

require_once __DIR__ . '/../src/Calculator.php';

beforeEach(function () {
    $this->calculator = new Calculator();
});

test('penjumlahan berjalan', function () {
    expect($this->calculator->tambah(2, 3))->toBe(5);
});

test('pengurangan berjalan', function () {
    expect($this->calculator->kurang(5, 3))->toBe(2);
});

test('perkalian berjalan', function () {
    expect($this->calculator->kali(4, 5))->toBe(20);
});

test('pembagian berjalan', function () {
    expect($this->calculator->bagi(10, 2))->toBe(5);
});

test('pembagian dengan nol error', function () {
    $this->calculator->bagi(10, 0);
})->throws(\InvalidArgumentException::class);
