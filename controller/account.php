<?php
require './model/ManageAccount.php';

$user = new ManageAccount();

$info_user = $_SESSION['user'];
$info_order = $user->getOrders();
require './view/account.php';