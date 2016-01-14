"""

Build Notebook Gallery RST files

Author: Matthew McKay (mamckay@gmail.com)

This script builds the notebook gallery rst files from the YAML notebooks.YAML file
This allows different versions of the gallery to be built sorted by topic and date.
It also adds python and julia icons that require tagged image directives. 

Notes 
-----
1. Compute a simpler form that repeats different language notebooks (if dual language notebooks are implemented)

"""

import yaml
import os
import re

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
pre_link_post_title = "{pre} `{link_text} <{link}>`__ {post}"

#-Notebook Entries-#
nb_entry = 	"* `{title} <{link}>`__ - {authors} {badge}\n"
nb_title_entry = "* {title} - {authors} {badge}\n"

#-Subsections-#
nb_sub_entry = "* `{title} <{link}>`__ - {authors}\n" 						#No Language Badge
nb_sub_title_entry = "* {title} - {authors}\n"								#No Language Badge
nb_sub_listitem = "\t#. `{title} <{link}>`__ {badge}\n" 					#No Author Here

#-Badges-#
pylang_badge = """.. |python-{id}| image:: _static/images/python-icon.png
	:scale: 60 %
	:target: {link}
"""
pylang_inline = "|python-{id}|"
jllang_badge = """.. |julia-{id}| image:: _static/images/julia-icon.png
	:scale: 60 %
	:target: {link}
"""
jllang_inline = "|julia-{id}|"

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

def _parse_title(nb):
	""" 
	Parse title to check if it needs to be constructed from pre and post text 
	"""
	if type(nb['title']) == dict:
		title = nb['title']
		for item in title.keys():
			if title[item] == None: title[item] = ""
		nb['title'] = pre_link_post_title.format(pre=title['pre'], link_text=title['link_text'], link=title['link'], post=title['post'], authors=nb['authors'])
		nb['title-constructed'] = True
	else:
		nb['title-constructed'] = False

def _build_subsection(subsection, py_id, jl_id):
	"""
	Build a numerated sub-section list for grouped notebooks
	"""
	entries = []
	badges = []
	#-Parse Subsection Entries-#
	for num in sorted(subsection.keys()):
		entry = subsection[num]
		if "python" in entry.keys():
			badge = pylang_badge.format(id=py_id, link=entry["python"])
			badges.append(badge)
			entries.append(nb_sub_listitem.format(title=entry['title'].strip("\n"), link=entry['python'], badge=pylang_inline.format(id=py_id)))
			py_id += 1
		if "julia" in entry.keys():
			badge = jllang_badge.format(id=jl_id, link=entry["julia"])
			badges.append(badge)
			entries.append(nb_sub_listitem.format(title=entry['title'].strip("\n"), link=entry['julia'], badge=jllang_inline.format(id=jl_id)))
			jl_id += 1
	return entries, badges, py_id, jl_id
	
#-----------------------#
#- Build RST Documents -#
#-----------------------#

#-Open YAML File-#
fl = open('notebooks.yaml', 'r')
doc_topic = yaml.load(fl)

#-Document: notebooks.rst organised by Topic-#
rst = [rst_file.format(doc_name="notebooks")]
py_id, jl_id = 0, 0 												#Label ID
#-Parse Topics-#
for topic_num in sorted(doc_topic.keys()):
	topic = doc_topic[topic_num] 
	rst.append(topic['topic']+"\n"+"="*len(topic['topic'])+"\n")	#Write Topic Text
	#-Parse Notebooks-#
	nb_items = sorted([x for x in topic.keys() if type(x) == int]) 	#Get Integer Indexed Items
	for nb_num in nb_items: 										#Write Notebook Text in Each Topic
		nb = topic[nb_num]
		_parse_title(nb) 											#Parse Title
		#-Check for Python Notebook-#
		try:
			if re.search(r"http://", nb['python']):
				rst.append(pylang_badge.format(id=py_id, link=nb["python"]))
				if nb['title-constructed']:
					rst.append(nb_title_entry.format(title=nb['title'].strip("\n"), authors=nb['authors'], badge=pylang_inline.format(id=py_id)))
				else:
					rst.append(nb_entry.format(title=nb['title'].strip("\n"), link=nb['python'], authors=nb['authors'], badge=pylang_inline.format(id=py_id)))			
				py_id += 1			
		except:
			pass 							#No Python notebook defined in the YAML
		#-Check for Julia Notebook-#
		try:
			if re.search(r"http://", nb['julia']):
				rst.append(jllang_badge.format(id=jl_id, link=nb["julia"]))
				if nb['title-constructed']:
					rst.append(nb_title_entry.format(title=nb['title'].strip("\n"), authors=nb['authors'], badge=jllang_inline.format(id=jl_id)))
				else:
					rst.append(nb_entry.format(title=nb['title'].strip("\n"), link=nb['julia'], authors=nb['authors'], badge=jllang_inline.format(id=jl_id)))			
				jl_id += 1
		except:
			pass 							#No Python notebook defined in the YAML
		#-Check for Subsection of Notebooks-#
		if "subsection" in nb.keys():
			#-Main Section Title-#
			if nb['title-constructed']:
				rst.append(nb_sub_title_entry.format(title=nb['title'], authors=nb['authors']))
			else:
				rst.append(nb_sub_entry.format(title=nb['title'], link=nb['python'], authors=nb['authors']))
			#-Construct Numerated List-#
			subsection = nb['subsection']
			entries, badges, py_id, jl_id = _build_subsection(nb['subsection'], py_id, jl_id)
			rst = rst + entries + badges
