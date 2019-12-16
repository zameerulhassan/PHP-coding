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
        public function get_Name(){
            return $this->name;
        }
        public function set_Name($x){
            $this->name=$x;
        }

        public function get_Major(){
            return $this->majorIn;
        }
        public function set_Major($x){
            $this->majorIn=$x;
        }
        public function __construct($studnet, $subject, $gpa){
            $this->name =$studnet;
            $this->majorIn =$subject;
            $this->GPA=$gpa;
        }
        public function __destruct(){
            echo ("<br />");
            echo $this->name . " is destroyed";
        }
        static function pwd_string(){
            echo "Please Enter Your Password";
        }
    }
    $student1 = new Student("zam", "CIT", 3.2);
    echo "the name is  :".$student1->get_Name();
    $student1->set_Name("Ali");
    echo ("<br />");
    echo "After Setting the Name  :";
    echo ("<br />");
    echo "the name is  :".$student1->get_Name();
    echo ("<br />");
    $student1->get_Major();
    echo ("<br />");
    echo $student1->set_Major("Maths + Physics");
    echo $student1->get_Major();
    echo ("<br />");
    Student::pwd_string();
    ?>
</body>
</html>