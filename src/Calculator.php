<?php

namespace App;

class Calculator
{
    public function tambah($a, $b)
    {
        return $a + $b;
    }

    public function kurang($a, $b)
    {
        return $a - $b;
    }

    public function kali($a, $b)
    {
        return $a * $b;
    }

    public function bagi($a, $b)
    {
        if ($b == 0) {
            throw new \InvalidArgumentException("Tidak bisa membagi dengan nol.");
        }
        return $a / $b;
    }

    public function testError()
    {
        $unused;
        $result = $this->tambah(5); // ❌ kurang 1 argumen
        echo $resultt;              // ❌ salah ketik: $resultt tidak didefinisikan
        $obj = new UnknownClass();  // ❌ kelas UnknownClass tidak ada
    }
}
