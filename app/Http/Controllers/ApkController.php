<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class ApkController extends Controller
{
    public function getDownload()
    {
        $file= public_path().'/apk/app-release.apk';
        $headers = array(
                'Content-Type: application/apk',
                );
        return Response::download($file, 'gunung.apk', $headers);
    }
}