#-Write File-#
write_file("notebooks.rst", rst)


#---FUTURE WORK---#

#----------------------------------------------------------#
#---Dual Language Support Code (with Default Languages)----#
#----------------------------------------------------------#

#Comments: This code implements a dual language page with a specified default language such as python
#In an effort to reduce complexity we have adopted a simpler approach above with each line representing a single notebook

# #-Titles-#
# nb_entry = 	"* `{title} <{link}>`__ - {authors} [{pybadge} | {jlbadge}]\n"
# nb_entry_py = "* `{title} <{link}>`__ - {authors} [{pybadge}]\n"
# nb_entry_jl = "* `{title} <{link}>`__ - {authors} [{jlbadge}]\n"
# nb_pre_link_post_entry = "* {pre} `{link_text} <{link}>`__ {post} - {authors}\n"
# #-Subsections-#
# nb_sub_entry = "\t#. `{title} <{link}>`__ [{pybadge} | {jlbadge}]\n" 					#No Author Here
# nb_sub_entry_py = "\t#. `{title} <{link}>`__ [{pybadge}]\n" 
# nb_sub_entry_jl = "\t#. `{title} <{link}>`__ [{jlbadge}]\n" 
# #-Badges-#
# py_lang_badge = """.. |python-{id}| image:: _static/images/python-icon.png
# 	:scale: 60 %
# 	:target: {link}
# """
# pylang_inline = "|python-{id}|"
# jl_lang_badge = """.. |julia-{id}| image:: _static/images/julia-icon.png
# 	:scale: 60 %
# 	:target: {link}
# """
# jllang_inline = "|julia-{id}|"

## This Code was written for dual language support of entries to produce a page that is default language is python but makes julia notebooks accessible

