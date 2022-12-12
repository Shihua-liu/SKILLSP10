<?php

$aanhef = array(
    "aanhef" => "Beste",
    "persoon" => "klant");

$korting = array(
    "product" => str_replace("[[product]]","Chocoladereep", "U heeft in de voorgaande bestelling voor [[product]] gekozen"),
    "korting" => "Bij Uw volgende bestelling kunnen we U een korting van 10% aanbieden op hetzelfde product"
);

$ondertekening = array(
  "groet" => "Met vriendelijke groet,",
  "naam" => "Shi Hua",
  "functie" => "Directeur Webshop beheer"
);

/*
 * Opdracht 1:
 * Laat de inhoud van alle arrays zien
 * Gebruik daarvoor de functies var_dump() en print_r()
 */
echo "<pre>";
 print_r($aanhef);
 print_r($korting);
 print_r($ondertekening);
 echo "</pre>";
 echo "<br>";
 echo "<pre>";
 var_dump($aanhef);
 var_dump($korting);
 var_dump($ondertekening);
 echo "</pre>"; 


 $aanbidingen = array_merge($aanhef, $korting, $ondertekening);
 echo "<pre>";
 print_r($aanbidingen);
 echo "</pre>";
 echo "<br>";
 echo "<pre>";
 var_dump($aanbidingen);
 echo "</pre>";
/*
 * Opdracht 2:
 * Vervang de waarde van persoon, in de array aanhef naar 'klant'
 * Vervang de waarde van naam, in de array ondertekening naar 'jouw naam'
 */

/*
 * Opdracht 3:
 * Vervang het woord [[product]] door jouw gekozen product in de winkelmand opdracht
 * Gebruik hiervoor de methode str_replace().
 */

/*
 * Opdracht 4:
 * Voeg nu alle arrays samen in een nieuwe array die je $aanbieding noemt.
 * Gebruik hiervoor de methode array_merge()
 */

/*
 * Opdracht 5:
 * Toon de inhoud van de nieuwe array $aanbieding
 */

