<?php

class Person
{
    public function __construct(
        protected string $name, 
        protected int $years = 18
        ) 
    {}

    public function __destruct()
    {
        echo "Objekt je unisten \n";
    }

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
    public function __construct(
        string $name, int $years = 18, private string $title
        )
    {
        parent::__construct($name, $years);
    }

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
    private array $students = [];

    public function __construct(
        private Teacher $teacher = new Teacher('Ana Anic', 28, 'Senior Developer')
        )
    {}

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

$marko = new Student(name: 'Marko Markovic', years: 23);
$ivan = new Student('Ivan Ivic');
$petar = new Student('Petar Peric');

$group->addStudent($marko);
$group->addStudent($ivan);
$group->addStudent($petar);

$group->printInfo();