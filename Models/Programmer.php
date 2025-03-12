<?php
namespace Models;

class Programmer extends AbHuman
{

    private $languages;
    private $experience;


    public function __construct($name, $height, $weight, $age, $languages, $experience)
    {
        parent::__construct($name, $height, $weight, $age);

        $this->languages = $languages;
        $this->experience = $experience;
    }
    public function cleanRoom(): string {
        return "Програміст прибирає кімнату";
    }
    public function cleanKitchen(): string {
        return "Програміст прибирає кухню";
    }
    protected function birthNotification()
    {
        echo "Програміст має дитину!";
    }

    public function getLanguages()
    {
        return $this->languages;
    }
    public function setLanguages($languages)
    {
        $this->languages = $languages;
    }

    public function getExperience()
    {
        return $this->experience;
    }
    public function setExperience($experience)
    {
        $this->experience = $experience;
    }

    public function addLanguage($language)
    {
        $this->languages[] = $language;
    }
}
