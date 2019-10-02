<?php

namespace SavaniHD\ImageUploadLaravel\App;

use Illuminate\Support\Str;

class ImageUploadHDLaravel
{
    public function upload($image, $path)
    {
    	$imageName = '';

    	if (!empty($image)) {
    		$imageOriginalName = Str::slug(pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME));
	    	$imageName = $imageOriginalName.'.'.$image->extension();

	    	$x = 1;
	    	do {
		    	if (file_exists($path.'/'.$imageName)) {
					$imageName = $imageOriginalName.'-'.$x.'.'.$image->extension();	    		
			    	$x++;
		    	}else{
	        		$image->move($path, $imageName);
	        		break;
		    	}
			} while ($x <= 10000);
    	}
        
        return $imageName;
    }
}