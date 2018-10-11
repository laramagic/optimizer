<?php

namespace LaralLover\Optimizer;

use Illuminate\Support\Facades\Schema;
use DB;

Class Optimizer
{
	public $app;

	public function __construct( $app )
	{
		$this->app = $app;
	}

	public function getApp()
	{
		return $this->app;
	}

	public function checkStatus()
	{
		return false;
	}
}
