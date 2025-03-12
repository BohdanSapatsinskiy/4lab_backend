<?php
namespace Models;

class Student extends AbHuman
{
    private $university;
    private $course;
    private $specialization;

    public function __construct($name, $height, $weight, $age, $university, $course, $specialization)
    {
        parent::__construct($name, $height, $weight, $age);

        $this->university = $university;
        $this->course = $course;
        $this->specialization = $specialization;
    }
    
    public function cleanRoom(): string {
        return "Студент прибирає кімнату";
    }

    public function cleanKitchen(): string {
        return "Студент прибирає кухню";
    }

    protected function birthNotification()
    {
        echo "Студент має дитину!";
    }

    public function getUniversity()
    {
        return $this->university;
    }
    public function setUniversity($university)
    {
        $this->university = $university;
    }


    public function getCourse()
    {
        return $this->course;
    }
    public function setCourse($course)
    {
        $this->course = $course;
    }


    public function getSpecialization()
    {
        return $this->specialization;
    }
    public function setSpecialization($specialization)
    {
        $this->specialization = $specialization;
    }


    public function NextCourse()
    {
        $this->course += 1;
    }
}
