.. _users:

******
Use QE
******

This page provides help on downloading, installing and using the QuantEcon
code libraries in each of its two flavors.  For further reading you can find examples of the
code in action in `these lectures <http://quant-econ.net>`__ or in our `featured notebooks <notebooks.html>`__.

.. TODO: Check featured notebooks link

.. raw:: html

	<div class="tab-panel">
	<div class="tab-nav clearfix">
	<p class="visuallyhidden">Choose language:
	<ul>
		<li class="active"><a href="#python-tab" id="python-toggle">Python instructions</a></li>
		<li><a href="#julia-tab" id="julia-toggle">Julia instructions</a></li>
	</ul>
	</div>
	<div class="tab-content">
	<section class="tab">
	<h2 class="visuallyhidden" id="python-tab">Python</h2>
		
	<h3>Installing the <code>quantecon</code> Python Package</h3>
			

The core of the QuantEcon Python code library is the Python package ``quantecon``. This is a collection of programs that have been bundled together which can then be easily used in ``python``

The easiest way to get a full suite of scientific python tools installed on your computer is to use the `Anaconda <https://store.continuum.io/cshop/anaconda/>`__ distribution released by `Continuum Analytics <http://www.continuum.io/>`__. More detailed instructions on setting up a ``python`` environment can be found on `this page <http://quant-econ.net/py/getting_started.html#installing-anaconda>`__.

Assuming you have `pip <https://pypi.python.org/pypi/pip>`__ on your computer (if using Anaconda then this is already installed) you can install the latest stable release of ``quantecon`` by typing ``pip install quantecon`` at a terminal prompt.

Once ``quantecon`` has been installed then it can be imported into a ``python`` or ``ipython`` session through python's ``import`` statement. It is convention to use:

.. sourcecode:: python

	import quantecon as qe

You can check the version by running:

.. sourcecode:: python
	
	print qe.__version__

If your version is below what's available on `PyPI <https://pypi.python.org/pypi/quantecon/>`__ then it is time to upgrade. This can be done by running:

.. sourcecode:: python

	pip install --upgrade quantecon
           
.. raw:: html

	<h3>Downloading the <code>quantecon</code> Repository</h3>
            
An alternative is to download the sourcecode of the ``quantecon`` package and install it manually from `the github repository <https://github.com/QuantEcon/QuantEcon.py/>`__. This can be achieved by downloading a zip file directly from `here <https://github.com/QuantEcon/QuantEcon.py/archive/master.zip>`__ or using ``git`` to clone the repository to your computer. If you choose to use ``git`` then you should first browse to a location on your computer suitable for downloading the package folder and then run
            
.. sourcecode:: bash
	
	git clone https://github.com/QuantEcon/QuantEcon.py
            
This repository contains both the ``quantecon`` python package in addition to some examples which can be viewed in the `github code repository <https://github.com/QuantEcon/QuantEcon.py/>`__. Once you have downloaded the source files then the package can be installed by running
            
.. sourcecode:: bash

	python setup.py install
            
when at the base level of the repository folder. 

If you would like to learn the basics about setting up Git see `this link <https://help.github.com/articles/set-up-git/>`__ is a good starting point.
            
.. raw:: html

	<h3>Documentation</h3>
			
Read the latest `documentation <http://quanteconpy.readthedocs.org/en/latest/>`__ for the ``quantecon`` package.

.. raw::html

	<h3>A Brief Example</h3>

The following code imports the ``quantecon`` library and creates a discrete approximation to an AR(1) process

.. sourcecode:: python

	from quantecon import approx_markov
	states, matrix = approx_markov(0.9, 0.1, n=4)
	print(matrix)
	print(states)

In the below figure we are running this code interactively in an ipython notebook (See `here <http://quant-econ.net/py/getting_started.html#id2>`__ for more details on setting up `IPython <http://ipython.org/>`__) and printing the results

.. figure:: /_static/images/test_qe.png

.. raw:: html
	
	<h3>Featured Notebooks</h3>

There is also a collection of `featured notebooks <notebooks.html>`__ available.

These notebooks are a collection of tutorials that demonstrate the ``quantecon`` library, in addition to ``python`` more generally and its application to quantitative economics

.. raw:: html 

	</section>
	<section class="tab">
	<h2 class="visuallyhidden" id="julia-tab">Julia</h2>
	
	<h3>Installing the <code>QuantEcon</code> Julia Package</h3>
						
To install the Julia QuantEcon package `QuantEcon.jl <https://github.com/QuantEcon/QuantEcon.jl/>`__ start a Julia session and type

.. sourcecode:: python

	Pkg.add("QuantEcon")

This installs the ``QuantEcon`` package through the Julia package manager (via git) to the default Julia library location ``~/.julia/QuantEcon``.

Once installed the ``QuantEcon`` package can be used in Julia via the ``using`` framework such as

.. sourcecode:: python
	
	using QuantEcon

More detailed instructions on setting up a ``Julia`` environment can be found on `this page <http://quant-econ.net/jl/getting_started.html>`__.

.. raw:: html

	<h3>Documentation</h3>

The Julia documentation is still a work in progress.  Please `contact us <about.html#contact>`__ if you'd like to help set it up.


.. raw:: html
				        						
	</section>
	</div>

