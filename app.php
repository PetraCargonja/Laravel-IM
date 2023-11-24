<?php

abstract class Person implements OnlineRoomConnectable
{
    public function __construct(
        protected string $name, 
        protected int $years = 18
        ) 
    {}

    public function getName(): string
    {
        return $this->name;
    }

    public function getYears(): int
    {
        return $this->years;
    }

    abstract public function sayHello(): void;
}

class Teacher extends Person
{
    public function __construct(
        string $name, int $years = 18, private string $title
        )
    {
        parent::__construct($name, $years);
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function sayHello(): void
    {
        echo "Predavac: {$this->getName()} \n";
        echo "Titula: {$this->getTitle()} \n";
        echo "Broj godina: {$this->getYears()} \n";
    }

    public function getRole(): string
    {
        return 'teacher';
    }
}

class Student extends Person
{
    public function sayHello(): void
    {
        echo "Ime: {$this->name}, godine: {$this->years} \n";
    }

    public function getRole(): string
    {
        return 'student';
    }
}

class Admin extends Person
{
    public function sayHello(): void
    {
        echo "Ja sam administrator \n";
    }

    public function getRole(): string
    {
        return 'admin';
    }
}

class Group
{
    private const MAX_NUMBER_OF_STUDENTS = 5;

    private string $name;
    private array $students = [];

    public function __construct(
        private Teacher $teacher = new Teacher('Ana Anic', 28, 'Senior Developer'),
        private Admin $admin = new Admin('Admin98 98', 30)
        )
    {}

    public function printInfo() 
    {
        echo "Ime grupe: $this->name \n";
        echo "Polaznici: \n";
        foreach ($this->students as $student) {
            $this->sayHello($student);
        }
        echo "Broj polaznika: {$this->getNumberOfStudents()} \n";
        $this->sayHello($this->teacher);
        $this->sayHello($this->admin);
    }

    private function sayHello(Person $person): void
    {
        $person->sayHello();
    }

    public function setName(string $name) 
    {
        $this->name = $name;
    }

    public function setTeacher(Teacher $teacher) 
    {
        $this->teacher = $teacher;
    }

    public function getTeacher(): Teacher
    {
        return $this->teacher;
    }

    public function getAdmin(): Admin
    {
        return $this->admin;
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

class OnlineRoom
{
    public function __construct(private Group $group)
    {}

    public function connect(OnlineRoomConnectable $onlineRoomConnectable)
    {
        if (!in_array($onlineRoomConnectable->getRole(), ['admin', 'teacher', 'tool'])){
            echo "Osoba {$onlineRoomConnectable->getName()} nije spojen/a! \n";
            return;
        }

        echo "{$onlineRoomConnectable->getName()} je spojen/a! \n";
    }
}

interface OnlineRoomConnectable
{
    const ROLE_ADMIN = 'admin';

    const ROLE_TEACHER = 'teacher';

    const ROLE_STUDENT = 'student';

    const ROLE_TOOL = 'tool';

    public function getRole(): string;

    public function getName(): string;
}

class OnlineRoomTool implements OnlineRoomConnectable
{
    public function __construct(private string $name)
    {}

    public function getRole(): string
    {
        return 'tool';
    }

    public function getName(): string
    {
        return $this->name;
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

// $group->printInfo();

$chatGPT = new OnlineRoomTool('ChatGPT');

$onlineRoom = new OnlineRoom($group);
$onlineRoom->connect($group->getTeacher());
$onlineRoom->connect($group->getAdmin());
$onlineRoom->connect($marko);
$onlineRoom->connect($ivan);
$onlineRoom->connect($petar);
$onlineRoom->connect($chatGPT);