<!DOCTTYPE html>
<html>
<head>
    <meta charset="utf-8"> 
    <title></title>
</head>
<body>
    <?php   
    class Student{
        private $name, $majorIn, $GPA;
        const SPANISH = 1;
        const ENGLISH =0;
        static $static_property="I am static";
        public static $countOfObjects=0;
        
        static function lookup()
        {
        echo self::SPANISH;
        }
        public function test(){
            echo "My Name is test function";
        }
        public function __construct(){
            Student::$countOfObjects++; //this is how to access static variable even within class.
        }
    }
    class SeniorStudent extends Student{
        public $yearOfGraduation;
        public function testChild(){
            parent::test(); //accessing function from parent class.
        }

        public function __construct(){
            parent::__construct(); //construcotrs are inherted automatically.
            $this->yearOfGraduation="9999";
        }
    }
    $std1001 = new SeniorStudent();
    $std1001->testChild();
    echo "<br />";
    ?>
</body>
</html>