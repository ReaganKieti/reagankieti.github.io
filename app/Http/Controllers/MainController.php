<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MainController extends Controller
{
    public function download_cv(){
        // return Storage::download('file.jpg');
        $name = 'Reagan Kieti - CV';
        return Storage::disk('public')->get('reagan_cv.pdf');
    }
}
