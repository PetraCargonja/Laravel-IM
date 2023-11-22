<?php

class Person
{
    protected string $name;

    protected int $years;

    public function setName(string $name) 
    {
        $this->name = $name;
    }

    public function getName() 
    {
        return $this->name;
    }

    public function setYears(int $years) 
    {
        $this->years = $years;
    }

    public function getYears() 
    {
        return $this->years;
    }
}

class Teacher extends Person
{
    private string $title;

    public function setTitle(string $title) 
    {
        $this->title = $title;
    }

    public function getTitle() 
    {
        return $this->title;
    }
}

class Student extends Person
{
    public function printInfo() 
    {
        echo "Ime: {$this->name}, godine: {$this->years} \n";
    }
}

class Group
{
    private const MAX_NUMBER_OF_STUDENTS = 5;

    private string $name;
    private array $students;
    private Teacher $teacher;

    public function printInfo() 
    {
        echo "Ime grupe: $this->name \n";
        echo "Polaznici: \n";
        foreach ($this->students as $student) {
            $student->printInfo();
        }
        echo "Broj polaznika: {$this->getNumberOfStudents()} \n";
        echo "Predavac: {$this->teacher->getName()} \n";
        echo "Titula: {$this->teacher->getTitle()} \n";
        echo "Broj godina: {$this->teacher->getYears()} \n";
    }

    public function setName(string $name) 
    {
        $this->name = $name;
    }

    public function setTeacher(Teacher $teacher) 
    {
        $this->teacher = $teacher;
    }

    public function addStudent(Student $student) 
    {
        if ($this->getNumberOfStudents() >= self::MAX_NUMBER_OF_STUDENTS) {
            return;
        }

        $this->students[] = $student;
    }

    public function getNumberOfStudents() 
    {
        return count($this->students);
    }
}

$group = new Group();
$group->setName('OL-OBE_DEV_H-04/23');

$teacher = new Teacher();
$teacher->setName('Marko Markovic');
$teacher->setTitle('Senior Developer');
$teacher->setYears(30);

$group->setTeacher($teacher);

$marko = new Student();
$marko->setName('Marko Markovic');
$marko->setYears(25);

$ivan = new Student();
$ivan->setName('Ivan Ivic');
$ivan->setYears(23);

$petar = new Student();
$petar->setName('Petar Peric');
$petar->setYears(24);

$group->addStudent($marko);
$group->addStudent($ivan);
$group->addStudent($petar);

$group->printInfo();