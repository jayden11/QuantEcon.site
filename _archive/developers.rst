.. _developers:

**********		
Developers
**********

QuantEcon is developed by the community for the community.  We welcome
submission of algorithms and high quality code in Python or Julia on all
topics concerning quantitative economics.  Less experienced developers who
wish to get involved can help improve documentation or work on smaller
enhancements.  To get ideas on how to contribute you can read the issue
trackers (`Python <https://github.com/QuantEcon/QuantEcon.py/issues>`__/`Julia <https://github.com/QuantEcon/QuantEcon.jl/issues>`__)
or browse the code on GitHub (`Python <https://github.com/QuantEcon/QuantEcon.py>`__/`Julia <https://github.com/QuantEcon/QuantEcon.jl>`__).


Contributions to QuantEcon should follow the canonical open source pattern,
via forking the code libraries and sending pull requests.  If you're not
familiar with this kind of development there are many useful tutorials lying
around, including

    #. `The GitHub Guides <https://guides.github.com/>`_
    #. `GitHub Help <https://help.github.com/>`_
    #. `Pull request ettiquette <http://readwrite.com/2014/07/02/github-pull-request-etiquette>`_

QuantEcon follows standard best practice coding protocols, such as unit
testing and continuous integration.  Read on for specific information on
development protocols for each language.

.. raw:: html
	
	<div class="tab-panel">
	<div class="tab-nav clearfix">
	<p class="visuallyhidden">Choose language:</p>
	<ul>
		<li class="active"><a href="#python-tab" id="python-toggle">Python instructions</a></li>
		<li><a href="#julia-tab" id="julia-toggle">Julia instructions</a></li>
	</ul>
	</div>
	<div class="tab-content">
	<section class="tab">
	<h2 class="visuallyhidden" id="python-tab">Python</h2>

The current structure of the ``QuantEcon`` package is relatively flat where python ``modules`` contain most of the code. The majority of methods are available at the top level ``namespace`` for easy access. The python API is defined by the ``__init__.py`` files within the ``quantecon`` package. There is currently one subpackage ``models`` which contains a number of ``classes`` for working with various economic models

.. raw:: html

	<h3>Setting up a Conda Development Environment</h3>

One of the advantages of the `Anaconda Python environment <https://www.continuum.io/downloads>`_ is that it is cheap to set up (and discard) Python environments for development versions of packages and populate them with your favorite scientific tools. For example, if you're working on ``QuantEcon`` you might find it useful to set up an environment (containing NumPy, SciPy, etc.) that uses your development version rather than the default ones. This facilitates contributing to ``QuantEcon`` without worrying about corrupting the Python environment on which your other work depends.

Full instructions can be found `here <wiki-py/conda_dev_env.html>`__

.. raw:: html

	<h3>Writing Documentation</h3>

Within the QuantEcon library we wish to maintain a simple and consistent format for inline documentation, known in the Python world as *docstrings*. The format we use is known as `numpydoc <https://github.com/numpy/numpy/blob/master/doc/HOWTO_DOCUMENT.rst.txt>`__. It was developed by the ``numpy`` and ``scipy`` teams and is used in many popular packages. Adhering to this standard helps us
			

* Provide a sense of consistency throughout the library
* Give users instant access to necessary information at the interpreter prompt (either via the built-in python function ``help(object_name)`` or the ipython ``object_name?``)
* Allow us to easily and automatically generate a reference manual using sphinx's ``autodoc`` and ``apidoc`` functionality.

 
For full details and examples, this standard is discussed in more detail `on this page <wiki_py_docstrings.html>`__

.. raw:: html

	<h3>Writing Tests</h3>

One prerequisite for contributions to QuantEcon is that all functions and methods should be paired with tests verifying that they are functioning correctly. This type of `unit testing <https://en.wikipedia.org/wiki/Unit_testing>`__ is almost universal across high quality software projects.
`This guide <wiki-py/unitesting.html>`_ is intended to help you get started writing tests for code to be included in QuantEcon.

.. raw:: html

	<h3>Considering the API</h3>

As ``QuantEcon`` evolves the current structure will naturally move towards more sub-packages in the future. Every effort should be made to maintain the current API, however if you are submitting a Pull Request (PR) that results in a necessary change to the current API this needs to be explicitly highlighted and discussed as part of the PR discussion through Github


.. raw:: html
	
	</section>
	<section class="tab">
	<h2 class="visuallyhidden" id="julia-tab">Julia</h2>

QuantEcon is also supporting a library written for Julia. As a programming language, ``Julia`` is still new and thus some aspects of the language are still evolving as it matures. As a result there may be some changes from time to time in styles and conventions. The upside is that it is fast and quickly being adopted by the broader scientific computing community

The `Julia style guide <http://julia.readthedocs.org/en/latest/manual/style-guide/>`_ is a good starting point for some Julia programming conventions 

.. raw:: html

	<h3>Writing Documentation</h3>

Julia is currently undergoing a decision process for standardization with regards to documentation. `This issue <https://github.com/JuliaLang/julia/pull/8791>`__ is tracking this discussion. Once a decision has been made and formalized a QuantEcon style guide will be updated to assist Julia contributions

.. raw:: html

	<h3>Writing Tests</h3>

One prerequisite for contributions to QuantEcon is that all functions and methods should be paired with tests verifying that they are functioning correctly. This type of `unit testing <https://en.wikipedia.org/wiki/Unit_testing>`__ is almost universal across a quality software projects. A guide to writing tests in ``Julia`` is currently in work


.. raw:: html
	
	</section>
	</div>

