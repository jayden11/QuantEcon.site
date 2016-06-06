.. _econometric_society_workshop:

.. include:: org_banner.raw

Econometric Society Workshop on Python and Julia
=====================================================

June 16, 2016

This workshop will provide a quick start introduction to programming in Python
and Julia for economists.  Our target audience is economists with some
experience with programming in Matlab, Stata or similar, who are curious about
Python and Julia, and how they might be useful for research in quantitative
economics. 

Content will be based on the introductory lectures from `quant-econ.net <http://quant-econ.net>`__.  
The workshop will be hands on and participants are asked to bring their laptops.  
Instructions for installing Python and Julia can be found below.

The workshop will run as part of the `North American Summer Meeting of the Econometric Society <http://sites.sas.upenn.edu/nasm-2016/>`__.

Those interested please register for the workshop through the conference
registration system once it opens.
 
Installing Python
=================

To install Python we recommend installing the `Anaconda <https://www.continuum.io/downloads>`__ Python distribution. 
Anaconda will be discussed during the workshop and, in essence, is an easy way to install a full scientific 
software stack along with a great way to manage various Python packages. 

To install Anaconda please visit: https://www.continuum.io/downloads and follow the on-screen instructions.

**We recommend installing Python 3.5**

1. Click on https://www.continuum.io/downloads
2. Choose the **Python 3.5** download that matches the operating system on your computer (Windows / OS X / Linux).
3. Follow the instructions that are provided immediately below the download link on the anaconda download page.

Installing Julia
================

To install Julia we recommend installing Julia from the `Julia downloads <http://julialang.org/downloads/>`__ page. 

1. Click on http://julialang.org/downloads/
2. Choose the download that matches the operating system on your computer (i.e. Windows 64-bit etc.)
3. Once downloaded following the instructions provided on the `Julia platform specific instructions page <http://julialang.org/downloads/platform.html>`__.

Once you have Julia installed you will want to test your Julia installation by:

1. Open a terminal (OS X / Linux) or command line window (Windows)
2. Type **julia** at the prompt

Once you see a Julia prompt you will want to install the IJulia package which will allow you to use Julia in Jupyter Notebooks.

1. Pkg.add("IJulia")
2. using IJulia