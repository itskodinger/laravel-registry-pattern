<?php 

namespace App;

use App;
use App\Services\Registry\SimCardRegistry;

class Smartphone {

    protected $simRegistry;

    public function __construct() {
        $this->simRegistry = App::make(SimCardRegistry::class);
    }

    public function kuota($sim) {
        try {
            $simCard = $this->simRegistry->get($sim);
        } catch(\Exception $e) {
            return;
        }

        return $simCard->cekKuota();
    }

    public function pulsa($sim) {
        try {
            $simCard = $this->simRegistry->get($sim);
        } catch (\Exception $e) {
            return;
        }

        return $simCard->cekPulsa();

    }

}