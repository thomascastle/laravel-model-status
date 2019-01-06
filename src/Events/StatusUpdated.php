<?php

namespace Spatie\ModelStatus\Events;

use Spatie\ModelStatus\Status;
use Illuminate\Database\Eloquent\Model;

class StatusUpdated
{
    public $oldStatus;

    public $newStatus;

    public $model;

    public function __construct(?Status $oldStatus, Status $newStatus, Model $model)
    {
        $this->oldStatus = $oldStatus;
        $this->newStatus = $newStatus;
        $this->model = $model;
    }
}