<?php
/**
 * Class file.
 * @author    Tobias Munk <schmunk@usrbin.de>
 * @link      http://www.phundament.com/
 * @copyright Copyright &copy; 2005-2013 diemeisterei GmbH
 * @license   http://www.phundament.com/license/
 */

/**
 * Yii Framework ThemeManager class, switch themes by regular expressions for routes
 *
 * Usage:
 *
 *      'themeManager' => array(
 *          'class' => 'EMultiThemeManager',
 *          'rules' => array(
 *              '^user/(.*)' => 'backend' // switches to 'backend' for all routes beginning with 'user/'
 *          )
 *       ),
 *
 * Note: The first matching rule wins.
 *
 * @author Tobias Munk <schmunk@usrbin.de>
 */

class EMultiThemeManager extends CThemeManager
{
    public $rules = array();

    public function getTheme($name)
    {
        $controller = Yii::app()->controller;

        if ($controller !== null) foreach ($this->rules as $rule => $themeName) {
            if (preg_match("|" . $rule . "|", $controller->route)) {
                Yii::trace('components.multi-theme.EMultiThemeManager', 'Rule "'.$rule.'" matched, switching to theme "'.$themeName.'"');
                $name = $themeName;
                break;
            }
        }

        return parent::getTheme($name);
    }
}
