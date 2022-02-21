<?php

namespace ve\drawers;

use ve\helpers\Drawer;

class Alert extends Drawer {
    private string $type;
    private string $content;

    public function __construct(
        protected array $component
    )
    {
        parent::__construct($component);

        [
            'type' => $this->type,
            'content' => $this->content
        ] = $component;
    }

    public function draw(): string {
        $writtenType = $this->type === 'danger' ? 'Error' : ucfirst($this->type);

        return <<<HTML
            <div class="alert alert-{$this->type}" role="alert">
                <span class="alert-icon">
                    <span class="visually-hidden">{$writtenType}</span>
                </span>
                
                <p>{$this->content}</p>
            </div>
        HTML;
    }
}