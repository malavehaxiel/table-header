<?php

namespace MalaveHaxiel\TableHeader;

class ColHeader
{

	public $name;
	public $colspan;
	public $rowspan;
	public $style;

	public function __construct($name)
	{
		$this->name = $name;
		$this->colspan = 1;
		$this->rowspan = 1;
		$this->style = "";
	}

	public function colspan($n)
	{
		$this->colspan = $n;

		return $this;
	}

	public function rowspan($n)
	{
		$this->rowspan = $n;

		return $this;
	}

	public function style($cadena)
	{
		$this->style = $cadena;

		return $this;
	}
}
