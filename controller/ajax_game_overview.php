<?php

require_once dirname(__DIR__) . "/tools/includes.php";

$parse = $lang;

echo Page::construirePagePartielle('part_game_overview', $parse);
?>