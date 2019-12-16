<!DOCTTYPE html>
<html>
<head>
    <meta charset="utf-8"> 
    <title></title>
</head>
<body>
    <?php
    
    echo "<br>";
    //classes.
    class User{
        public $name, $password;
        function myFunction(){

        }
    }
    

    $firstUser = new User();
    $firstUser -> name ="Ahmed Yamaan";
    $firstUser ->password="Mashlay";
    echo "first object name is :". ($firstUser -> name);
    echo ("<br />");
    echo "first object password is :" . ($firstUser ->password);
    echo ("<br />");
    echo ("Print_r Function is called");
    echo ("<br />");
    print_r($firstUser); 
    //this function prints object properties in human readable format (r=human readable)
    //[key] =>value

    echo ("<br />");
    echo ("<hr />");
    echo ("class with constructor and dectructors");
    echo ("<br />");
    class Student{
        public $name, $majorIn;
        function get_Name(){
            return $this->name;
        }
        public function __get($name){ //returns whatever proproty is passed
            return $this->$name;
        }

        public function __set($name, $value){ //sets whatever property is passed to value passed.
            $this->name =$value;
        }
        public function __construct($studnet, $subject){
            $this->name =$studnet;
            $this->majorIn =$subject;
        }

        public function __destruct(){
            echo ("<br />");
            echo $this->name . " is being destroyed";
            
        }
    }
    $student1 = new Student("zam", "CIT");
    echo $student1->name;
    echo ("<br />");
    echo $student1->majorIn;
    echo ("<br />");
    $student2 = new Student("Yamaani", "Physics");
    echo $student2->name;
    echo ("<br />");
    echo $student2->majorIn;
    echo ("<hr />");


    echo ("class with parameterless constructor");
    //class with parameterless constructor 
    class Teacher{
        public $name;
        public $speciality;
        public function __getName($name){ //returns whatever proproty is passed
            return $this->name;
        }

        public function __set($name, $value){ //sets whatever property is passed to value passed.          
            $this->name = $value;
        }

        public function __construct(){
            echo " object created";
            echo ("<br />");
        }

        public function __destruct(){
            echo ("<br />");
            echo $this->name . " is being destroyed";
            
        }
    }
    $teacher1= new Teacher();
    $teacher1->name = "Tim";
    
    
    echo ("<br />");    
   
    echo $teacher1->name;
    echo ("<br />");
    //echo $teacher1->speciality; // this is not working.
    echo ("<br />");

    ?>
</body>
</html>