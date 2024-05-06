// Class induk untuk hewan
class Animal {
    public function sound() {
        echo "Hewan berbunyi.";
    }
}

// Class anak untuk kucing yang mewarisi dari Animal
class Cat extends Animal {
    public function sound() {
        echo "Kucing berbunyi: Meow.";
    }
}

// Class anak untuk anjing yang mewarisi dari Animal
class Dog extends Animal {
    public function sound() {
        echo "Anjing berbunyi: Woof.";
    }
}

// Contoh penggunaan polimorfisme
$cat = new Cat();
$dog = new Dog();

$cat->sound(); // Output: Kucing berbunyi: Meow.
$dog->sound(); // Output: Anjing berbunyi: Woof.