.. _wiki_py_conda_dev_env:

.. include:: python_banner.raw

****************************************
Creating a Conda development environment
****************************************

One of the advantages of the Anaconda Python environment is that it is cheap to set up (and discard) Python environments for development versions of packages and populate them with your favorite scientific tools. For example, if you're working on ``QuantEcon`` you might find it useful to set up an environment (containing NumPy, SciPy, etc.) that uses your development version rather than the default one. This facilitates contributing to ``QuantEcon`` without worrying about corrupting the Python environment on which your other work depends.

Googling will locate plenty of tutorials on setting up Conda environments but here's a quick start. It assumes that you've already installed Anaconda


Step 1:
=======

`Fork and clone <https://help.github.com/articles/fork-a-repo>`__ a copy of the ``quant-econ`` repository on to your local machine.

Step 2:
=======

Create a ``conda`` environment called ``quantecon-dev`` (say) by opening a terminal and typing

.. sourcecode:: bash
	:linenos:

	$ conda create -n quantecon-dev anaconda

Step 3:
=======

Activate the ``quantecon-dev`` environment:

.. sourcecode:: bash
	:linenos:
	
	$ source activate quantecon-dev

Step 4:
=======

Change into your local copy of the ``quantecon`` repo. For example, on a UNIX-like system, type

.. sourcecode:: bash
	:linenos:

	$ cd /PATH/TO/LOCAL/CLONE/

Step 5:
=======

Install your local version of quantecon. If you're at the top of the repo directory tree (where the file setup.py exists) they type

.. sourcecode:: bash
	:linenos:

	$ python setup.py install

The above command installs quantecon into the local site-packages folder on your machine. If you make changes you will need to rerun the command for changes to be installed into site-packages.

Instead you may wish to install a developer copy which allows for changes to take effect immediately.
Rather than copying files to site-packages this command will make symbolic links instead.


.. sourcecode:: bash
	:linenos:
	
	$ python setup.py develop

Other useful commands
======================

To switch into the ``quantecon-dev`` Conda environment:

.. sourcecode:: bash
	:linenos:
	
	$ source activate quantecon-dev

To shift back to your default Python environment type

.. sourcecode:: bash
	:linenos:

	$ source deactivate

To delete the environment type

.. sourcecode:: bash
	:linenos:

	$ conda remove -n quantecon-dev --all

To list all environments try

.. sourcecode:: bash
	:linenos:

	$ conda info -e
