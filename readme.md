## Image Upload for Laravel 6

Install Package By using bellow command:
```
composer require savanihd/image-upload-laravel
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
You can use as bellow:
upload method will return name of uploaded file. if you upload same file name file than it will return name like this way: test.png. test-1.png, test-2.png etc
Syntax:
```
ImageUploadLaravel::upload(file_object, folder_path)
```
Example:
```
$fileName = ImageUploadLaravel::upload($request->image, public_path('images'))

dd($fileName);
```
Supported By: https://itsolutionstuff.com