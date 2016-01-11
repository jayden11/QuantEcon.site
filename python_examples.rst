.. _python_examples: 

**************************
Additional Python Examples
**************************

Example #1
==========

Creating a discrete approximation to an AR(1) process
-----------------------------------------------------

The following code imports the ``quantecon`` library and creates a discrete approximation to an AR(1) process

.. sourcecode:: python

	from quantecon import approx_markov
	states, matrix = approx_markov(0.9, 0.1, n=4)
	print(matrix)
	print(states)

In the below figure we are running this code interactively in an ipython notebook (See `here <http://quant-econ.net/py/getting_started.html#jupyter>`__ for more details on setting up `Jupyter <http://jupyter.org/>`__) and printing the results

.. figure:: /_static/images/test_qe.png
