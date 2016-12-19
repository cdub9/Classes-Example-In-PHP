<!DOCTYPE html>
<html>
	<head>
	  <title>Example of a Class in PHP</title>
	</head>
	<body>
      <p>
        <?php
            class Person {
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
