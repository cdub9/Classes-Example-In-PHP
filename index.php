<!DOCTYPE html>
<html>
	<head>
	  <title>Demonstration Of Classes</title>
      <link type='text/css' rel='stylesheet' href='style.css'/>
	</head>
	<body>
      <p>
        <?php
            class Person {
                public $isAlive = true;
                public $firstname;
                public $lastname;
                public $age;
                public $hobby;
                
                public function __construct($firstname, $lastname, $age, $hobby) {
                    $this->firstname = $firstname;
                    $this->lastname = $lastname;
                    $this->age = $age;
                    $this->hobby = $hobby;
                }
            }
            
            $boss = new Person("Mike", "H.", "young", "programming and WordPress");
            
            echo "My boss, $boss->firstname $boss->lastname, loves $boss->hobby!";
        ?>
      </p>
    </body>
</html>