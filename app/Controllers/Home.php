<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
       $config = config('MySite');
       echo "Welcome in {$config->siteName}. jika ada kesalahan mohon hubungi {$config->siteEmail}";
    }
}
