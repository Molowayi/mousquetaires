<?php

$menu=simplexml_load_file("menu.xml") or die("Error: Cannot create object");

$accueil = $menu->onglet[0]->principal;
$href_accueil = $menu->onglet[0]["lien"];

$apropos = $menu->onglet[1]->principal;
$href_apropos = $menu->onglet[1]["lien"];

$actualites = $menu->onglet[3]->principal;
$href_actualites = $menu->onglet[3]["lien"];

$inscription = $menu->onglet[4]->principal;
$href_inscription = $menu->onglet[4]["lien"];

$contact = $menu->onglet[5]->principal;
$href_contact = $menu->onglet[5]["lien"];

$livres = $menu->onglet[2]->principal;
$href_livres = $menu->onglet[2]["lien"];


?>