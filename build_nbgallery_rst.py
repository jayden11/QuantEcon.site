"""

Build Notebook Gallery RST files

Author: Matthew McKay (mamckay@gmail.com)

This script builds the notebook gallery rst files from the YAML notebooks.YAML file
This allows different versions of the gallery to be built sorted by topic and date.
It also adds python and julia icons that require tagged image directives. 

"""

import yaml
import os

#-----------#
#-Templates-#
#-----------#

#TODO: Turn this into a snippet import from snippets/

rst_file = """.. _{doc_name}:

.. include:: org_banner.raw

.. raw:: html

    <p class="octopus"><a href="https://github.com/QuantEcon/QuantEcon.notebooks"><img src="_static/img/octopus.png" alt="GitHub logo"></a></p>

**************************
QuantEcon Notebook Gallery
**************************

**Submissions**: To submit your `notebook <http://jupyter.org/>`_ as a candidate for inclusion, please add it to `nbviewer <http://nbviewer.jupyter.org/>`__ and send us a link via `contact@quantecon.org <contact@quantecon.org>`__. See `Contributing a Jupyter Notebook <nb_contrib.html>`__ for further details.
"""

#-Titles-#
nb_entry = 	"* `{title} <{link}>`__ - {authors}\n"
nb_pre_link_post_entry = "* {pre} `{link_text} <{link}>`__ {post} - {authors}\n"
#-Subsections-#
nb_sub_entry = "\t#. `{title} <{link}>`__\n" 					#No Author Here

#------------#
#-Month Data-#
#------------#

month_to_num = {
    'January'   : 1,
    'February'  : 2,
    'March'     : 3,
    'April'     : 4,
    'May'       : 5,
    'June'      : 6,
    'July'      : 7,
    'August'    : 8,
    'September' : 9,
    'October'   : 10,
    'November'  : 11,
    'December'  : 12,
}
num_to_month = {v:k for k,v in list(month_to_num.items())}

#------------------#
#-Helper Functions-#
#------------------#

def write_file(filename, data):
    f = open(filename, 'w')
    for line in data:
        f.write(line+"\n")
    f.close()

def _to_numeric_dates(datelist):
    """ Convert to Numeric Dates """
    dates = []
    for date in datelist:
        (day,month,year) = date.split('-')
        dates.append((year, month_to_num[month], day))
    return dates

#-----------------------#
#- Build RST Documents -#
#-----------------------#

#-Open YAML File-#
fl = open('notebooks.yaml', 'r')
doc_topic = yaml.load(fl)

#-Document: notebooks_py.rst-#
rst = [rst_file.format(doc_name="notebooks_py")]
#-Parse Topics-#
for topic_num in sorted(doc_topic.keys()):
	topic = doc_topic[topic_num] 
	rst.append(topic['topic']+"\n"+"="*len(topic['topic'])+"\n")	#Write Topic Text
	#-Parse Notebooks-#
	nb_items = sorted([x for x in topic.keys() if type(x) == int]) 	#Get Integer Indexed Items
	for nb_num in nb_items: 										#Write Notebook Text in Each Topic
		nb = topic[nb_num]
		#-Check Title-#
		if type(nb['title']) == dict:
			title = nb['title']
			for item in title.keys():
				if title[item] == None: title[item] = ""
			rst.append(nb_pre_link_post_entry.format(pre=title['pre'], link_text=title['link_text'], link=title['link'], post=title['post'], authors=nb['authors']))
		else:
			rst.append(nb_entry.format(title=nb['title'].strip("\n"), link=nb['python'], authors=nb['authors']))
		#-Write Numerated Subsection-#
		try:
			subsection = nb['subsection']
			for num in sorted(subsection.keys()):
				subsec = subsection[num]
				rst.append(nb_sub_entry.format(title=subsec['title'].strip("\n"), link=subsec['python']))
		except:
			continue 				#No Subsection Defined
write_file("notebooks_py.rst", rst)

