<?php
	set_include_path($_SERVER['DOCUMENT_ROOT'] . '/includes');
	$page_title = 'Wiki';
	$body_class = 'wiki';
	include ('header.php');
?>

		
<h1>Wiki</h1>

<p>This wiki contains information for developers writing code for QuantEcon.</p>

<p>All contributions to QuantEcon should follow the conventions described here on docstrings, coding style, testing, etc.</p>

<div class="tab-panel">

	<div class="tab-nav clearfix">

		<p class="visuallyhidden">Choose language:</p>
	
		<ul>
			<li class="active"><a href="#python-tab" id="python-toggle">Python</a></li>
			<li><a href="#julia-tab" id="julia-toggle">Julia</a></li>
		</ul>
		
	</div>
	
	<div class="tab-content">
	
		<div class="tab">
		
			<h2 class="visuallyhidden" id="python-tab">Python</h2>
			
			<h3>Pages</h3>
			
			<ul>
				<li><a href="/wiki/py/Creating-a-Conda-development-environment.php">Creating a Conda development environment</a></li>
				<li><a href="/wiki/py/Docstrings-and-Documentation.php">Docstrings and Documentation</a></li>
				<li><a href="/wiki/py/Unit-Testing-in-QuantEcon.php">Unit Testing in QuantEcon</a></li>
			</ul>
			
		</div>

		<div class="tab">
		
			<h2 class="visuallyhidden" id="julia-tab">Julia</h2>

			<h3>Pages</h3>

			<ul>
				<li>None yet</li>
			</ul>

				        						
		</div>
	
	</div>


<?php
	include ('footer.php');
?>
