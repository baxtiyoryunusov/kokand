<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Checkbox extends Component
{


    private $filed;
    private $value;
    private $id;
    private $class;
    private $attr;
    private $checked;


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $filed, string $id = '', string $class = '', string $checked = '', string $value = '', string $attr = 'false')
    {

        $this->filed = $filed;
        $this->value = $value;
        $this->id = $id;
        $this->class = $class;
        $this->attr = $attr;
        $this->checked = $checked;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.checkbox',['filed'   => $this->filed,

            'value'   => $this->value,
            'id'   => $this->id,
            'class'   => $this->class,
            'attr'   => $this->attr,
            'checked'   => $this->checked
            ]);
    }
}
