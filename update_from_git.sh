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
HOMEDIR=$HOME/websites/ritcraft.net

#####################################################
# Pull down the latest changes from GitHub          #
#####################################################
cd $HOMEDIR && git pull

#####################################################
# Delete all known files in web server directory    #
#####################################################
rsync -rav $HOMEDIR/* $WEBDIR
