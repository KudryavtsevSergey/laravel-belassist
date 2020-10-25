<?php

namespace Sun\BelAssist\Models;

abstract class AbstractModel
{
    public static function createFromArray(array $data): self
    {
        $model = new static();
        $model->fillFromData($data);
        return $model;
    }

    protected abstract function fillFromData(array $data);
}
