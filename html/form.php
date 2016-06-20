<?php
    $PAGE_NAME = '&lt;form&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<?php

$formSubmitted = $_POST['submit'];

if(isset($formSubmitted)) {
?>

<main class="HTMLSection">
	<p>Your favorite color is <kbd><?php echo htmlspecialchars($_POST['FavColor']); ?></kbd>!</p>
	<p>Your favorite flower is <kbd><?php echo htmlspecialchars($_POST['FavFlower']); ?></kbd>!</p>
</main>

<?php
}else {
?>

<main class="HTMLSection">
	<p>This element is the basis for creating forms for user input, ranging from simple to complex. I will provide a simple demonstration, however, the full scope of this element, its associated elements, and the attributes thereof is <em>well</em> beyond this project. For further reference, please see the <a href="http://www.w3schools.com/tags/tag_form.asp">W3Schools</a> reference page for &lt;form&gt; and its related tags.</p>
	<h4>Example of use:</h4>
	<figure>
		<code>
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
		</code>
	</figure>
	<h4>Will be rendered as:</h4>
	<figure>
		<form action="form.php" method="POST">
			Favorite color:
			<input type="text" name="FavColor" value="Violet">
			<br>
			Favorite flower:
			<input type="text" name="FavFlower" value="Rose">
			<br>
			<input type="submit" name="submit" value="Submit">
		</form>
	</figure>
</main>	

<?php
    }
?>

<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>