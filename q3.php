<?php

/*
3: 
Let's write a user class with the tools we have  acquired. This class will contain the first and last name of each user and will be able to say hello to anyone who uses our application. Make sure that:
1) The attributes are private.
2) Create a public interface to set and get our attributes
3) Say hello!
4) Use a constructor to set up the initial state of your object.
*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Mid-Term Q3</title>
</head>
<body>

<?php
$route = $_SERVER['PHP_SELF'];
?>

		<form action="<?php echo htmlspecialchars($route)?>">
    
			<input type="text" name="first_name" placeholder="Enter first name here" method="post">
      <input type="text" name="last_name" placeholder="Enter last name here" method="post">
			<button>Submit</button>
    </form>
    

	<?php

// class userClass
// {
//   // public $greeting = 'Hello!';
//   private $first_name = 'first_name';
//   private $last_name = 'last_name';

// }

// class userClass {

//     private $first_name = 'first_name';
//     private $last_name = 'last_name';
			 
// 		public function Grettings() {
// 		echo 'Hello ' .($_GET[this.$first_name]) . ' ' . ($_GET[this.$last_name]) . '!';
// 		}
// }

// class userClass {

// 	private $first_name = 'first_name';
// 	private $last_name = 'last_name';
		 
// 	public function Grettings() {
// 	echo 'Hello ' .($_POST[$this->first_name]) . ' ' . ($_POST[$this->last_name]) . '!';
// 	}
// }

class userClass {

	private $first_name = 'first_name';
	private $last_name = 'last_name';
		 
	function __construct($first_name, $last_name) {
	echo 'Hello ' .($this->first_name) . ' ' . ($this->last_name) . '!';
	}
}




	?>
</body>
</html>