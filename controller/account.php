<?php
require './model/ManageAccount.php';

$user = new ManageAccount();

$info_user = $user->getInfoUser();
$info_order = $user->getOrders();
 var_dump($id_user);
require './view/account.php';