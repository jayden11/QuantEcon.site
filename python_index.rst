.. _python:

.. include:: python_banner.raw

.. sourcecode:: python

    from quantecon.markov import DiscreteDP
    aiyagari_ddp = DiscreteDP(R, Q, beta)
    results = aiyagari_ddp.solve(method='policy_iteration')

.. raw:: html

    <ul id="coa">
            <li>
                <a href="https://github.com/QuantEcon/QuantEcon.py" onclick="ga('send', 'event', 'Click', 'CallToAction', 'GitHub')">
                    <p class="thumb"><img src="_static/img/py-home-octopus.png" alt=" " /></p>
                    <p class="title">Code</p>
                </a>
            </li>
            <li>
                <a href="http://quanteconpy.readthedocs.org/en/latest/" onclick="ga('send', 'event', 'Click', 'CallToAction', 'Documentation')">
                    <p class="thumb"><img src="_static/img/readthedocs.png" alt=" " /></p>
                    <p class="title">Documentation</p>
                </a>
            </li>
            <li>
                <a href="python_developers.html" onclick="ga('send', 'event', 'Click', 'CallToAction', 'Developers')">
                    <p class="thumb"><img src="_static/img/home-help.png" alt=" " /></p>
                    <p class="title">Contribute</p>
                </a>
            </li>
            <li>
            <a href="https://github.com/QuantEcon/QuantEcon.py/issues" onclick="ga('send', 'event', 'Click', 'CallToAction', 'Report an Issue')" target="_blank">
                <p class="thumb"><img src="_static/img/issue.png" alt=" " /></p>
                <p class="title">Report an Issue</p>
            </a>
        </li>
    </ul>


Installation
------------

Before installing quantecon we recommend you install the `Anaconda
<https://www.continuum.io/downloads>`__ Python distribution, which includes a
full suite of scientific python tools.

Next you can install quantecon by opening a terminal prompt and typing

.. sourcecode:: python

    pip install quantecon


Usage
-----

Once ``quantecon`` has been installed you should be able to import it as follows:

.. sourcecode:: python

    import quantecon as qe

You can check the version by running

.. sourcecode:: python
    
    print(qe.__version__)

If your version is below what's available on `PyPI <https://pypi.python.org/pypi/quantecon/>`__ then it is time to upgrade. This can be done by running

.. sourcecode:: bash

    pip install --upgrade quantecon


Downloading the ``quantecon`` Repository
-----------------------------------------
            
An alternative is to download the sourcecode of the ``quantecon`` package and install it manually from `the github repository <https://github.com/QuantEcon/QuantEcon.py/>`__.  For example, if you have git installed type

.. sourcecode:: bash
    
    git clone https://github.com/QuantEcon/QuantEcon.py
            
Once you have downloaded the source files then the package can be installed by running
            
.. sourcecode:: bash

    python setup.py install
            
(To learn the basics about setting up Git see `this link <https://help.github.com/articles/set-up-git/>`__.)


Examples and Sample Code
---------------------------

Many examples of QuantEcon.py in action can be found at `Quantitative Economics <http://quant-econ.net>`_.  See also the

- `Documentation <http://quanteconpy.readthedocs.org/en/latest/>`__
- `Notebook gallery <notebooks.html>`__
- `Additional Examples <python_examples.html>`__

QuantEcon.py is supported financially by the `Alfred P. Sloan Foundation <http://www.sloan.org/>`__ and is part of the `QuantEcon organization <http://quantecon.org/>`__.
