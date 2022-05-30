<?php
require './model/ManageExpositions.php';

$expo = new ManageExpo();

$info_expo = $expo->getExpoList();

require './view/expositions.php';
