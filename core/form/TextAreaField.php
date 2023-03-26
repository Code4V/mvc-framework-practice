<?php 

namespace App\Core\Form;


class TextAreaField extends BaseField
{
    public function renderInput(): string 
    {
        return sprintf('<textarea name="%s" value="%s" class="form-control %s" id="exampleInputEmail1" aria-describedby="emailHelp"></textarea>',
        $this->attribute,
        $this->model->{$this->attribute}, 
        $this->model->hasError($this->attribute) ? ' is-invalid' : '');
    }
}