<?php

use PHPUnit\Framework\TestCase;

/**
 * Tests functions
 *
 * @author Alejandro Mostajo <http://about.me/amostajo>
 * @copyright 10Quality <http://www.10quality.com>
 * @license MIT
 * @package WPMVC\Addons
 * @version 1.0.3
 */
class FunctionAssetsUrlTest extends TestCase
{
    /**
     * Test that "addon_assets_url" exists.
     * @since 1.0.0
     */
    function testExistance()
    {
        $this->assertTrue(function_exists('addon_assets_url'));
    }
    /**
     * Test a basic call to "addon_assets_url" from a possible theme location.
     * @since 1.0.0
     */
    function testFromTheme()
    {
        // Prepare
        $url = addon_assets_url(
            'img/addon.png',
            'C:\\www\\test\\wp-content\\themes\\my-theme\\vendor\\10quality\\test-addon\\addon\\test.php'
        );
        // Assert
        $this->assertEquals(
            'http://www.test.com/wp-content/themes/my-theme/vendor/10quality/test-addon/assets/img/addon.png',
            $url
        );
    }
    /**
     * Test a basic call to "addon_assets_url" from a possible plugin location.
     * @since 1.0.0
     */
    function testFromPlugin()
    {
        // Prepare
        $url = addon_assets_url(
            'img/addon.png',
            'C:\\www\\test\\wp-content\\plugins\\my-plugin\\vendor\\the-vendor\\test-addon\\addon\\test.php'
        );
        // Assert
        $this->assertEquals(
            'http://www.test.com/wp-content/plugins/my-plugin/vendor/the-vendor/test-addon/assets/img/addon.png',
            $url
        );
    }
    /**
     * Test scheme implementation.
     * @since 1.0.0
     */
    function testScheme()
    {
        // Prepare
        $url = addon_assets_url(
            'img/addon.png',
            'C:\\www\\test\\wp-content\\themes\\my-theme\\vendor\\10quality\\test-addon\\addon\\test.php',
            'https'
        );
        // Assert
        $this->assertEquals(
            'https://www.test.com/wp-content/themes/my-theme/vendor/10quality/test-addon/assets/img/addon.png',
            $url
        );
    }
    /**
     * Test network url.
     * @since 1.0.0
     */
    function testNetwork()
    {
        // Prepare
        $url = addon_assets_url(
            'img/addon.png',
            'C:\\www\\test\\wp-content\\themes\\my-theme\\vendor\\10quality\\test-addon\\addon\\test.php',
            null,
            true
        );
        // Assert
        $this->assertEquals(
            'http://network.test.com/wp-content/themes/my-theme/vendor/10quality/test-addon/assets/img/addon.png',
            $url
        );
    }
}