<?php

namespace ValLuminarias\Abbreviations\Facades;

use Illuminate\Support\Facades\Facade;
use ValLuminarias\Abbreviations\Abbreviations;

class Abbreviation extends Facade
{
	protected static function getFacadeAccessor()
	{
		return Abbreviations::class;
	}
}
