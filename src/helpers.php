<?php

use MalaveHaxiel\TableHeader\ColHeader;
use MalaveHaxiel\TableHeader\TableHeader;


function col($name)
{
	return new ColHeader($name);
}

function tbHeader(...$rows)
{
	return new TableHeader($rows);
}

