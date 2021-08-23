<?php

class Task {
    public $id;

    public $description;

    public $complete;

    public $created_at;

    public $updated_at;

    public function complete(): void
    {
        $this->complete = true;
    }

    public function isComplete(): bool
    {
        return (bool) $this->complete;
    }
}