<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class MyController extends Controller
{
    //
    public function sendMail($type, $data){
        //mail logic here
    }

    public function unidid($val){
        $token = "";
        $codes = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $codes .= ".-_!_-.";
        $codes .= uniqid('', false);
        $codes .= "abcdefghijklmnopqrstuvwxyz";
        $codes .= "0123456789";
        $max = strlen($codes);
        for($i=0; $i < $val; $i++){
            $token.= $codes[random_int(0, $max-1)];
        }
        return $token;
    }

    public function fileUploader($photo){


        $allowedfileExtension = ['jpg', 'png', 'bmp', 'jpeg'];

//            $filename = $photo->getClientOriginalName();

        $extension = $photo->getClientOriginalExtension();

        $extension = strtolower($extension);

        $size = $photo->getSize();

        if ($size > 1000000) {
            return ["Image size [$size] too large", false];
        }

        $time = Carbon::now();

        $check = in_array(strtolower($extension), $allowedfileExtension);

        $filename = $this->unidid(5). date_format($time, 'd') . rand(1, 9) . date_format($time, 'h') . "." . $extension;

        if ($check) {

//            $directory = 'photo/' .$this->subdomain() .'/'. date_format($time, 'Y') . '/' . date_format($time, 'm');
            $directory = 'uploads/photo/locations';
            $image = $directory . '/' . $filename;

            $photo->storeAs($directory, $filename, 'public'); //unlock in live version

            return [$image, true];

//              release memory... lol
//              ini_set('memory_limit', $limit);
        }else{
            return ["Extension [$extension] not allowed", false];
        }

    }

    public function error_man($msg){
        return array('error'=>$msg);
    }
}
