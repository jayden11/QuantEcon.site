## Creating a Conda development environment

One of the advantages of the Anaconda Python environment is that it is cheap to set up (and discard) Python environments for development versions of packages and populate them with your favorite scientific tools.  For example, if you're working on `QuantEcon` you might find it useful to set up an environment (containing NumPy, SciPy, etc.) that uses your development version rather than the default one.  This facilitates contributing to `QuantEcon` without worrying about corrupting the Python environment on which your other work depends.

Googling will locate plenty of tutorials on setting up Conda environments but here's a quick start.  It assumes that you've already installed Anaconda

#### Step 1:
[Fork and clone](https://help.github.com/articles/fork-a-repo) a copy of the `quant-econ` repository on to your local machine.

#### Step 2:
Create a `conda` environment called `quantecon-dev` (say) by opening a terminal and typing

    $ conda create -n quantecon-dev anaconda

#### Step 3:
Activate the `quantecon-dev` environment:

    $ source activate quantecon-dev

#### Step 4:
Change into your local copy of the `quantecon` repo.  For example, on a UNIX-like system, type

    $ cd /PATH/TO/LOCAL/CLONE/

#### Step 5:
Install your local version of quantecon.  If you're at the top of the repo directory tree (where the file setup.py exists) they type

    $ python setup.py install


## Other useful commands

To switch into the `quantecon-dev` Conda environment:

    $ source activate quantecon-dev

To shift back to your default Python environment type

    $ source deactivate

To delete the environ type

    $ conda remove -n quantecon-dev --all

To list all environments try

    $ conda info -e

