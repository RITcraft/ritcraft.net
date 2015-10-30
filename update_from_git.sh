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

APACHEDIR=/var/www/rit.j-f.co/public_html

#####################################################
# Pull down the latest changes from GitHub          #
#####################################################
cd $HOME/RITcraft-Site && git pull

#####################################################
# Delete all files in Apache virtualhost            #
#####################################################
cd $APACHEDIR && rm -r *

#####################################################
# Copy the files from the git repo into virtualhost #
#####################################################
cd $HOME/RITcraft-Site
cp -r calendar/ css/ fonts/ images/ js/ reports/ index.php sitemap.xml.gz status.class.php template.html $APACHEDIR
