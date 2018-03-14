<?php

namespace App\Services\Sim;

use App\Services\Contracts\Sim;

class Sim1 implements Sim {

    public function cekKuota() {
        return 'Sisa kuota reguler anda adalah 200TB';
    }

    public function cekPulsa() {
        return 'Sisa pulsa anda kurang dari 2juta';
    }

}