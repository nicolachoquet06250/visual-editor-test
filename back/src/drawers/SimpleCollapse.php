<?php

namespace ve\drawers;

use ve\helpers\Drawer;

class SimpleCollapse extends Drawer {
    private array $button;
    private string $collapseText;
    private string $id;
    private bool $opened;
    private bool $preview;
    private bool $horizontal;
    private string $side;

    public function __construct(
        protected array $component
    ) {
        parent::__construct($component);

        [
            'button-tag-type' => $this->button['tag-type'],
            'button-label' => $this->button['label'],
            'button-type' => $this->button['type'],
            'collapse-text' => $this->collapseText,
            'collapse-opened' => $this->opened,
            'collapse-horizontal' => $this->horizontal,
            'collapse-side' => $this->side
        ] = $component;
        $this->preview = $component['preview'] ?? false;
        
        $this->id = 'collapse-' . uniqid();
    }

    private function getToggler(): string {
        $opened = $this->opened && $this->preview ? 'true' : 'false';
        if ($this->button['tag-type'] === 'link') {
            return <<<HTML
                <a class="btn btn-{$this->button['type']}" 
                    data-bs-toggle="collapse" 
                    href="#{$this->id}" 
                    role="button" 
                    aria-expanded="{$opened}" 
                    aria-controls="collapseExample">
                    {$this->button['label']}
                </a>
            HTML;
        }
        return <<<HTML
            <button class="btn btn-{$this->button['type']}" 
                    type="button" 
                    data-bs-toggle="collapse" 
                    data-bs-target="#{$this->id}" 
                    aria-expanded="{$opened}" 
                    aria-controls="collapseExample">
                {$this->button['label']}
            </button>
        HTML;
    }

    public function getCollapse() {
        $horizontalClass = $this->horizontal ? " collapse-horizontal" : '';
        $openedClass = $this->opened && $this->preview ? ' show' : '';
        $marginClass = $this->side === 'top' ? ' mb-2' : '';

        return <<<HTML
            <div class="collapse{$horizontalClass}{$openedClass}{$marginClass}" 
                 id="{$this->id}">
                <div class="card card-body">
                    {$this->collapseText}
                </div>
            </div>
        HTML;
    }

    public function draw(): string {
        return ($this->side === 'top' ? $this->getCollapse() : '') . <<<HTML
            <p>
                {$this->getToggler()}
            </p>
        HTML . ($this->side === 'bottom' ? $this->getCollapse() : '');
    }
}