<?php

use ValLuminarias\Abbreviations\Facades\Abbreviation;

function abbreviate($string)
{
	return Abbreviation::make($string);
}
