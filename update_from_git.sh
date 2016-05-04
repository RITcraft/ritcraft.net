#!/bin/bash
#
# Author: Justin W. Flory
# Language: Shell
# Filename: update_from_git.sh
#
# Description:
#    Automatically pulls latest changes from repository
#    for RITcraft-Site from GitHub, deletes old site
#    data, and copies latest site changes to the virtual
#    host. The idea is to make updating the site as
#    painless and simple as possible
#

WEBDIR=/var/www/ritcraft.net/public_html

#####################################################
# Pull down the latest changes from GitHub          #
#####################################################
cd $HOME/RITcraft-Site && git pull

#####################################################
# Delete all known files in web server directory    #
#####################################################
cd $WEBDIR && rm -r calendar/ css/ fonts/ images/ js/ reports/ favicon.ico index.php sitemap.xml.gz status.class.php template.html

#####################################################
# Copy the files from the git repo into virtualhost #
#####################################################
cd $HOME/RITcraft-Site
cp -r calendar/ css/ fonts/ images/ js/ reports/ favicon.ico index.php sitemap.xml.gz status.class.php template.html $WEBDIR
