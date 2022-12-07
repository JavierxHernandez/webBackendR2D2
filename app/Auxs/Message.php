<?php

namespace App\Auxs;

abstract class Message
{
    protected $type;
    private $code;
    private $description;

    public function __construct(string $description, string $code)
    {
        $this->$description = $description;
        $this->$code = $code;
    }

    public function toJson($options = 0)
    {
        return [
            'type' => $this->$type,
            'code' => $this->$code,
            'description' => $this->$description
        ];
    }

    protected function setDescription(string $description): void
    {
        $this->description = $description;
    }

    protected function setCode(string $code): void
    {
        $this->code = $code;
    }

    abstract public function store(string $name): void;
    abstract public function update(string $name): void;
    abstract public function destroy(string $name): void;
    abstract public function restore(string $name): void;
}
