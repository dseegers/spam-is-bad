<?php

namespace Flx\NoSpam;

use Flx\NoSpam\Helpers\Database;

class Service
{

    private $ip;

    public function __construct()
    {

        Database::addRow();

    }


    public function writeIpData()
    {
    }
}