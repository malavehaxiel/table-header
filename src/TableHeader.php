<?php

namespace MalaveHaxiel\TableHeader;

class TableHeader
{
	public $rows;

	public function __construct(array $rows = array())
	{
		$this->rows = $rows;

		return $this;
	}

	public function row(...$cols)
	{
		$this->rows[] = new RowHeader($cols);		

		return $this;
	}
}
