<?php
class BankAccount {
    private $balance;
    private $accountNumber;
  
    public function __construct($accountNumber, $initialBalance = 0) {
      $this->accountNumber = $accountNumber;
      $this->balance = $initialBalance;
    }
  
    public function deposit($amount) {
      if ($amount <= 0) {
        throw new Exception("Le montant du dépôt doit être positif.");
      }
  
      $this->balance += $amount;
      echo "Dépôt de $amount effectué. Votre nouveau solde est de : " . $this->getBalance() . PHP_EOL;
    }
  
    public function withdraw($amount) {
      if ($amount <= 0) {
        throw new Exception("Le montant du retrait doit être positif.");
      }
  
      if ($amount > $this->balance) {
        throw new Exception("Le solde insuffisant pour effectuer ce retrait.");
      }
  
      $this->balance -= $amount;
      echo "Retrait de $amount effectué. Votre nouveau solde est de : " . $this->getBalance() . PHP_EOL;
    }
  
    private function getBalance() {
      return $this->balance;
    }
  }
  
  // Exemple d'utilisation
  $account = new BankAccount(123456789, 1000);
  
  $account->deposit(500); // Dépôt de 500 effectué. Votre nouveau solde est de : 1500
  $account->withdraw(200); // Retrait de 200 effectué. Votre nouveau solde est de : 1300
  
  try {
    $account->withdraw(1500); // Solde insuffisant pour effectuer ce retrait.
  } catch (Exception $e) {
    echo "Erreur : " . $e->getMessage() . PHP_EOL;
  }