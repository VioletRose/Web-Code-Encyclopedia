<?php
    $PAGE_NAME = 'Form Submission';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<?php
$formSubmitted = $_POST['submit'];
if(isset($formSubmitted)) {
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>You were referred to this site via <samp><?php echo htmlspecialchars($_POST['referred']); ?></samp>!</p>
		<p>You think the most historic date is <samp><?php echo htmlspecialchars($_POST['historicdate']); ?></samp>!</p>
		<p>For a date, you chose <samp><?php echo htmlspecialchars($_POST['anydatetime']); ?></samp>!</p>
		<p>Your favorite month is <samp><?php echo htmlspecialchars($_POST['favoritemonth']); ?></samp>!</p>
		<p>The time is <samp><?php echo htmlspecialchars($_POST['whattime']); ?></samp>!</p>
		<p>The one week is <samp><?php echo htmlspecialchars($_POST['oneweek']); ?></samp>!</p>
		<p>You <samp><?php echo htmlspecialchars($_POST['likeflowers']); ?></samp>!</p>
		<p>A color is <samp><?php echo htmlspecialchars($_POST['anycolor']); ?></samp>!</p>
		<p>Your lucky number is <samp><?php echo htmlspecialchars($_POST['luckynumber']); ?></samp>!</p>
		<p>You found the number <samp><?php echo htmlspecialchars($_POST['luckyfind']); ?></samp>!</p>
		<p>Your theoretical password was <samp><?php echo htmlspecialchars($_POST['vrwepassword']); ?></samp>!</p>
		<p>When asked if you would smooch a ghost, your answer was <samp><?php echo htmlspecialchars($_POST['smooch']); ?></samp>!</p>
		<p>You would search for information on <samp><?php echo htmlspecialchars($_POST['codesearch']); ?></samp>!</p>
		<p>You guessed <samp><?php echo htmlspecialchars($_POST['guessnumber']); ?></samp> is my telephone number!</p>
		<p>Your favorite website is <samp><?php echo htmlspecialchars($_POST['favwebsite']); ?></samp>!</p>
		<p>Your closing thoughts were <samp><?php echo htmlspecialchars($_POST['feedback']); ?></samp></p>
	</section>
</main>
<?php
}else {
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>You have not submitted a form to this URL. Maybe you should go to the <a href="/html/form.php"<code>&lt;form&gt;</code></a> page!</p>
	</section>
</main>
<?php
    }
?>
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
