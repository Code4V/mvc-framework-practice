<?php 

namespace App\Core\Form;
use App\Core\Model;

abstract class BaseField 
{
    public Model $model;
    public string $attribute;
    abstract public function renderInput();

    public function __construct(Model $model, string $attribute)
    {
        $this->model = $model;
        $this->attribute = $attribute;
    }

    public function __toString()
    {
        
        return sprintf('
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">%s</label>
            %s
            <div class="invalid-feedback">
                %s
            </div>
        </div>
        ', $this->model->getLabel($this->attribute) ?? $this->attribute, 
           $this->renderInput(),
           $this->model->getFirstError($this->attribute)
           );
    } 
}