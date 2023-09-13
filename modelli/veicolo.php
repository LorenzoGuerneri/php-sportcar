<?php 
  namespace modelli\veicolo;
  
  class Veicolo {
    protected string $marca;
    protected string $modello;
    protected int $anno;

    public function __construct(string $marca, string $modello, int $anno) {
        $this->marca = $marca;
        $this->modello = $modello;
        $this->anno = $anno;
    }

    public function getMarca(): string {
      return $this->marca;
    }

    public function getModello(): string {
      return $this->modello;
    }
  
    public function getAnno(): int {
      return $this->anno;
    }
  }
?>