<?php

use WTW\services\filmgetter\OmdRepository;

require_once __DIR__ . '/vendor/autoload.php';
$omdRepository = new OmdRepository('tt3896198');
$film = $omdRepository->getFilm();
print_r($film);
