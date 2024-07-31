<?php

namespace Pkg6\Dcat\BigUpload;

use Dcat\Admin\Extend\ServiceProvider;
use Dcat\Admin\Admin;

class DcatBigUploadServiceProvider extends ServiceProvider
{
	protected $js = [
        'js/index.js',
    ];
	protected $css = [
		'css/index.css',
	];

	public function register()
	{
		//
	}

	public function init()
	{
		parent::init();

		//
		
	}

	public function settingForm()
	{
		return new Setting($this);
	}
}
