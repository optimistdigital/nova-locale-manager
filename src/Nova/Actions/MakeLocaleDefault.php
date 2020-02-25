<?php

namespace OptimistDigital\NovaLocaleManager\Nova\Actions;

use Laravel\Nova\Actions\Action;
use Illuminate\Support\Collection;
use Laravel\Nova\Fields\ActionFields;

class MakeLocaleDefault extends Action
{
    public $name = 'Make default';
    public $showOnTableRow = true;

    public function handle(ActionFields $fields, Collection $models)
    {
        $newDefault = $models->first();
        $newDefault->default = true;
        $newDefault->save();
    }

    /**
     * Get the fields available on the action.
     *
     * @return array
     */
    public function fields()
    {
        return [];
    }
}
