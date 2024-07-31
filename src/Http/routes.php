<?php

use Pkg6\Dcat\BigUpload\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('dcat-big-upload', Controllers\DcatBigUploadController::class.'@index');