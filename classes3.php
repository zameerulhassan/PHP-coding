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
        
        public function __construct(){
            Student::$countOfObjects++; //this is how to access static variable even within class.
        }
    }

        Student::lookup();
        echo "<br />";
        $std1= new Student();
        $std2=new Student();

        echo Student::$static_property;
        echo "<br />";
        echo "Number of students created so far :"." ". Student::$countOfObjects;
        $std3= new Student();
        $std4=new Student();
        $std5= new Student();
        $std6=new Student();
        echo "<br />";
        echo "Number of students created so far :"." ". Student::$countOfObjects;
    ?>
</body>
</html>