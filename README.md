I.set up new project.
composer create-project --prefer-dist yiisoft/yii2-app-advanced yii-application
php init
choose 0 
yes
:) complete !!!
2.Continue Model 
-at file common : config connect to mysql 
create migate : php yii migrate/create create_news_table
php yii2 migrate
3.config url 
sudo a2enmod rewrite
sudo service apache2 restart

sudo gedit /etc/apache2/sites-available/000-default.conf
<Directory "/var/www/html"> AllowOverride All </Directory>
4.create model and CRUD mode
======================================
5.add theme
https://github.com/dmstr/yii2-adminlte-asset
=========================================
6 export file 
https://github.com/kartik-v/yii2-export
add vao common->config->main (ngang hang voi components)
 'modules' => [
        'redactor' => 'yii\redactor\RedactorModule',
        'gridview' => [
            'class' => '\kartik\grid\Module'
        ],
    ]
=========================================
7 redactor
https://github.com/yiidoc/yii2-redactor 

II. clone foodjp
B1 : git clone https://github.com/conghc94/yii2-foodjp.git

B2 : php init
0
yes
All
B3 : composer install

if not yet install composer {
    curl -sS https://getcomposer.org/installer | php
    sudo mv composer.phar /usr/local/bin/composer
    composer -v
}
B4 : composer update

B5 : edit database in common/config/main-local

B6 : cd nameProject : php yii migrate

B7 : if not run you can set read/write url

Yii 2 Advanced Project Template is a skeleton [Yii 2](http://www.yiiframework.com/) application best for
developing complex Web applications with multiple tiers.

The template includes three tiers: front end, back end, and console, each of which
is a separate Yii application.

The template is designed to work in a team development environment. It supports
deploying the application in different environments.

Documentation is at [docs/guide/README.md](docs/guide/README.md).

[![Latest Stable Version](https://poser.pugx.org/yiisoft/yii2-app-advanced/v/stable.png)](https://packagist.org/packages/yiisoft/yii2-app-advanced)
[![Total Downloads](https://poser.pugx.org/yiisoft/yii2-app-advanced/downloads.png)](https://packagist.org/packages/yiisoft/yii2-app-advanced)
[![Build Status](https://travis-ci.org/yiisoft/yii2-app-advanced.svg?branch=master)](https://travis-ci.org/yiisoft/yii2-app-advanced)

DIRECTORY STRUCTURE
-------------------

```
common
    config/              contains shared configurations
    mail/                contains view files for e-mails
    models/              contains model classes used in both backend and frontend
console
    config/              contains console configurations
    controllers/         contains console controllers (commands)
    migrations/          contains database migrations
    models/              contains console-specific model classes
    runtime/             contains files generated during runtime
backend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains backend configurations
    controllers/         contains Web controller classes
    models/              contains backend-specific model classes
    runtime/             contains files generated during runtime
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
frontend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains frontend configurations
    controllers/         contains Web controller classes
    models/              contains frontend-specific model classes
    runtime/             contains files generated during runtime
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
    widgets/             contains frontend widgets
vendor/                  contains dependent 3rd-party packages
environments/            contains environment-based overrides
tests                    contains various tests for the advanced application
    codeception/         contains tests developed with Codeception PHP Testing Framework
```
