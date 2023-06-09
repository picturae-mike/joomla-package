<?php
namespace PicturaeJoomla\Installer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

use PicturaeJoomla\Installer\Installer;

class Plugin implements PluginInterface
{
    public function activate(Composer $composer, IOInterface $io)
    {
        Installer::install();
    }

    public function deactivate(Composer $composer, IOInterface $io)
    {
        var_dump('deactivate');
    }

    public function uninstall(Composer $composer, IOInterface $io)
    {
        var_dump('uninstall');
    }
}