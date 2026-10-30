<?php
require_once 'Seance.php';
require_once 'BilletPleinTarif.php';
require_once 'BilletReduit.php';
require_once 'BilletEnfant.php';

$seanceDunesday = new Seance('2026-12-16' , '20:30' , 'Dunesday');

$billet12 = new BilletPleinTarif(12 , 23.5 , $seanceDunesday);
$billet11 = new BilletEnfant(11 , 5 , $seanceDunesday , 9);
$billet42 = new BilletReduit(42 , 23.5 , $seanceDunesday , 'Carte Étudiante');

echo('<p>'.$billet12->calculerPrix().'€, ');
$billet12->imprimerDetail();
echo("</p>");
echo('<p>'.$billet11->calculerPrix().'€, ');
$billet11->imprimerDetail();
echo("</p>");
echo('<p>'.$billet42->calculerPrix().'€, ');
$billet42->imprimerDetail();
echo("</p>");