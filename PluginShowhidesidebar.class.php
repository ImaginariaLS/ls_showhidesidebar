<?php

/* -------------------------------------------------------
 *
 *   LiveStreet (v1.x)
 *   Plugin Show hide sidebar (v.0.2)
 *   Copyright © 2013 Bishovec Nikolay
 *
 * --------------------------------------------------------
 *
 *   Plugin Page: http://netlanc.net
 *   Contact e-mail: netlanc@yandex.ru
 *
 ---------------------------------------------------------
 */

if (!class_exists('Plugin')) {
    die('Hacking attemp!');
}

class PluginShowhidesidebar extends Plugin
{
    public $aDelegates = array(
        'template' => array(
            'toolbar_showhidesidebar.tpl' => '_toolbar_showhidesidebar.tpl',
        ),
    );

    public function Activate()
    {
        return true;
    }

    public function Init()
    {
        $this->Viewer_AppendStyle(Plugin::GetTemplateWebPath('showhidesidebar') . 'css/style.css');

        //@todo: требуется тестирование вживую
        // $this->Viewer_AppendScript(Plugin::GetTemplatePath(__CLASS__) . 'js/jquery-ui.custom.v1.12.1.js');
    }

}

