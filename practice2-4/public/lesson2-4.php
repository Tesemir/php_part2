<?php

use lesson_2_4\app\BankAccount;

require '../../vendor/autoload.php';

$account1 = new BankAccount('Artem', 300000, '+777757423', 'RUB');
$account2 = new BankAccount('Anton', 15000, '+43245532', 'EUR');

$account1->deposit(50000);
$account1->withdraw(10000);
$account2->deposit(2000);
$account2->withdraw(1500);

$account1->displayAccountInfo();
print_r("\n\n");

$account2->displayAccountInfo();