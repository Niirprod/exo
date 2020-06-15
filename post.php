<?php

/**
 * 
 */
class Post
{
	
	private $id;
	private $postDate;
	private $content;


	public function getId(): ?int
	{
		return $this->id
	}


	public function getPostDate(): ?string
	{
		return $this->postDate;
	}

	public function setPostDate(string $postDate): self
	{
		$this->postDate = $postDate;

		return $this;
	}

	public function getContent(): ?string
	{
		return $this->content;
	}

	public function setContent(string $content): self
	{
		$this->content = $content;

		return $this;
	}
}