<?php 
  include "modelli/auto.php";
  use modelli\auto\Auto;
  use modelli\veicolo\Veicolo;

  $auto = new Veicolo("Fiat", "500", 2023);
  echo "<p>Informazioni base. Marca: ".$auto->getMarca().", Modello: ".$auto->getModello().", Anno: ".$auto->getAnno()."</p>";
  
  $auto = new Auto("Ferrari", "SF90", 2023, 300);
  echo " <p>Marca: ".$auto->getMarca().", Modello: ".$auto->getModello().", Anno: ".$auto->getAnno().", Velocità massima: ".$auto->getVelocita()."</p>";

  $auto->setVelocita(350);

  echo "<p>La nuova velocità massima impostata è: ".$auto->getVelocita()."</p>";
  echo " <p>Marca: ".$auto->getMarca().", Modello: ".$auto->getModello().", Anno: ".$auto->getAnno().", Velocità massima: ".$auto->getVelocita()."</p>";

?>