
<?php

/*
2: Counting words

Part 2: In the same file, write a form consisting of a single text field and a submit button. The “action” attribute to the form should be the same page that the form is on (don’t hard code, use $_SERVER[‘PHP_SELF’]). The form should send the contents of the text field via GET.

Upon submitting the form, you should be redirected to the same page, but the URL should contain the string from the text field as a GET request normally behaves.

Side note: Prevent security vulnerabilities with $_SERVER[‘PHP_SELF’]. For more information, take a look here: http://www.html-form-guide.com/php-form/php-form-action- self.html

Part 3: Check for the existence of a GET request. If a GET request exists with the name of the input field that you made in Part 2, run the contents of the request through your countWords($str) function. Take the output array of the function, and display an HTML table of words and the number of times they occur. Make the table sorted by decreasing number of occurrences.
*/
 ?>

<?php
$route = $_SERVER['PHP_SELF'];
include 'q2-1.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Part 2 #2</title>
</head>
<body>
		<form action="<?php $route?>">
			<input type="text" name="name" placeholder="enter name here">
			<button>Submit</button>
		</form>

	<?php
		$result = $_GET["name"];
		if ($result) {
			 $returnedArr = countWords($result);
			 echo
			 "<table>
					<tbody>
						<tr>
							<th>Word</th>
							<th>Count</th>
						</tr>";
								foreach($returnedArr as $key => $val) {
									echo "<tr>";
									echo "<td>" . $key . "</td>";
									echo "<td>" . $val . "</td>";
									echo "</tr>";
								};
					"</tbody
			 	</table>";
		}
	?>
</body>
</html>