.. _pythonv2:


***********************
Welcome to QuantEcon.py
***********************

QuantEcon.py is a high performance, open source Python code library for economics and related fields.

.. sourcecode:: python

    from quantecon import DiscreteDP
    aiyagari_ddp = DiscreteDP(R, Q, beta)
    results = aiyagari_ddp.solve(method='policy_iteration')

.. raw:: html

    <ul id="coa">
            <li>
                <a href="https://github.com/QuantEcon/QuantEcon.py" onclick="ga('send', 'event', 'Click', 'CallToAction', 'GitHub')">
                    <p class="thumb"><img src="_static/img/py-home-octopus.png" alt=" " /></p>
                    <p class="title">GitHub</p>
                </a>
            </li>
            <li>
                <a href="http://quanteconpy.readthedocs.org/en/latest/" onclick="ga('send', 'event', 'Click', 'CallToAction', 'Documentation')">
                    <p class="thumb"><img src="_static/img/readthedocs2.png" alt=" " /></p>
                    <p class="title">Documentation</p>
                </a>
            </li>
            <li>
                <a href="developers.html" onclick="ga('send', 'event', 'Click', 'CallToAction', 'Developers')">
                    <p class="thumb"><img src="_static/img/home-help.png" alt=" " /></p>
                    <p class="title">Developers</p>
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

To install quantecon, open a terminal prompt and type:

.. sourcecode:: python

    pip install quantecon

If you don't have Python installed, the easiest way to get a full suite of scientific python tools installed on your computer is to use the `Anaconda <https://www.continuum.io/downloads>`__ distribution released by `Continuum Analytics <https://www.continuum.io/>`__. More detailed instructions on setting up a ``python`` environment can be found on `this page <http://quant-econ.net/py/getting_started.html#installing-anaconda>`__.


Usage
-----

Once ``quantecon`` has been installed then it can be imported into a ``python`` or ``ipython`` session through python's ``import`` statement. It is convention to use:

.. sourcecode:: python

    import quantecon as qe

You can check the version by running:

.. sourcecode:: python
    
    print qe.__version__

If your version is below what's available on `PyPI <https://pypi.python.org/pypi/quantecon/>`__ then it is time to upgrade. This can be done by running:

.. sourcecode:: python

    pip install --upgrade quantecon


Useful Links
------------

- `Code library on GitHub <https://github.com/QuantEcon/QuantEcon.py>`__
- `Documentation <http://quanteconpy.readthedocs.org/en/latest/>`__
- `Report an Issue <https://github.com/QuantEcon/QuantEcon.py/issues>`__

QuantEcon.py is supported financially by the `Alfred P. Sloan Foundation <http://www.sloan.org/>`__ and is part of the `QuantEcon organization <http://quantecon.org/>`__.