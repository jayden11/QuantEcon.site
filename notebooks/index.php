<?php
	set_include_path($_SERVER['DOCUMENT_ROOT'] . '/includes');
	$page_title = 'Notebooks';
	include ('header.php');
?>

		
<h1>Notebooks</h1>

<ul id="notebooks">
	<li>
		<a href="http://nbviewer.ipython.org/github/QuantEcon/QuantEcon.site/blob/master/_static/notebooks/chase_nelder_mead.ipynb" target="_blank">
			<p class="title">Nelder-Mead - Chase Coleman</p>
			<div class="description">
				<p>This is an introduction to the Nelder-Mead Algorithm. This algorithm is used in many programming languages (matlab, scipy, etc.) for tackling minimization problems. Understanding Nelder-Mead provides valuable intuition for when it is (and more importantly when it isn't) an appropriate minimization technique</p>
			</div>
			<p class="thumbnail"><img src="/_static/notebooks/chase_nelder_mead.png"></p>
		</a>
    </li>
	<li>
		<a href="http://nbviewer.ipython.org/github/QuantEcon/QuantEcon.site/blob/master/_static/notebooks/d_evans_parallel_computing.ipynb" target="_blank">
			<p class="title">Parallel Computing - David Evans</p>
			<div class="description">
				<p>This provides an introduction to parallel computing by discusing two basic types of parallel computing environments; Shared Memory Multiple Processors (SMMP) and Distributed Memory Multiple Processors (DMMP). This notebook focuses on the <code>mpi4py</code> python library and the <code>IPython</code> parallel computing environment</p>
			</div>
			<p class="thumbnail"><img src="/_static/notebooks/d_evans_parallel_computing.png"></p>
		</a>
    </li>
	<li>
    	<a href="http://nbviewer.ipython.org/github/QuantEcon/QuantEcon.site/blob/master/_static/notebooks/numpy_scipy_examples.ipynb" target="_blank">
	    	<p class="title">Numpy Scipy Examples - John Stachurski</p>
			<div class="description">
				<p>This contains an introduction to using Numpy and Scipy. In Numpy this includes creating arrays, indexing behaviour, and methods and operations that can be applied to arrays. For SciPy this runs through an example on statistics, finding roots and fixed points, and a brief numerical optimization example</p>
			</div>
			<p class="thumbnail"><img src="/_static/notebooks/numpy_scipy_examples.png"></p>
		</a>
    </li>
	<li>
    	<a href="http://nbviewer.ipython.org/github/QuantEcon/QuantEcon.site/blob/master/_static/notebooks/oyama_digraph_demo01.ipynb" target="_blank">
	    	<p class="title">Digraph Demo - Daisuke Oyama</p>
			<div class="description">
				<p>A demonstration of the digraph features found in QuantEcon</p>
			</div>
			<p class="thumbnail"><img src="/_static/notebooks/oyama_digraph_demo01.png"></p>
		</a>
    </li>
	<li>
		<a href="http://nbviewer.ipython.org/github/QuantEcon/QuantEcon.site/blob/master/_static/notebooks/oyama_markovchain_demo01.ipynb" target="_blank">
        	<p class="title">Markov Chain Demo - Daisuke Oyama</p>
			<div class="description">
				<p>A demonstration of Markov chains covering simulation, classification of states, stationarity, and periodicity for reducible Markov chains </p>
			</div>
			<p class="thumbnail"><img src="/_static/notebooks/oyama_markovchain_demo01.png"></p>
		</a>
    </li>
	<li>
		<a href="http://nbviewer.ipython.org/github/QuantEcon/QuantEcon.site/blob/master/_static/notebooks/quadrature.ipynb" target="_blank">
			<p class="title">Quadrature - Chase Coleman and Spencer Lyon</p>
			<div class="description">
				<p>Demonstrates the quadrature routines contained in QuantEcon. The examples are derived from the <code>CompEcon</code> toolbox written by Mario Miranda and Paul Fackler</p>
			</div>
			<p class="thumbnail"><img src="/_static/notebooks/quadrature.png"></p>
		</a>
    </li>
	<li>
		<a href="http://nbviewer.ipython.org/github/QuantEcon/QuantEcon.site/blob/master/_static/notebooks/solving_initial_value_problems.ipynb" target="_blank">
			<p class="title">Solving Initial Value Problems - David R. Pugh</p>
			<div class="description">
				<p>This notebook demonstrates how to solve initial value problems (IVPs) using the <code>quantecon</code> Python library using the Lotka-Volterra "Predator-Prey" model</p>
			</div>	
			<p class="thumbnail"><img src="/_static/notebooks/solving_initial_value_problems.png"></p>
		</a>
    </li>
</ul>


<?php
	include ('footer.php');
?>