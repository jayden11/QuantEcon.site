<?php
	set_include_path($_SERVER['DOCUMENT_ROOT'] . '/includes');
	include ('header.php');
?>

		
<h1 class="visuallyhidden">QuantEcon</h1>

<br>

<p>QuantEcon is an organization run by economists for economists with the aim of coordinating distributed development of high quality open source code for all forms of quantitative economic modeling. QuantEcon is supported financially by the <a href="http://www.sloan.org/">Alfred P. Sloan Foundation</a>. </p>

<p>The main resources provided by QuantEcon are 
high performance code libraries written in <a href="http://www.python.org">Python</a> and <a href="http://www.julialang.org">Julia</a>.</p>

<ul id="coa">
	<li>
		<a href="/about/" onclick="ga('send', 'event', 'Click', 'CallToAction', 'About')">
			<p class="thumb"><img src="/assets/img/home-about.png" alt=" " /></p>
			<p class="title">About</p>
		</a>
	</li>
	<li>
		<a href="/users/" onclick="ga('send', 'event', 'Click', 'CallToAction', 'Get started')">
			<p class="thumb"><img src="/assets/img/home-use.png" alt=" " /></p>
			<p class="title">Get started</p>
		</a>
	</li>
	<li>
		<a href="/developers/" onclick="ga('send', 'event', 'Click', 'CallToAction', 'Contribute')">
			<p class="thumb"><img src="/assets/img/home-help.png" alt=" " /></p>
			<p class="title">Contribute</p>
		</a>
	</li>
	<li>
		<a href="https://groups.google.com/forum/#!forum/quantecon" onclick="ga('send', 'event', 'Click', 'CallToAction', 'Have your say')">
			<p class="thumb"><img src="/assets/img/home-say.png" alt=" " /></p>
			<p class="title">Have your say</p>
		</a>
	</li>
</ul>

	


<?php
	include ('footer.php');
?>
