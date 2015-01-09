<?php
	set_include_path($_SERVER['DOCUMENT_ROOT'] . '/includes');
	$page_title = 'Notebooks';
	include ('header.php');
?>

		
<h1>Notebooks</h1>

<ul id="notebooks">
	<li>
		<a href="http://nbviewer.ipython.org/github/QuantEcon/QuantEcon.site/blob/master/_static/notebooks/d_evans_parallel_computing.ipynb">
			<p class="title">Parallel Computing - David Evans</p>
			<div class="description">
				<p>This notebook provides an introduction to parallel computing by discussing two basic types of parallel computing environments; Shared Memory Multiple Processors (SMMP) and Distributed Memory Multiple Processors (DMMP). This notebook focuses on demonstrating the <code>mpi4py</code> python library and the <code>IPython</code> parallel computing environment.</p>
			</div>
			<p class="thumbnail"><img src="/_static/notebooks/d_evans_parallel_computing.png"></p>
		</a>
    </li>
	<li>
    	<a href="http://nbviewer.ipython.org/github/QuantEcon/QuantEcon.site/blob/master/_static/notebooks/sci_python_quickstart.ipynb">
	    	<p class="title">Scientific Python Quickstart - John Stachurski</p>
			<div class="description">
				<p>This notebook contains an introduction to working with Python for scientific applications focusing on economics. It introduces the four most popular scientific libraries and gives example on statistics, plotting, optimization, linear algebra and so on.</p>
			</div>
			<p class="thumbnail"><img src="/_static/notebooks/numpy_scipy_examples.png"></p>
		</a>
    </li>
	<li>
		<a href="http://nbviewer.ipython.org/github/QuantEcon/QuantEcon.site/blob/master/_static/notebooks/quadrature.ipynb">
			<p class="title">Quadrature - Chase Coleman and Spencer Lyon</p>
			<div class="description">
				<p>Demonstrates the quadrature routines contained in QuantEcon. The examples are derived from the <code>CompEcon</code> toolbox written by Mario Miranda and Paul Fackler</p>
			</div>
			<p class="thumbnail"><img src="/_static/notebooks/quadrature.png"></p>
		</a>
    </li>
	<li>
		<a href="http://nbviewer.ipython.org/github/QuantEcon/QuantEcon.site/blob/master/_static/notebooks/solving_initial_value_problems.ipynb">
			<p class="title">Solving Initial Value Problems - David R. Pugh</p>
			<div class="description">
				<p>This notebook demonstrates how to solve initial value problems (IVPs) using the <code>quantecon</code> Python library using the Lotka-Volterra "Predator-Prey" model</p>
			</div>	
			<p class="thumbnail"><img src="/_static/notebooks/solving_initial_value_problems.png"></p>
		</a>
    </li>
	<li>
		<a href="http://nbviewer.ipython.org/github/QuantEcon/QuantEcon.site/blob/master/_static/notebooks/chase_nelder_mead.ipynb">
			<p class="title">Nelder-Mead - Chase Coleman</p>
			<div class="description">
				<p>This notebook provides an introduction to the Nelder-Mead Algorithm. This algorithm is used in many programming languages (matlab, scipy, etc.) for tackling minimization problems. Understanding Nelder-Mead provides valuable intuition for when it is (and more importantly when it isn't) an appropriate minimization technique</p>
			</div>
			<p class="thumbnail"><img src="/_static/notebooks/chase_nelder_mead.png"></p>
		</a>
    </li>
</ul>


<?php
	include ('footer.php');
?>
