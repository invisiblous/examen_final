<?php
require './model/ManageBoutique.php';

$products = new ManageBoutique();

$info_products = $products->getProduitList();

require './view/boutique.php';