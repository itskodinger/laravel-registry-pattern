<?php 

namespace App\Services\Registry;

use App\Services\Contracts\Sim;

class SimCardRegistry {

    /**
     * Sim Card Prefix Registry.
     * 
     * @var array
     */
    public $simCards = [];

    /**
     * Register New SimCard
     * 
     * @return void
     */
    public function register($prefix, Sim $sim) {
        $this->simCards[$prefix] = $sim;
    }

    /**
     * Retrieve the SimCard Object.
     * 
     * @return Sim
     */
    public function get($prefix) {
        if(array_key_exists($prefix, $this->simCards)) {
            return $this->simCards[$prefix];
        }

        throw new \Exception("Unregistered Sim Card");
    
    }

}