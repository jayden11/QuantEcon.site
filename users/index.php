<?php
	set_include_path($_SERVER['DOCUMENT_ROOT'] . '/includes');
	$page_title = 'Use QE';
	include ('header.php');
?>

		
<h1>Use QE</h1>

<p>This page provides help on downloading, installing and using the QuantEcon
code libraries in each of its two flavors.  For further reading you can find examples of the
code in action in <a href="http://quant-econ.net">these lectures</a> or in our 
<a href="/notebooks/">featured notebooks</a>. </p>

<div class="tab-panel">

	<div class="tab-nav clearfix">

		<p class="visuallyhidden">Choose language:</p>
	
		<ul>
			<li class="active"><a href="#python-tab" id="python-toggle">Python instructions</a></li>
			<li><a href="#julia-tab" id="julia-toggle">Julia instructions</a></li>
		</ul>
		
	</div>
	
	<div class="tab-content">
	
		<div class="tab">
		
			<h2 class="visuallyhidden" id="python-tab">Python</h2>
			
			<h3>Installing the <code>quantecon</code> Python Package</h3>
			
			<p>The core of the QuantEcon Python code library is the Python package <code>quantecon</code>. This is a collection of programs that have been bundled together which can then be easily used in <code>python</code></p>
			<p>The easiest way to get a full suite of scientific python tools installed on your computer is to use the <a href="https://store.continuum.io/cshop/anaconda/" target="_blank">Anaconda</a> distribution released by <a href="http://www.continuum.io/" target="_blank">Continuum Analytics</a>. More detailed instructions on setting up a <code>python</code> environment can be found on <a href="http://quant-econ.net/py/getting_started.html#installing-anaconda" target="_blank">this page</a>.</p>
			<p>Assuming you have <a href="https://pypi.python.org/pypi/pip">pip</a> on your computer (if using Anaconda then this is already installed) you can install the latest stable release of <code>quantecon</code> by typing</p>
			<pre class="line-numbers"><code class="language-python">pip install quantecon</code></pre>
			<p>at a terminal prompt.</p>
            <p>Once <code>quantecon</code> has been installed then it can be imported into a <code>python</code> or <code>ipython</code> session through python's <code>import</code> statement. It is convention to use:</p>
            <pre class="line-numbers"><code class="language-python">import quantecon as qe</code></pre>
            <p>You can check the version by running:</p>
            <pre class="line-numbers"><code class="language-python">print qe.__version__ </code></pre>
            <p> If your version is below what's available on <a href="https://pypi.python.org/pypi/quantecon/">PyPI</a> then it is time to upgrade. This can be done by running:</p>
            <pre class="line-numbers"><code class="language-python">pip install --upgrade quantecon</code></pre>
           

			<h3>Downloading the <code>quantecon</code> Repository</h3>
            
            <p>An alternative is to download the sourcecode of the <code>quantecon</code> package and install it manually from <a href="https://github.com/QuantEcon/QuantEcon.py/">the github repository</a>. This can be achieved by downloading a zip file directly from <a href="https://github.com/QuantEcon/QuantEcon.py/archive/master.zip">here</a> or using <code>git</code> to clone the repository to your computer. If you choose to use <code>git</code> then you should first browse to a location on your computer suitable for downloading the package folder and then run</p>
            <pre class="line-numbers"><code class="language-python">git clone https://github.com/QuantEcon/QuantEcon.py</code></pre>
            <p>This repository contains both the <code>quantecon</code> python package in addition to some examples which can be viewed in the <a href="https://github.com/QuantEcon/QuantEcon.py/">github code repository</a>. Once you have downloaded the source files then the package can be installed by running</p>
            <pre class="line-numbers"><code class="language-python">python setup.py install</code></pre>
            <p>when at the base level of the repository folder.</p> 
            <p>If you would like to learn the basics about setting up Git see <a href="https://help.github.com/articles/set-up-git/" target="_blank">this link</a> is a good starting point.</p>
            

			<h3>Documentation</h3>
			
            <p>Read the latest <a href="http://quanteconpy.readthedocs.org/en/latest/" target="_blank">documentation</a> for the <code>quantecon</code> package.</p>

            <h3>A Brief Example</h3>
            
            <p>The following code imports the <code>quantecon</code> library and creates a discrete approximation to an AR(1) process</p>
			<pre><code class="language-python">
			from quantecon import approx_markov
			states, matrix = approx_markov(0.9, 0.1, n=4)
			print matrix
			print states
			</code></pre>
			<p>In the below figure we are running this code interactively in an ipython notebook (See <a href="http://quant-econ.net/py/getting_started.html#id2" target="_blank">here</a> for more details on setting up <a href="http://ipython.org/" target="_blank">IPython</a>) and printing the results</p>
			<div class="figure">
			<a class="reference internal image-reference" href="images/test_qe.png"><img alt="images/test_qe.png" src="images/test_qe.png" style="width: 465.0px; height: 597.0px;" /></a>
			</div>
			</div>

			
			
		</div>

		<div class="tab">
		
			<h2 class="visuallyhidden" id="julia-tab">Julia</h2>

			<h3>Installing the <code>QuantEcon</code> Julia Package</h3>
						
            <p>To install the Julia QuantEcon package <a href="https://github.com/QuantEcon/QuantEcon.jl/">QuantEcon.jl</a> start a Julia session and type</p>
            <pre class="line-numbers"><code class="language-python">Pkg.add("QuantEcon")</code></pre>
            <p>This installs the <code>QuantEcon</code> package through the Julia package manager (via git) to the default Julia library location <code>~/.julia/QuantEcon</code>.</p>
            <p>Once installed the <code>QuantEcon</code> package can be used in Julia via the <code>using</code> framework such as</p>
            <pre class="line-numbers"><code class="language-python">using QuantEcon</code></pre>
            <p>More detailed instructions on setting up a <code>Julia</code> environment can be found on <a href="http://quant-econ.net/jl/getting_started.html">this page</a>.</p>

			<h3>Documentation</h3>

			<p>The Julia documentation is still a work in progress.  Please <a href="/about/#contact">contact us</a> if you'd like to help set it up.</p>
				        						
		</div>
	
	</div>
	
</div>



<?php
	include ('footer.php');
?>
