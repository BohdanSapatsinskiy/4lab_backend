<?php
// require_once "Controllers/UserController.php";

use Controllers\UserController;
require_once "autoload.php";

$controller = new UserController();
echo "1 Завдання<br>";
$controller->showUser();


echo "2(5) Завдання<br>";
use Models\Circle;
$circle = new Circle(0, 0, 5);

echo $circle;
echo "<br>Координата X: " . $circle->getX();
echo "<br>Координата Y: " . $circle->getY();
echo "<br>Радіус: " . $circle->getRadius();

$circle->setX(2);
$circle->setY(5);
$circle->setRadius(8);

echo "<br>Змінене коло: " . $circle . "<br>";

echo "3(6) Завдання";
$circle1 = new Circle(1, 6, 5);
$circle2 = new Circle(3, 4, 5);

echo "<br>1 коло: " . $circle1;
echo "<br>2 коло: " . $circle2;

if ($circle1->checkIntersection($circle2)) {
    echo "<br>Кола перетинаються!";
} else {
    echo "<br>Кола не перетинаються!";
}

use Models\FileManager;
echo "<br>4(7) Завдання<br>";
echo"Вміст file1.txt<br>";
echo FileManager::readFile("file1.txt") . "<br>"; 
FileManager::writeFile("file1.txt", "\nHello world!");
echo"Вміст file1.txt<br>";
echo FileManager::readFile("file1.txt") . "<br>";
echo"Вміст file2.txt<br>";
echo FileManager::readFile("file2.txt") . "<br>";
FileManager::clearFile("file2.txt");
echo"Вміст file2.txt<br>";
echo FileManager::readFile("file2.txt") . "<br>";


// use Models\Human;
// use Models\Student;
// use Models\Programmer;
// echo "<br>5(8) Завдання<br>";

// $human = new Human("Артур", 175, 70, 23);
// echo "Ім'я: " . $human->getName() . "<br>";
// echo "Зріст: " . $human->getHeight() . " см<br>";
// echo "Маса: " . $human->getWeight() . " кг<br>";
// echo "Вік: " . $human->getAge() . " років<br>";


// $student = new Student("Богдан", 175, 78, 21, "Політехніка", 2, "121 ІПЗ");
// echo "Студент: " . $student->getUniversity() . ", Курс: " . $student->getCourse() . ", Спеціальність: " . $student->getSpecialization() . "<br>";
// $student->NextCourse();
// echo "Переведено на курс: " . $student->getCourse() . "<br>";


// $programmer = new Programmer("Олександр", 180, 80, 28, ["PHP", "JavaScript"], 2);
// echo "Програміст: Мови програмування: " . implode(", ", $programmer->getLanguages()) . ", Досвід: " . $programmer->getExperience() . " років<br>";
// $programmer->addLanguage("Python");
// echo "Програміст після вивчення мови: " . implode(", ", $programmer->getLanguages()) . "<br>";

// $student->setAge(30);
// $student->setHeight(180);
// $student->setWeight(80);
// echo "Ім'я: " . $student->getName() . "<br>";
// echo "Зріст: " . $student->getHeight() . " см<br>";
// echo "Маса: " . $student->getWeight() . " кг<br>";
// echo "Вік: " . $student->getAge() . " років<br>";

// $programmer->setAge(35);
// $programmer->setHeight(160);
// $programmer->setWeight(75);
// echo "Ім'я: " . $programmer->getName() . "<br>";
// echo "Зріст: " . $programmer->getHeight() . " см<br>";
// echo "Маса: " . $programmer->getWeight() . " кг<br>";
// echo "Вік: " . $programmer->getAge() . " років<br>";


use Models\Student;
use Models\Programmer;
echo "<br>6(9) Завдання<br>";

$student = new Student("Павло",175, 78, 21, "Політехніка", 2, "121 ІПЗ");
$student->birthChild();

echo "<br>";

$programmer = new Programmer("Дмитро", 180, 75, 30, ["PHP", "JavaScript"], 5);
$programmer->birthChild();

echo "<br>7(10) Завдання<br>";

echo $student->cleanRoom() . "<br>";
echo $student->cleanKitchen() . "<br>";


echo $programmer->cleanRoom() . "<br>";
echo $programmer->cleanKitchen() . "<br>";