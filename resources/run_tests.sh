#!/bin/bash
BUILD_NAME=test-drupal-civi513
GIT_REPO=https://github.com/systopia/de.systopia.dummytest
EXTENSION_NAME=de.systopia.dummytest

# build drupal + civicrm
civibuild create $BUILD_NAME --type drupal-demo --civi-ver 5.13.4 --url http://test.localhost:7979 #--force

# download/copy extension
cd /buildkit/build/${BUILD_NAME}/sites/default/files/civicrm/ext/
git clone $GIT_REPO

# install extension
cv en dummytest

# test extension
cd $EXTENSION_NAME
EXT_PATH = pwd
cd tests/phpunit/api/v3/Contact
cv php:boot > bootstrap_civicrm
sed -e '/\/\/BOOTSTRAP_ME/{r bootstrap_php' -e 'd}' LookupContactTest.php -i
rm bootstrap_civicrm
cd $EXT_PATH
# TDOO: check if code is already existant
phpunit4
