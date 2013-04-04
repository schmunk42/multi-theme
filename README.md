multi-theme
===========

EMultiThemeManager
------------------

Yii Framework ThemeManager class, switch themes by regular expressions for routes

### Usage

    'themeManager' => array(
      'class' => 'EMultiThemeManager',
      'rules' => array(
          '^user/(.*)' => 'backend' // switches to 'backend' for all routes beginning with 'user/'
      )
    ),
