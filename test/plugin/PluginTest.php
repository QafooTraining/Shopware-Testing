<?php
class PluginTest extends Shopware\Components\Test\Plugin\TestCase
{
    protected static $ensureLoadedPlugins = array(
        'LastArticles' => array(
            'show'    => 1,
        )
    );
 
    public function testCanCreateInstance()
    {
        /** @var Shopware_Plugins_Frontend_AdvancedMenu_Bootstrap $plugin */
        $plugin = Shopware()->Plugins()->Frontend()->LastArticles();
 
        $this->assertInstanceOf('Shopware_Plugins_Frontend_LastArticles_Bootstrap', $plugin);
    }
}
