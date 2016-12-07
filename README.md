#About this module

![build status](https://travis-ci.org/colinappnovation/d8learning.svg?branch=master)

##Introduction

This module is a result of learning during the week of 6th Dec 2016

##Features

- Default configuration for block
- Custom block
- Custom content type

##Notes

- https://www.drupal.org/docs/8/api/entity-api/creating-a-custom-content-type-in-drupal-8
- https://www.drupal.org/docs/8/api/configuration-api/configuration-schemametadata

##PHPUnit

Functional and Unit, these need to be placed in tests/src/Functional or tests/src/Unit/.

Need to copy the phpunit.xml.dist to phpunit.xml which can be found in the core folder.

Commandline execution:-
    ./vendor/bin/phpunit -c web/core/ --group hello_world