<?php

namespace Pkg6\Dcat\BigUpload\Http\Controllers;

use Dcat\Admin\Layout\Content;
use Dcat\Admin\Admin;
use Illuminate\Routing\Controller;

class DcatBigUploadController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->title('Title')
            ->description('Description')
            ->body(Admin::view('pkg6.dcat-big-upload::index'));
    }
}