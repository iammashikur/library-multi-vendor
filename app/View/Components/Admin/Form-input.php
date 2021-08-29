<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;

class FormInput extends Component
{
    public $lable;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($lable)
    {
        $this->lable = $lable;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.form-input');
    }
}
