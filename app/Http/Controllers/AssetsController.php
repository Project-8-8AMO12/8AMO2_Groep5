<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;

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
        $f="bijenhoudenknipsel.jpg";   

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


    public function fotoUpload(){
        $target_dir = str_replace('\\', '/', public_path('images/gallery/'));
        $target_file = $target_dir . basename($_FILES["foto_file"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image

        $check = getimagesize($_FILES["foto_file"]["tmp_name"]);
            
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } 
        
        else {
            $uploadOk = 0;
        }

        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["foto_file"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } 
        
        else {
            if (move_uploaded_file($_FILES["foto_file"]["tmp_name"], $target_file)) {
                echo "<script> alert('The file ". basename( $_FILES["foto_file"]["name"]). " has been uploaded.');</script>";

                $imagelink = public_path('images/gallery/' . basename($_FILES["foto_file"]["name"]) . '');

                // $this->store($imagelink);
                return view('frontend.home');
            }
            
            else {
            echo "Sorry, there was an error uploading your file.";
            }
        }
    }

    public function store($imagelink){

        $Album = new Album();

                // DB::table('users')->insert(
                //     ['email' => 'john@example.com', 'votes' => 0]
                // );
            

        $Album->image_name = request('foto_naam');
        $Album->description = request('foto_beschrijving');
        // $Album->image_link = request('foto_file');
        
        $Album->save();

    }
}
