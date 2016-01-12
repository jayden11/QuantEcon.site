<?php
	set_include_path($_SERVER['DOCUMENT_ROOT'] . '/includes');
	$page_title = 'Notebooks';
	include ('header.php');
?>

		
<h1>Notebooks</h1>

<ul id="notebooks">
	<li>
		<p class="title"><a href="http://nbviewer.ipython.org/github/QuantEcon/QuantEcon.site/blob/master/_static/notebooks/d_evans_parallel_computing.ipynb">Parallel Computing - David Evans</a></p>
		<div class="description">
			<p>This notebook provides an introduction to parallel computing by discussing two basic types of parallel computing environments; Shared Memory Multiple Processors (SMMP) and Distributed Memory Multiple Processors (DMMP). This notebook focuses on demonstrating the <code>mpi4py</code> python library and the <code>IPython</code> parallel computing environment.</p>
		</div>
		<p class="thumbnail"><a href="http://nbviewer.ipython.org/github/QuantEcon/QuantEcon.site/blob/master/_static/notebooks/d_evans_parallel_computing.ipynb"><img src="/_static/notebooks/d_evans_parallel_computing.png"></a></p>
    </li>
	<li>    	
    	<p class="title"><a href="http://nbviewer.ipython.org/github/QuantEcon/QuantEcon.site/blob/master/_static/notebooks/sci_python_quickstart.ipynb">Scientific Python Quickstart - John Stachurski</a></p>
		<div class="description">
			<p>This notebook contains an introduction to working with Python for scientific applications focusing on economics. It introduces the four most popular scientific libraries and gives example on statistics, plotting, optimization, linear algebra and so on.</p>
		</div>
		<p class="thumbnail"><a href="http://nbviewer.ipython.org/github/QuantEcon/QuantEcon.site/blob/master/_static/notebooks/sci_python_quickstart.ipynb"><img src="/_static/notebooks/numpy_scipy_examples.png"></a></p>
    </li>
	<li>   	
        <p class="title"><a href="http://nbviewer.ipython.org/github/QuantEcon/QuantEcon.site/blob/master/_static/notebooks/lucas_asset_pricing_model.ipynb">Approximation Methods for the Lucas Asset Pricing Model - Joao Brogueira and Fabian Schuetze</a></p>
		<div class="description">
            <p>This notebook modifies the code from the <a href="http://quant-econ.net/py/lucas_model.html">quant-econ lecture</a> on the Lucas asset pricing model to implement a more advanced and accurate approximation procedure.</p>
		</div>
		<p class="thumbnail"><a href="http://nbviewer.ipython.org/github/QuantEcon/QuantEcon.site/blob/master/_static/notebooks/lucas_asset_pricing_model.ipynb"><img src="/_static/notebooks/lucas_asset_pricing_model.png"></a></p>
    </li>
	<li>		
		<p class="title"><a href="http://nbviewer.ipython.org/github/QuantEcon/QuantEcon.site/blob/master/_static/notebooks/quadrature.ipynb">Quadrature - Chase Coleman and Spencer Lyon</a></p>
		<div class="description">
			<p>Demonstrates the quadrature routines contained in QuantEcon. The examples are derived from the <code>CompEcon</code> toolbox written by Mario Miranda and Paul Fackler.</p>
		</div>
		<p class="thumbnail"><a href="http://nbviewer.ipython.org/github/QuantEcon/QuantEcon.site/blob/master/_static/notebooks/quadrature.ipynb"><img src="/_static/notebooks/quadrature.png"></a></p>
    </li>
	<li>
		<p class="title"><a href="http://nbviewer.ipython.org/github/QuantEcon/QuantEcon.site/blob/master/_static/notebooks/solving_initial_value_problems.ipynb">Solving Initial Value Problems - David R. Pugh</a></p>
		<div class="description">
			<p>This notebook demonstrates how to solve initial value problems (IVPs) using the <code>quantecon</code> Python library using the Lotka-Volterra "Predator-Prey" model</p>
		</div>	
		<p class="thumbnail"><a href="http://nbviewer.ipython.org/github/QuantEcon/QuantEcon.site/blob/master/_static/notebooks/solving_initial_value_problems.ipynb"><img src="/_static/notebooks/solving_initial_value_problems.png"></a></p>
    </li>
	<li>		
		<p class="title"><a href="http://nbviewer.ipython.org/github/QuantEcon/QuantEcon.site/blob/master/_static/notebooks/chase_nelder_mead.ipynb">Nelder-Mead - Chase Coleman</a></p>
		<div class="description">
			<p>This notebook provides an introduction to the Nelder-Mead Algorithm. This algorithm is used in many programming languages (matlab, scipy, etc.) for tackling minimization problems. Understanding Nelder-Mead provides valuable intuition for when it is (and more importantly when it isn't) an appropriate minimization technique</p>
		</div>
		<p class="thumbnail"><a href="http://nbviewer.ipython.org/github/QuantEcon/QuantEcon.site/blob/master/_static/notebooks/chase_nelder_mead.ipynb"><img src="/_static/notebooks/chase_nelder_mead.png"></a></p>
    </li>
    <li>	
		<p class="title"><a href="http://nbviewer.ipython.org/github/QuantEcon/QuantEcon.site/blob/master/_static/notebooks/solow_model.ipynb">Solow Model - David R. Pugh</a></p>
		<div class="description">
			<p>This notebook demonstrates the functionality of the <code>quantecon.models.solow</code> module. One of the objectives of this notebook is to demonstrate the use of numerical methods in economics by using the Solow model of economic growth</p>
		</div>
		<p class="thumbnail"><a href="http://nbviewer.ipython.org/github/QuantEcon/QuantEcon.site/blob/master/_static/notebooks/solow_model.ipynb"><img src="/_static/notebooks/solow_model.png"></a></p>
    </li>
</ul>


<?php
	include ('footer.php');
?>
