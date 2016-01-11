.. _julia:

.. include:: julia_banner.raw

.. sourcecode:: julia

    using QuantEcon
    aiyagari_ddp = DiscreteDP(R, Q, beta)
    results = solve(aiyagari_ddp, PFI)

.. raw:: html

    <ul id="coa">
            <li>
                <a href="https://github.com/QuantEcon/QuantEcon.jl" onclick="ga('send', 'event', 'Click', 'CallToAction', 'GitHub')">
                    <p class="thumb"><img src="_static/img/py-home-octopus.png" alt=" " /></p>
                    <p class="title">GitHub</p>
                </a>
            </li>
            <li>
                <a href="http://quantecon.github.io/QuantEcon.jl/" onclick="ga('send', 'event', 'Click', 'CallToAction', 'Documentation')">
                    <p class="thumb"><img src="_static/img/readthedocs2.png" alt=" " /></p>
                    <p class="title">Documentation</p>
                </a>
            </li>
            <li>
                <a href="julia_developers.html" onclick="ga('send', 'event', 'Click', 'CallToAction', 'Developers')">
                    <p class="thumb"><img src="_static/img/home-help.png" alt=" " /></p>
                    <p class="title">Developers</p>
                </a>
            </li>
            <li>
            <a href="https://github.com/QuantEcon/QuantEcon.jl/issues" onclick="ga('send', 'event', 'Click', 'CallToAction', 'Report an Issue')" target="_blank">
                <p class="thumb"><img src="_static/img/issue.png" alt=" " /></p>
                <p class="title">Report an Issue</p>
            </a>
        </li>
    </ul>

Installation
------------

To install the Julia QuantEcon package `QuantEcon.jl <https://github.com/QuantEcon/QuantEcon.jl/>`__ start a Julia session and type

.. sourcecode:: julia

	Pkg.add("QuantEcon")

This installs the ``QuantEcon`` package through the Julia package manager (via git) to the default Julia library location ``~/.julia/v0.XX/QuantEcon``.

Usage
-----

Once installed the ``QuantEcon`` package can be used in Julia via the ``using`` keyword such as

.. sourcecode:: julia
	
	using QuantEcon

More detailed instructions on setting up a ``Julia`` environment can be found on `this page <http://quant-econ.net/jl/getting_started.html>`__.

Useful Links
------------

- `Code library on GitHub <https://github.com/QuantEcon/QuantEcon.jl>`__
- `Documentation <http://quantecon.github.io/QuantEcon.jl/>`__
- `Report an Issue <https://github.com/QuantEcon/QuantEcon.jl/issues>`__

QuantEcon.jl is supported financially by the `Alfred P. Sloan Foundation <http://www.sloan.org/>`__ and is part of the `QuantEcon organization <http://quantecon.org/>`__.