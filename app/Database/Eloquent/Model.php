<?php

namespace App\Database\Eloquent;

/**
 * Class Model
 * @package App\Database\Eloquent
 */
class Model extends \Illuminate\Database\Eloquent\Model
{
    /** Default pagination size */
    const PAGINATION_SIZE = 20;

    /**
     * Get the form data, id and name value pairs
     * @return mixed
     */
    public static function getFormData()
    {
        return self::orderBy('name')->pluck('name', 'id');
    }

    /**
     * @param $self_attribute
     * @param $model_attribute
     * @param $model_class
     * @return array
     */
    public function getSelectedFormData($self_attribute, $model_attribute, $model_class)
    {
        $selected_form_data = [];

        $model = $model_class::where('id', $this->$self_attribute)->first();
        if (!empty($model)) {
            $selected_form_data[$model->id] = $model->$model_attribute;
        }
        return $selected_form_data;
    }

    /**
     * @param $relation
     * @param $model_attribute
     * @return array
     */
    public function getMultipleSelectFormData($relation, $model_attribute)
    {
        $selected_form_data = [];
        foreach ($this->$relation as $relation) {
            $selected_form_data[$relation->id] = $relation->$model_attribute;
        }
        return $selected_form_data;
    }
}