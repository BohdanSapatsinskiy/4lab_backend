<?php
namespace Models;
// Модель користувача
class UserModel {
    private string $name;

    // Конструктор користувача
    public function __construct($name = "Новий користувач") {
        $this->name = $name;
    }

    public function getName(): string {
        return $this->name;
    }
}
