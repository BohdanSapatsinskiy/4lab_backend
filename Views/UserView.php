<?php
namespace Views;
// Сторінка користувача, відображає отриману інформацію
class UserView {
    public function render(string $name) {
        echo "Hello $name <br>";
    }
}
