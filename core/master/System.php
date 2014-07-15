<?php

class System 
{
	protected $status;
	protected $name;

	public function System($name)
	{
		$this->name = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function getStatus()
	{
		return $this->status;
	}
}