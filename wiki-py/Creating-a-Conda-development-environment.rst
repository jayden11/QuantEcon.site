.. _conda_dev_env:

****************************************
Creating a Conda development environment
****************************************

One of the advantages of the Anaconda Python environment is that it is cheap to set up (and discard) Python environments for development versions of packages and populate them with your favorite scientific tools. For example, if you're working on <code>QuantEcon</code> you might find it useful to set up an environment (containing NumPy, SciPy, etc.) that uses your development version rather than the default one. This facilitates contributing to <code>QuantEcon</code> without worrying about corrupting the Python environment on which your other work depends.

Googling will locate plenty of tutorials on setting up Conda environments but here's a quick start. It assumes that you've already installed Anaconda

.. TODO: How to Convert this in SPhinx

<h3 id="step-1">Step 1:</h3>

<p><a href="https://help.github.com/articles/fork-a-repo">Fork and clone</a> a copy of the <code>quant-econ</code> repository on to your local machine.</p>

<h3 id="step-2">Step 2:</h3>

<p>Create a <code>conda</code> environment called <code>quantecon-dev</code> (say) by opening a terminal and typing</p>

<pre class="line-numbers"><code class="language-python">$ conda create -n quantecon-dev anaconda</code></pre>

<h3 id="step-3">Step 3:</h3>

<p>Activate the <code>quantecon-dev</code> environment:</p>

<pre class="line-numbers"><code class="language-python">$ source activate quantecon-dev</code></pre>

<h3 id="step-4">Step 4:</h3>

<p>Change into your local copy of the <code>quantecon</code> repo. For example, on a UNIX-like system, type</p>

<pre class="line-numbers"><code class="language-python">$ cd /PATH/TO/LOCAL/CLONE/</code></pre>

<h3 id="step-5">Step 5:</h3>

<p>Install your local version of quantecon. If you're at the top of the repo directory tree (where the file setup.py exists) they type</p>

<pre class="line-numbers"><code class="language-python">$ python setup.py install</code></pre>

<p> The above command installs quantecon into the local site-packages folder on your machine. If you make changes you will need to rerun the command
	for changes to be installed into site-packages.
</p>

<p> 
	Instead you may wish to install a developer copy which allows for changes to take effect immediately.
	Rather than copying files to site-packages this command will make symbolic links instead.
</p>

<pre class="line-numbers"><code class="language-python">$ python setup.py develop</code></pre>

<h2 id="other-useful-commands">Other useful commands</h2>

<p>To switch into the <code>quantecon-dev</code> Conda environment:</p>

<pre class="line-numbers"><code class="language-python">$ source activate quantecon-dev</code></pre>

<p>To shift back to your default Python environment type</p>

<pre class="line-numbers"><code class="language-python">$ source deactivate</code></pre>

<p>To delete the environ type</p>

<pre class="line-numbers"><code class="language-python">$ conda remove -n quantecon-dev --all</code></pre>

<p>To list all environments try</p>

<pre class="line-numbers"><code class="language-python">$ conda info -e</code></pre>
