<?php
abstract class Animal {
    // Méthode abstraite makeSound()
    abstract public function makeSound();
  }
  
  class Dog extends Animal {
    public function makeSound() {
      echo "Woof woof!";
    }
  }
  
  class Cat extends Animal {
    public function makeSound() {
      echo "Miaou miaou!";
    }
  }
  
  // Exemple d'utilisation
  $dog = new Dog();
  $cat = new Cat();
  
  $dog->makeSound(); // Affiche : Woof woof!
  $cat->makeSound(); // Affiche : Miaou miaou!