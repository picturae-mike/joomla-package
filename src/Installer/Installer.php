<?php

namespace PicturaeJoomla\Installer;

use Composer\Composer;
use Composer\IO\IOInterface;

class Installer
{
    public function __construct(IOInterface $io, Composer $composer)
    {
        dd('Lets go!');
    }
}