multi-theme
===========

Features
--------

Yii Framework Theme-Manager class, switch themes by regular expressions on controller routes.


Download
--------

[Get it from github](https://github.com/schmunk42/multi-theme/tags) and place it into your application.

*or*

Via composer: `composer.phar require schmunk42/multi-theme`


Usage
-----

### Configuration Example

    'themeManager' => array(
        'class' => 'vendor.schmunk42.multi-theme.EMultiThemeManager',
        'rules' => array(
            '^p3(.*)'                   => 'backend',  // use backend theme for all routes starting with p3
            '^user/default/index'       => 'frontend', // use frontend theme for several routes of the user module
            '^user/login/(.*)'          => 'frontend',
            '^user/profile/(.*)'        => 'frontend',
            '^user/registration/(.*)'   => 'frontend',
            '^user/recovery/(.*)'       => 'frontend',
            '^user/activation/(.*)'     => 'frontend',
            '^user/(.*)'                => 'backend',  // use backend theme for user module
            '^rights/(.*)'              => 'backend',  // use backend theme for rights module
        )
    ),

> Note: The first matching rule wins.


Resources
---------

* Fork on [github](https://github.com/schmunk42/multi-theme)
* View at [Yii Extensions](http://www.yiiframework.com/extension/multi-theme/)
* [Phundament](http://phundament.com) Composer Package
