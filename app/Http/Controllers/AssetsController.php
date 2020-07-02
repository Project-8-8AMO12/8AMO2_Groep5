<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssetsController extends Controller
{
    public function getUpload(){
        if (($_FILES['my_file']['name']!="")){
            // Where the file is going to be stored
             $target_dir =  str_replace('\\', '/', base_path('resources/views/backend/magazine/'));
             
             $file = $_FILES['my_file']['name'];
             $path = pathinfo($file);
             $filename = $path['filename'];
             $ext = $path['extension'];
             $temp_name = $_FILES['my_file']['tmp_name'];
             $path_filename_ext = $target_dir.$filename.".".$ext;
             
            // Check if file already exists
            if (file_exists($path_filename_ext)) {
                echo "Sorry, file already exists.";
            
            }else{
                move_uploaded_file($temp_name,$path_filename_ext);
                return view('frontend.home');
            }
        }
    }

    public function getDownload(){
        $f="magazine.jpg";   

        $target_dir =  str_replace('\\', '/', base_path('resources/views/backend/magazine/'));
        $path = pathinfo($f);
        $ext = $path['extension'];

        $full = $target_dir.$f;

       $file = ($full);

       $filetype=filetype($file);

       $filename=basename($file);

       header ("Content-Type: ".$filetype);

       header ("Content-Length: ".filesize($file));

       header ("Content-Disposition: attachment; filename=".$filename);

       readfile($file);
    }
}
