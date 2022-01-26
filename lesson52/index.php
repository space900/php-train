<!-- методы классов -->

<?php
    // class Hello {
    //     public function printText() {
    //         return "Hello, world!";
    //     }
    // }
    // $obj = new Hello;
    // echo $obj->printText();
    class Point {
        private $x;
        private $y;
        public function setX($x) { // Метод
            $this->x = $x;
        }
        public function setY($y) { // Метод
            $this->y = $y;
        }
        public function getX() { // Метод
            return $this->x;
        }
        public function getY() { // Метод
           return $this->y;
        }
        public function distance() {
            return sqrt($this->getX()**2 + $this->getY()**2);
        }
    }
    $p1 = new Point;
    $p1->setX(1);
    $p1->setY(7);
    echo $p1->distance();
?>

<!-- Статический метод -->


<?php
    class Hello {
        public static function printText() {
            return "Hello, world!";
        }
    }
    echo Hello::printText();
?>

<!-- статический вызов (ссылка на статическую переменную этого класса)  -->
<br>
<?php
    class Page {
        static $content = "Тело сайта<br>";
        public static function footer() {
            return "Подвал сайта<br>";
        }
        public static function header() {
            return "Шапка сайта<br>";
        }
        public static function site() {
            echo self::header() . self::$content . self::footer();
        }
    }

    Page::site();
?>

<!-- Конструкторы -->

<?php
    class People {
        private $name;
        public function __construct() {
            echo 'Вызов конструктора';
            $this->name = "Ivan";
        }
    }
    $obj = new People();
    echo '<pre>';
    echo print_r($obj);
    echo '</pre>';
?>
<br>
<?php
    class Math {
        private $x;
        private $y;
        public function __construct($x=5, $y=10) {
            $this->x = $x;
            $this->y = $y;
        }
        public function __toString() {
            return "({$this->x}, {$this->y})";
        }
    }
    $obj = new Math(15, 5);
    // echo '<pre>';
    // echo print_r($obj);
    // echo '</pre>';
    echo "{$obj}";
?>

<!-- Наследование -->

<?php
    abstract class Animal {
        // protected доступен при наследовании, снаружи вызвать нельзя!
        public $legs = 4;
        final public function info() { // final запрещает перегружать метод (или например конструктор, или класс) у дочерних классов
            echo "У меня {$this->legs} лапы.";
        }
        abstract public function color(); // при abstract метод будет обязателен в дочерних классах
    }

    class Dog extends Animal {
        public function color() {
            echo 'black';
        }
        public $name = "Собака";
        // public function info() { // пример перегрузки метода
        //     echo "Я {$this->name}, У меня {$this->legs} лапы.";
        // }
        public function voice() {
            echo "{$this->name} издает звук гав-гав";
        }
    }

    class Cat extends Animal {
        public function color() {
            echo 'white';
        }
        public $name = "Кошка";
        public function voice() {
            echo "{$this->name} издает звук мяу";
        }
    }
    $dog = new Dog();
    $dog->info();
    $dog->voice();
    // $animal = new Animal();

    $cat = new Cat();
    $cat->info();
    $cat->voice();
    if($dog instanceof Dog) {
        echo 'Dog является экземпляром класса Dog';
    }
    // echo '<pre>';
    // echo print_r($obj);
    // echo '</pre>';
    // echo "{$obj}";
?>

<!-- Abstract & final -->

<!-- нельзя создавать объект абстрактного класса, он только для наследования -->
