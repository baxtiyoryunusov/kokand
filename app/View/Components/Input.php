<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Input extends Component
{

    private  $type;
    private  $label;
    private  $placeholder;
    private  $filed;
    private  $value;
    private  $id;
    private  $class;
    private  $attr;
    private  $yulduz;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $label, string $placeholder, string $filed, string $type = 'text',string $id = '',string $class = '', string $value = '' ,string $attr= '' ,string $yulduz= 'false')
    {
        $this->type = $type;
        $this->label = $label;
        $this->placeholder = $placeholder;
        $this->filed = $filed;
        $this->value = $value;
        $this->id = $id;
        $this->class = $class;
        $this->attr = $attr;
        $this->yulduz = $yulduz;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public
    function render()
    {
        return view('components.input', [
            'type'   => $this->type,
            'label'   => $this->label,
            'filed'   => $this->filed,
            'placeholder'   => $this->placeholder,
            'value'   => $this->value,
            'id'   => $this->id,
            'class'   => $this->class,
            'attr'   => $this->attr,
            'yulduz'   => $this->yulduz,
        ]);
    }
}
