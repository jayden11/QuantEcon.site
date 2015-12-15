<?php
	set_include_path($_SERVER['DOCUMENT_ROOT'] . '/includes');
	$page_title = 'Site Map';
	include ('header.php');
?>

		
<h1>Site Map</h1>


<ul>
	<li><a href="/">Home</a>
		<ul>
			<li><a href="/users/">Use QE</a></li>
			<li><a href="/developers/">Developers</a>
				<ul>
					<li><a href="/wiki/py/Creating-a-Conda-development-environment.php">Creating a Conda development environment</a></li>
					<li><a href="/wiki/py/Docstrings-and-Documentation.php">Docstrings and Documentation</a></li>
					<li><a href="/wiki/py/Unit-Testing-in-QuantEcon.php">Unit Testing in QuantEcon</a></li>
				</ul>
			</li>
			<li><a href="/about/">About</a></li>
			<li><a href="/notebooks/">Notebooks</a></li>
		</ul>
	</li>
</ul>


<?php
	include ('footer.php');
?>
