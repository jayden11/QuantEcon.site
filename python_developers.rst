.. _python_developers: 

.. include:: python_banner.raw

*****************
Python Developers
*****************

The current structure of the ``QuantEcon`` package is relatively flat where python ``modules`` contain most of the code. The majority of methods are available at the top level ``namespace`` for easy access. The python API is defined by the ``__init__.py`` files within the ``quantecon`` package. There is currently one subpackage ``models`` which contains a number of ``classes`` for working with various economic models

Setting up a Conda Development Environment
==========================================

One of the advantages of the `Anaconda Python environment <https://www.continuum.io/downloads>`_ is that it is cheap to set up (and discard) Python environments for development versions of packages and populate them with your favorite scientific tools. For example, if you're working on ``QuantEcon`` you might find it useful to set up an environment (containing NumPy, SciPy, etc.) that uses your development version rather than the default ones. This facilitates contributing to ``QuantEcon`` without worrying about corrupting the Python environment on which your other work depends.

Full instructions can be found `here <wiki_py_conda_dev_env.html>`__

Writing Documentation
=====================

Within the QuantEcon library we wish to maintain a simple and consistent format for inline documentation, known in the Python world as *docstrings*. The format we use is known as `numpydoc <https://github.com/numpy/numpy/blob/master/doc/HOWTO_DOCUMENT.rst.txt>`__. It was developed by the ``numpy`` and ``scipy`` teams and is used in many popular packages. Adhering to this standard helps us
			

* Provide a sense of consistency throughout the library
* Give users instant access to necessary information at the interpreter prompt (either via the built-in python function ``help(object_name)`` or the ipython ``object_name?``)
* Allow us to easily and automatically generate a reference manual using sphinx's ``autodoc`` and ``apidoc`` functionality.

 
For full details and examples, this standard is discussed in more detail `on this page <wiki_py_docstrings.html>`__

Writing Tests
=============

One prerequisite for contributions to QuantEcon is that all functions and methods should be paired with tests verifying that they are functioning correctly. This type of `unit testing <https://en.wikipedia.org/wiki/Unit_testing>`__ is almost universal across high quality software projects.
`This guide <wiki_py_unitesting.html>`_ is intended to help you get started writing tests for code to be included in QuantEcon.


Considering the API
===================

As ``QuantEcon`` evolves the current structure will naturally move towards more sub-packages in the future. Every effort should be made to maintain the current API, however if you are submitting a Pull Request (PR) that results in a necessary change to the current API this needs to be explicitly highlighted and discussed as part of the PR discussion through Github