# #-Document: notebooks_py.rst-#
# rst = [rst_file.format(doc_name="notebooks_py")]
# py_id, jl_id = 0, 0
# #-Parse Topics-#
# for topic_num in sorted(doc_topic.keys()):
# 	topic = doc_topic[topic_num] 
# 	rst.append(topic['topic']+"\n"+"="*len(topic['topic'])+"\n")	#Write Topic Text
# 	#-Parse Notebooks-#
# 	nb_items = sorted([x for x in topic.keys() if type(x) == int]) 	#Get Integer Indexed Items
# 	for nb_num in nb_items: 										#Write Notebook Text in Each Topic
# 		nb = topic[nb_num]
# 		#-Check Notebook is Defined-#
# 		try:
# 			if nb['python'] == None: 		#TODO: Make more robust with a regular expression to check for: http://nbviewer.jupyter.org (?)
# 				continue
# 			else:
# 				rst.append(py_lang_badge.format(id=py_id, link=nb["python"]))
# 				py_id += 1 						
# 		except:
# 			pass 							#Ok to except as if not defined in the YAML then likely an item with a subsection
# 		#-Check Julia Badge Requirements-#
# 		jl_notebook = False
# 		try: 
# 			if nb['julia'] != None:
# 				rst.append(jl_lang_badge.format(id=jl_id, link=nb['julia']))
# 				jl_id += 1
# 				jl_notebook = True
# 		except:
# 			pass
# 		#-Check Title Type-#
# 		if type(nb['title']) == dict:
# 			title = nb['title']
# 			for item in title.keys():
# 				if title[item] == None: title[item] = ""
# 			rst.append(nb_pre_link_post_entry.format(pre=title['pre'], link_text=title['link_text'], link=title['link'], post=title['post'], authors=nb['authors']))
# 		else:
# 			if jl_notebook:
# 				rst.append(nb_entry.format(title=nb['title'].strip("\n"), link=nb['python'], authors=nb['authors'], pybadge=pylang_inline.format(id=py_id-1), jlbadge=jllang_inline.format(id=jl_id-1)))
# 			else:
# 				rst.append(nb_entry_py.format(title=nb['title'].strip("\n"), link=nb['python'], authors=nb['authors'], pybadge=pylang_inline.format(id=py_id-1)))
# 		#-Write Numerated Subsection-#
# 		try:
# 			subsection_additions = False
# 			subsection = nb['subsection']
# 			subsec_badges = []
# 			for num in sorted(subsection.keys()):
# 				subsec = subsection[num]
# 				#-Check Notebook is a defined attribute-#
# 				if subsec['python'] == None: 	#TODO: Make more robust with a regular expression to check for: http://nbviewer.jupyter.org (?) 
# 					continue
# 				else:
# 					subsec_badges.append(py_lang_badge.format(id=py_id, link=subsec['python']))
# 					py_id += 1 
# 				#-Check if there is a Julia notebook for this entry-#
# 				jl_notebook = False
# 				if subsec['julia'] != None:
# 					subsec_badges.append(jl_lang_badge.format(id=jl_id, link=subsec['julia']))
# 					jl_id += 1
# 					jl_notebook = True
# 				#-Write Subsection-#
# 				if jl_notebook:
# 					rst.append(nb_sub_entry.format(title=subsec['title'].strip("\n"), link=subsec['python'], pybadge=pylang_inline.format(id=py_id-1), jlbadge=jllang_inline.format(id=jl_id-1)))
# 				else:
# 					rst.append(nb_sub_entry_py.format(title=subsec['title'].strip("\n"), link=subsec['python'], pybadge=pylang_inline.format(id=py_id-1)))
# 				subsection_additions = True
# 			#-Check if any subsections were written-#
# 			if subsection_additions == False: 
# 				rst.pop()  #No valid subsections were added so popping the last entry forming a group
# 			else:
# 				rst = rst + subsec_badges
# 		except:
# 			continue 				#No Subsection Defined
# write_file("notebooks_py.rst", rst)


# #-Document: notebooks_jl.rst-#
# rst = [rst_file.format(doc_name="notebooks_jl")]
# #-Parse Topics-#
# for topic_num in sorted(doc_topic.keys()):
# 	topic = doc_topic[topic_num] 
# 	rst.append(topic['topic']+"\n"+"="*len(topic['topic'])+"\n")	#Write Topic Text
# 	#-Parse Notebooks-#
# 	nb_items = sorted([x for x in topic.keys() if type(x) == int]) 	#Get Integer Indexed Items
# 	for nb_num in nb_items: 										#Write Notebook Text in Each Topic
# 		nb = topic[nb_num]
# 		#-Check Notebook is Defined-#
# 		try:
# 			if nb['julia'] == None: continue 						#TODO: Make more robust with a regular expression to check for: http://nbviewer.jupyter.org (?)
# 		except:
# 			pass 			#Ok to except as if not defined in the YAML then likely an item with a subsection
# 		#-Check Title-#
# 		if type(nb['title']) == dict:
# 			title = nb['title']
# 			for item in title.keys():
# 				if title[item] == None: title[item] = ""
# 			rst.append(nb_pre_link_post_entry.format(pre=title['pre'], link_text=title['link_text'], link=title['link'], post=title['post'], authors=nb['authors']))
# 		else:
# 			rst.append(nb_entry.format(title=nb['title'].strip("\n"), link=nb['julia'], authors=nb['authors']))
# 		#-Write Numerated Subsection-#
# 		try:
# 			subsection_additions = False
# 			subsection = nb['subsection']
# 			for num in sorted(subsection.keys()):
# 				subsec = subsection[num]
# 				#-Check Notebook is a defined attribute-#
# 				if subsec['julia'] == None: 	#TODO: Make more robust with a regular expression to check for: http://nbviewer.jupyter.org (?) 
# 					continue 		
# 				rst.append(nb_sub_entry.format(title=subsec['title'].strip("\n"), link=subsec['julia']))
# 				subsection_additions = True
# 			if subsection_additions == False: rst.pop() #No valid subsections were added so popping the last entry forming a group
# 		except:
# 			continue 				#No Subsection Defined
# write_file("notebooks_jl.rst", rst)