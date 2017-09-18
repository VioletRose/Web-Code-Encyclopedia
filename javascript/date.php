<?php
	$PAGE_NAME = 'Date';
	require_once($_SERVER["DOCUMENT_ROOT"].'/javascript/javascripthead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>The Date object allows date information to be stored in a slightly more complex way than strings and numbers. Rather than just entering the information directly, a new date variable must be created like so: <code>var <var>varName</var> = new Date()</code>, with a number of possible arguments for the method. Note that in all contexts of dates in Javascript, hours are in 24 hour time.</p>
	</section>
	<section>
		<h4>Date Object Methods:</h4>
		<dl>
			<dt><code>()</code></dt>
			<dd>No argument will result in the returned date object having the current date as of the script being run.</dd>
			<dt><code>('<var>stringDate</var>')</code></dt>
			<dd>
				A string form of the desired date may be provided in the argument.
				<details>
					<summary>Accepted formats:</summary>
					<dl>
						<dt><code>"<var>yyyy</var>-<var>mm</var>-<var>dd</var>T<var>hh</var>:<var>mm</var>:<var>ss</var>"</code></dt>
						<dd>Also known as an ISO Date, this is the most universally compatible method of formatting a date string. Other options may work, or may be subject to browser-specific issues. It may be written without the time, without the day, or without the day and month.</dd>
						<dt><code>"<var>mm</var>/<var>dd</var>/<var>yyyy</var></code>"</dt>
						<dd>Also known as a Short Date.</dd>
						<dt><code>"<var>Mon</var>/<var>monthName</var> <var>dd</var> <var>yyyy</var> | <var>dd</var> <var>Mon</var> <var>yyyy</var>"</code></dt>
						<dd>Also known as a Long Date. Month and day can be in either order, and month names may be written fully or abbreviated. Commas and case are ignored.</dd>
						<dt><code>"<var>dayName</var> <var>monthName</var> <var>dd</var> <var>yyyy</var> <var>hh</var>:<var>mm</var>:<var>ss</var> GMT<var>+/-</var><var>zzzz</var> (<var>timeZoneName</var>)"</code></dt>
						<dd>Also known as a Full Date. Errors in the day name and time zone name will be ignored.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>(<var>milliseconds</var>)</code></dt>
			<dd>The date may be provided in the format of a number of milliseconds from "zero time", which equates to 1970/01/01 00:00:00 UTC. Each day contains 84,400,000 milliseconds.</dd>
			<dt><code>(<var>yy</var>,<var>monthDate</var>,<var>dayDate</var>,<var>hour</var>,<var>minute</var>,<var>second</var>,<var>millisecond</var>)</code></dt>
			<dd>The date may be provided in the format of a sequence of numbers representing the above parts of the date. Note that everything except days of the month is counted from 0, and that the time may be omitted.</dd>
		</dl>
	</section>
	<section>
		<h4>Date Type Properties:</h4>
		<dl>
			<dt><code>constructor</code></dt>
			<dd>This property stores the code that created the date's prototype.</dd>
			<dt><code>prototype</code></dt>
			<dd>A unique way to add new properties or methods to an object, this is not a standard property, but borrows syntax from them. It can be used to add properties to objects produced by "factories" (functions designed to create new objects with certain specifications); as an example, <code><var>factoryname</var>.prototype.<var>propertyname</var> = <var>propertyvalue</var></code> will append both the new property and its value to every new object produced by <code><var>factoryname</var></code>.</dd>
		</dl>
	</section>
	<section>
		<h4>Date Type Methods:</h4>
		<p>Note that all date methods are zero-indexed <em>except</em> for days of the month.</p>
		<dl>
			<dt><code>getDate()</code></dt>
			<dd>Returns the stored day of the month.</dd>
			<dt><code>getDay()</code></dt>
			<dd>Returns the stored day of the week.</dd>
			<dt><code>getFullYear()</code></dt>
			<dd>Returns the stored year.</dd>
			<dt><code>getHours()</code></dt>
			<dd>Returns the stored hour.</dd>
			<dt><code>getMilliseconds()</code></dt>
			<dd>Returns the stored millisecond.</dd>
			<dt><code>getMinutes()</code></dt>
			<dd>Returns the stored minute.</dd>
			<dt><code>getMonth()</code></dt>
			<dd>Returns the stored month.</dd>
			<dt><code>getSeconds()</code></dt>
			<dd>Returns the stored second.</dd>
			<dt><code>getTime()</code></dt>
			<dd>Returns the number of milliseconds between zero time and the stored date.</dd>
			<dt><code>getTimezoneOffset()</code></dt>
			<dd>Returns the difference in minutes between the stored date and the same date in UTC.</dd>
			<dt><code>getUTCDay()</code></dt>
			<dd>Returns the stored day of the week in UTC.</dd>
			<dt><code>getUTCFullYear()</code></dt>
			<dd>Returns the stored year in UTC.</dd>
			<dt><code>getUTCHours()</code></dt>
			<dd>Returns the stored hour in UTC.</dd>
			<dt><code>getUTCMilliseconds()</code></dt>
			<dd>Returns the stored millisecond in UTC.</dd>
			<dt><code>getUTCMinutes()</code></dt>
			<dd>Returns the stored minute in UTC.</dd>
			<dt><code>getUTCMonth()</code></dt>
			<dd>Returns the stored month in UTC.</dd>
			<dt><code>getUTCSeconds()</code></dt>
			<dd>Returns the stored second in UTC.</dd>
			<dt><code>now()</code></dt>
			<dd>Returns the number of milliseconds between zero time and the current date.</dd>
			<dt><code>parse()</code></dt>
			<dd>Accepts a date string in its argument, and returns the number of milliseconds between zero time and the date string.</dd>
			<dt><code>setDate()</code></dt>
			<dd>Accepts an integer in its argument, and sets the stored day of the month to that integer. Values outside the range of days in the stored month will also adjust the month appropriately.</dd>
			<dt><code>setFullYear()</code></dt>
			<dd>Accepts a full year in its argument, and sets the stored year to that year.</dd>
			<dt><code>setHours()</code></dt>
			<dd>Accepts an hour in its argument, and sets the stored hour to that hour.</dd>
			<dt><code>setMilliseconds()</code></dt>
			<dd>Accepts a millisecond in its argument, and sets the stored millisecond to that millisecond.</dd>
			<dt><code>setMinutes()</code></dt>
			<dd>Accepts a minute in its argument, and sets the stored minute to that minute.</dd>
			<dt><code>setMonth()</code></dt>
			<dd>Accepts a month in its argument, and sets the stored month to that month.</dd>
			<dt><code>setSeconds()</code></dt>
			<dd>Accepts a second in its argument, and sets the stored second to that second.</dd>
			<dt><code>setTime()</code></dt>
			<dd>Accepts a number of milliseconds in its argument, and sets the stored date to that number of milliseconds since zero time.</dd>
			<dt><code>setUTCDate()</code></dt>
			<dd>Accepts an integer in its argument, and sets the stored day of the month to that integer in UTC.</dd>
			<dt><code>setUTCFullYear()</code></dt>
			<dd>Accepts a full year in its argument, and sets the stored year to that year in UTC.</dd>
			<dt><code>setUTCHours()</code></dt>
			<dd>Accepts an hour in its argument, and sets the stored hour to that hour in UTC.</dd>
			<dt><code>setUTCMilliseconds()</code></dt>
			<dd>Accepts a millisecond in its argument, and sets the stored millisecond to that millisecond in UTC.</dd>
			<dt><code>setUTCMinutes()</code></dt>
			<dd>Accepts a minute in its argument, and sets the stored minute to that minute in UTC.</dd>
			<dt><code>setUTCMonth()</code></dt>
			<dd>Accepts a month in its argument, and sets the stored month to that month in UTC.</dd>
			<dt><code>setUTCSeconds()</code></dt>
			<dd>Accepts a second in its argument, and sets the stored second to that second in UTC.</dd>
			<dt><code>toDateString()</code></dt>
			<dd>Returns the stored date as a human-readable string.</dd>
			<dt><code>toISOString()</code></dt>
			<dd>Returns the stored date as a string in the ISO standard.</dd>
			<dt><code>toJSON()</code></dt>
			<dd>Returns the stored date as a string in JSON date format.</dd>
			<dt><code>toLocaleDateString()</code></dt>
			<dd>Returns the stored date (minus time) as a string informed by the browser's locale.</dd>
			<dt><code>toLocaleTimeString()</code></dt>
			<dd>Returns the stored time (minus date) as a string informed by the browser's locale.</dd>
			<dt><code>toLocaleString()</code></dt>
			<dd>Returns the stored date as a string informed by the browser's locale.</dd>
			<dt><code>toString()</code></dt>
			<dd>Returns the stored date information as a string.</dd>
			<dt><code>toTimeString()</code></dt>
			<dd>Returns the stored time (minus date) as a string.</dd>
			<dt><code>toUTCString()</code></dt>
			<dd>Returns the stored date in UTC as a string.</dd>
			<dt><code>UTC()</code></dt>
			<dd>Returns the number of milliseconds between zero time and the stored date in UTC.</dd>
			<dt><code>valueOf()</code></dt>
			<dd>Returns the primitive value of the date object. This results in a series of numbers representing the stored date, which is how the value is actually stored.</dd>
		</dl>
	</section>
</main>	
<?php
	require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
