#!/usr/bin/python

import os

localdir = "./"
remotedir = "~/public_html/beta.quantecon.org/www/"
server = "chickenlegs.org"
user = "chickenl"
exclude = "--exclude '.git'"

flag = raw_input("Run as test or run for real? (r/t): ")

assert flag == 'r' or flag == 't', "Unrecognized option."

if flag == 't':
    options = "-avzun -e ssh --delete"
else:
    options = "-avzu -e ssh --delete"

command_list = (options, exclude, localdir, user, server, remotedir)
print "Executing rsync %s %s %s %s@%s:%s" % command_list
os.system("rsync %s %s %s %s@%s:%s" % command_list)

