## Image Upload for Laravel 6

Install Package By using bellow command:
```
composer require dompdf/dompdf
```
You need to update on config/app.php file
```
'providers' => [
    ...
    SavaniHD\ImageUploadLaravel\ImageUploadLaravelServiceProvider::class
]
'aliases' => [
    ...
    'ImageUploadLaravel' => SavaniHD\ImageUploadLaravel\Facades\ImageUploadHDLaravelFacade::class,
]
```
