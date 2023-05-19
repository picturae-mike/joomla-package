<?php
namespace PicturaeJoomla\Installer;

use Composer\Script\Event;
use Composer\Installer\PackageEvent;

class Installer
{
    public function __construct()
    {
        symlink('Joomla/test.php', 'constructor_test');
    }

    public function postPackageInstall()
    {
        $file = fopen("testfile.txt", "w");
        fwrite($file, "testbestand");
    }

    public static function postUpdate(Event $event)
    {
        $composer = $event->getComposer();

        // here be dragons
        $file = fopen("testfile.txt", "w");
        fwrite($file, "testbestand");
        fwrite(STDOUT, "Task completed successfully!");

        symlink('Joomla/test.php', 'test');
    }
}