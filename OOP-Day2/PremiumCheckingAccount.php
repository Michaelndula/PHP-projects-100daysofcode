<?php

require_once 'CheckingAccount.php';
class PremiumAccount extends CheckingAccount{
    public $minimumBalance = 7000;
}