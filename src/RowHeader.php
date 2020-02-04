<?php

namespace MalaveHaxiel\TableHeader;

class RowHeader
{

	protected $cols = array();

	public function __construct(array $cols)
	{
		$this->cols = $cols;
	}

	public function getCols()
	{
		return $this->cols;
	}

	public function add(ColHeader $col)
	{
		$this->cols[] = $col;
	}

	public function addCols(array $cols = array())
	{
		foreach ($cols as $value) {
			$this->add($value);
		}
	}
}
