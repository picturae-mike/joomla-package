<?php

namespace PicturaeJoomla\Installer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Installer\InstallerInterface;
use Composer\Package\PackageInterface;
use Composer\Repository\InstalledRepositoryInterface;
use Symfony\Component\Console\Command\Command;

use PicturaeJoomla\Installer\Docker;

class Installer
{
    public function __construct()
    {

    }

    public static function install()
    {
        Docker::setup();
        Docker::up();
    }
}