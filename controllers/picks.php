<?php

$picks = $query->selectAllPicks('US', 'en');

require 'view/picks.view.php';