<?php

/**
 * 
 */
class Category
{
	
	private $id;
	private $label;


	public function getId(): ?int
	{
		return $this->id
	}


	public function getLabel(): ?string
	{
		return $this->label;
	}

	public function setLabel(string $label): self
	{
		$this->label = $label;

		return $this;
	}
}