.. _econometric_society_workshop:

.. include:: org_banner.raw

Econometric Society Workshop on Python and Julia
=====================================================

* Date and time: June 16, 2016, 9am--12 noon

* Location: G06, Jon M. Huntsman Hall, 3730 Walnut St, Philadelphia

This workshop will provide a quick start introduction to programming in Python
and Julia for economists.  Our target audience is economists with some
experience with programming in Matlab, Stata or similar, who are curious about
Python and Julia, and how they might be useful for research in quantitative
economics.  The workshop will run as part of the `North American Summer Meeting of the Econometric Society <http://sites.sas.upenn.edu/nasm-2016/>`__.

Content will be based on the introductory lectures from `quant-econ.net <http://quant-econ.net>`__.  
The workshop will be hands on and participants are asked to bring their laptops.  

Please register for the workshop through the conference registration system.

 


Instructions for Attendees
============================

Although it's not essential, we request that attendees at
least attempt to install the necessary software prior to the workshop.
Instructions are below.  Troubleshooting and installation help will be
available on the day.


Installing Python
------------------

To install Python we recommend installing the **Python 3.5** version of the `Anaconda <https://www.continuum.io/downloads>`__ Python distribution. 
Anaconda will be discussed during the workshop and, in essence, is an easy way to install a full scientific 
software stack and a good way to manage various Python packages. 

To install Anaconda,

1. Go to https://www.continuum.io/downloads.
2. Choose the **Python 3.5** download that matches your operating system (Windows / OSX / Linux).
3. Follow the instructions below the download link.
4. If the installer asks you to add **anaconda** to your **path**, please ensure that the checkbox is ticked. 




Installing Julia
-----------------

We recommend installing Julia from the `Julia downloads <http://julialang.org/downloads/>`__ page. 

1. Click on http://julialang.org/downloads/
2. Choose the download that matches your operating system.
3. Follow the instructions provided on the `Julia platform specific instructions page <http://julialang.org/downloads/platform.html>`__.

To test your Julia installation,

1. Open a terminal (OS X / Linux) or command line window (called cmd on Windows)
2. Type *julia* at the prompt

We will make use of the IJulia package, which will allow you to use Julia in Jupyter Notebooks.
To install it, type the following at the Julia prompt.

1. Pkg.add("IJulia")
2. using IJulia
