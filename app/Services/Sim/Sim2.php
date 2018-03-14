<?php

namespace App\Services\Sim;

use App\Services\Contracts\Sim;

class Sim2 implements Sim
{

    public function cekKuota()
    {
        return 'Sisa kuota midnight anda adalah 2GB lebih 200Byte';
    }

    public function cekPulsa()
    {
        return 'Sisa pulsa anda lebih dari 200k';
    }

}
