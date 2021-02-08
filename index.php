<?php

// TODO n'oubliez pas de créer votre classe dans le dossier classes.

include "./classes/StrUtils.php";

$phrase = new StrUtils("blabalbalbalbal lfalfala");

$phrase->bold();
echo $phrase;
$phrase->reset();

$phrase->italic();
echo $phrase;
$phrase->reset();

$phrase->capitalize();
echo $phrase;
$phrase->reset();

$phrase->underline();
echo $phrase;
$phrase->reset();

$phrase->uglify();
echo $phrase;
