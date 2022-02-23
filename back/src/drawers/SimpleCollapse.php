<?php

namespace ve\drawers;

use ve\helpers\Drawer;

class SimpleCollapse extends Drawer {
    public array $button;
    public string $buttonTagType;
    public string $buttonLabel;
    public string $buttonType;
    public string $collapseText;
    public bool $collapseOpened;
    public bool $collapseHorizontal;
    public string $collapseSide;

    public bool $preview = false;

    private function getToggler(): string {
        $opened = $this->collapseOpened && $this->preview ? 'true' : 'false';
        if ($this->buttonTagType === 'link') {
            return <<<HTML
                <a class="btn btn-{$this->buttonType}" 
                    data-bs-toggle="collapse" 
                    href="#collapse-{$this->id}" 
                    role="button" 
                    aria-expanded="{$opened}" 
                    aria-controls="collapseExample">
                    {$this->buttonLabel}
                </a>
            HTML;
        }
        return <<<HTML
            <button class="btn btn-{$this->buttonType}" 
                    type="button" 
                    data-bs-toggle="collapse" 
                    data-bs-target="#collapse-{$this->id}" 
                    aria-expanded="{$opened}" 
                    aria-controls="collapseExample">
                {$this->buttonLabel}
            </button>
        HTML;
    }

    public function getCollapse() {
        $horizontalClass = $this->collapseHorizontal ? " collapse-horizontal" : '';
        $openedClass = $this->collapseOpened && $this->preview ? ' show' : '';
        $marginClass = $this->collapseSide === 'top' ? ' mb-2' : '';

        return <<<HTML
            <div class="collapse{$horizontalClass}{$openedClass}{$marginClass}" 
                 id="collapse-{$this->id}">
                <div class="card card-body">
                    {$this->collapseText}
                </div>
            </div>
        HTML;
    }

    public function draw(): string {
        return ($this->collapseSide === 'top' ? $this->getCollapse() : '') . <<<HTML
            <p>
                {$this->getToggler()}
            </p>
        HTML . ($this->collapseSide === 'bottom' ? $this->getCollapse() : '');
    }
}