<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require_once 'Content.php';
require_once 'Article.php';
require_once 'Ad.php';
require_once 'Vacancy.php';

$article1 = new Article ('Article 1 Title', 'Article 1 Text');
$article2 = new Article ('Article 2 Title', 'Article 2 Text');
$ad = new Ad ('Ad 1 Title', 'Ad 1 Text');
$vacancy = new Vacancy ('Vacancy 1 Title', 'Vacancy 1 Text');

$contentArray = [$article1, $article2, $ad, $vacancy];

foreach ($contentArray as $content) {
    echo '<h2>' . $content->displayTitle() . '</h2>';
    echo '<p>' . $content->getText() . '</p>';
    echo '<hr>';
}