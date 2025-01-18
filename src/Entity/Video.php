<?php

namespace Project\AluraPlay\Entity;

class Video
{
    private ?int $id;
    private string $url;
    private string $title;
    private ?string $imagePath;

    public function __construct(?int $id, string $url, string $title, ?string $imagePath)
    {
        $this->id = $id;
        $this->setUrl($url);
        $this->title = $title;
        $this->imagePath = $imagePath;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        if (is_null($this->id)) {
            $this->id = $id;
        }
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): void
    {
        if (!filter_var($url, FILTER_VALIDATE_URL)){
            throw new \InvalidArgumentException();
        }
        $this->url = $url;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getImagePath(): ?string
    {
        return $this->imagePath;
    }

    public function setImagePath(string $imagePath): void
    {
        $this->imagePath = $imagePath;
    }
}
