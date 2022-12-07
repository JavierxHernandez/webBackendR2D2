<?php

namespace App\Auxs;

final class ErrorMessage extends Message
{
    protected $type = 'error';

    public function __construct(string $description = '', string $code = '')
    {
        parent::__construct($description, $code);
    }

    public function store(string $name): void
    {
        $this->setDescription("{$name} not created due to internal error");
        $this->setCode('NOT_STORED');
    }

    public function update(string $name): void
    {
        $this->setDescription("{$name} not updated due to internal error");
        $this->setCode('NOT_UPDATED');
    }

    public function destroy(string $name): void
    {
        $this->setDescription("{$name} not deleted due to internal error");
        $this->setCode('NOT_DESTOYED');
    }

    public function restore(string $name): void
    {
        $this->setDescription("{$name} not restored due to internal error");
        $this->setCode('NOT_RESTORED');
    }

    public function get(string $name): void
    {
        $this->setDescription("{$name} not obtained due to internal error");
        $this->setCode('NOT_OBTEAINED');
    }

    public function getAll(string $name): void
    {
        $this->setDescription("Error trying to get list of {$name}");
        $this->setCode('NOT_OBTEAINEDS');
    }

    public function relation(string $relation): void
    {
        $this->setDescription("There was an error while consulting {$relation}");
        $this->setCode('NOT_OBTEAINED');
    }
}
