<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inheritance</title>
</head>
<body>
    <?php
        require 'PremiumCheckingAccount.php';

        $premiumAccount = new PremiumAccount();

        echo $premiumAccount->minimumBalance . '<br>';

        $premiumAccount->deposit(30);
        $premiumAccount->withdraw(10);
        $premiumAccount->transfer(1000);

    ?>
</body>
</html>