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
					<li><a href="/developers/creating-conda-development-environment/">Creating a Conda development environment</a></li>
					<li><a href="/developers/docstrings-documentation/">Docstrings and Documentation</a></li>
					<li><a href="/developers/unit-testing-in-quantecon/">Unit Testing in QuantEcon</a></li>
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
