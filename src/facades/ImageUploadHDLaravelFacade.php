<?php

namespace SavaniHD\ImageUploadLaravel\Facades;

use Illuminate\Support\Facades\Facade;

class ImageUploadHDLaravelFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'imageUploadHDLaravel';
    }
}