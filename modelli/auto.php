<?php 
  namespace modelli\auto;
  
  include "veicolo.php";
  use modelli\veicolo\Veicolo;

  class Auto extends Veicolo {
    private int $velocita;

    public function __construct(string $marca, string $modello, int $anno, int $velocita) {
        parent::__construct($marca, $modello, $anno);
        $this->velocita = $velocita;
    }

    public function getVelocita(): int {
      return $this->velocita;
    }
    
    public function setVelocita(int $velocita) {
      $this->velocita = $velocita;
    }
  }
?>