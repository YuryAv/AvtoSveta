<?php

namespace App\Actions;

use TCG\Voyager\Actions\AbstractAction;

class PublishCar extends AbstractAction
{
    public function getTitle()
    {
        return 'Опубликовать';
    }

    public function getIcon()
    {
        return 'voyager-plus';
    }

    public function getPolicy()
    {
        return 'edit';
    }

    public function getAttributes()
    {
        return [
            'class' => 'btn btn-sm btn-success pull-right',
        ];
    }

    public function getDefaultRoute()
    {
        return route('car.publish', ['id' => $this->data->{$this->data->getKeyName()}]);
    }

    public function shouldActionDisplayOnDataType()
    {
        return $this->dataType->slug == 'unpublished-cars';
    }
}