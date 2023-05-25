<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    private string $field;
    private string $label;
    private string $type;
    private string $value;
    private string $classes;
    /**
     * Create a new component instance.
     */
    public function __construct(string $field, string $label, string $type = 'text', string $value = '', string $classes = '')
    {
        $this->field   = $field;
        $this->label   = $label;
        $this->value   = $value;
        $this->type    = $type;
        $this->classes = $classes;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input', [
            'field'   => $this->field,
            'type'    => $this->type,
            'label'   => $this->label,
            'value'   => $this->value,
            'classes' => $this->classes
        ]);
    }
}