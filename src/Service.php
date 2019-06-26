<?php

namespace Flx\NoSpam;

use Flx\NoSpam\Helpers\Database;

class Service
{

    private $ip;

    public function __construct()
    {

      $database = new Database;
      $database->addRow();

    }


    public function writeIpData()
    {
    }
}