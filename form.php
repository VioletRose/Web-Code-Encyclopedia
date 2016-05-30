<?php
    $PAGE_NAME = '&lt;form&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/generichead.php');
?>
<?php

$formSubmitted = $_POST['submit'];

if(isset($formSubmitted)) {
?>

<div class="mainText">
	<p>
		Your favorite color is 
		<strong>
			<?php echo htmlspecialchars($_POST['FavColor']); ?>
		</strong>
		!
	</p>
	<p>
		Your favorite flower is 
		<strong>
			<?php echo htmlspecialchars($_POST['FavFlower']); ?>
		</strong>
		!
	</p>
</div>

<?php
}else {
?>

<div class="mainText">
	<p>
		This element is the basis for creating forms for user input, ranging from simple to complex. I will provide a simple demonstration, however, the full scope of this element, its associated elements, and the attributes thereof is 
		<em>
			well
		</em>
		beyond this project. For further reference, please see the 
		<a href="http://www.w3schools.com/tags/tag_form.asp">
			W3Schools
		</a>
		 reference page for &lt;form&gt; and its related tags.
	</p>
	<p>
		Example:
		<br>
		&lt;form action="form.php" method="POST"&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;Favorite color:
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;input type="text" name="FavColor" value="Violet"&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;br&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;Favorite flower:
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;input type="text" name="FavFlower" value="Rose"&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;br&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;input type="submit" name="submit" value="Submit"&gt;
		<br>
		&lt;/form&gt;
	</p>
	<p>
		Will be rendered as:
		<br>
		<form action="form.php" method="POST">
			Favorite color:
			<input type="text" name="FavColor" value="Violet">
			<br>
			Favorite flower:
			<input type="text" name="FavFlower" value="Rose">
			<br>
			<input type="submit" name="submit" value="Submit">
		</form>
	</p>
</div>	

<?php
    }
?>

<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>