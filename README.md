#About this module

![build status](https://travis-ci.org/colinappnovation/d8learning.svg?branch=master)

##Introduction

This module is a result of learning during the week of 6th Dec 2016 on Drupal 8.

##Features

- Default configuration for block with default_name setting and associated schema definition
- Custom block
- Custom content type thus making use of node.type.*_mytype.yml
- Custom CSS thus making use of *.libraries.yml

##Notes

- https://www.drupal.org/docs/8/api/entity-api/creating-a-custom-content-type-in-drupal-8
- https://www.drupal.org/docs/8/api/configuration-api/configuration-schemametadata
- https://www.drupal.org/node/2241059
- https://www.chapterthree.com/blog/how-to-use-configuration-management

##PHPUnit

Functional and Unit, these need to be placed in *tests/src/Functional* or *tests/src/Unit/*.

Need to copy the **phpunit.xml.dist** to **phpunit.xml** which can be found in the core folder.

Commandline execution:-
```
    ./vendor/bin/phpunit -c web/core/ --group hello_world
```

##Travis

Had to use .travis.yml from drupal-ti project and modify to suite.

Tests PHP versions 
* 5.5
* 5.6
* 7.0

##Configuration Management

Really need to process an export of all settings first to /sync folder via below command.

```
drush cex
```

Then we can import changes from /sync when we make changes to yml file.

```
drush cim
```