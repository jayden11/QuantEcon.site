<?php
	set_include_path($_SERVER['DOCUMENT_ROOT'] . '/includes');
	include ('header.php');
?>

		
<h1>Welcome</h1>

<p>QuantEcon is an organization run by economists for economists with the aim
of coordinating distributed development of high quality open source code for
all forms of quantitative economic
modeling.  QuantEcon is supported financially by the <a href="http://www.sloan.org/">Alfred P. Sloan Foundation</a>. </p>

<p>The main resources provided by QuantEcon are 
high performance code libraries written in <a href="http://www.python.org">Python</a> and <a href="www.julialang.org">Julia</a>.</p>

<ul id="coa">
	<li>
		<a href="/users/">
			<p class="thumb"><img src="/img/home-use.png" alt=" " /></p>
			<p class="title">Get started</p>
		</a>
	</li>
	<li>
		<a href="/about/">
			<p class="thumb"><img src="/img/home-about.png" alt=" " /></p>
			<p class="title">Learn more</p>
		</a>
	</li>
	<li>
		<a href="/developers/">
			<p class="thumb"><img src="/img/home-help.png" alt=" " /></p>
			<p class="title">Join the team</p>
		</a>
	</li>
</ul>

<p>Discuss QuantEcon at <a href="http://reddit.com/r/quantecon">reddit.com/r/quantecon</a></p>
	


<?php
	include ('footer.php');
?>
