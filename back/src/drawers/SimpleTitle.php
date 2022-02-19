<?php

namespace ve\drawers;

use ve\helpers\Drawer;
use ve\helpers\Helper;

class SimpleTitle extends Drawer
{
    private string $title;
    private string $level;

    public function __construct(
        protected array $component
    )
    {
        parent::__construct($component);

        [
            'title-label' => $this->title,
            'title-level' => $this->level
        ] = $component;
    }

    public function draw(): string
    {
        return <<<HTML
            <div class="row">
                <div class="col-12">
                    <{$this->level}>
                        {$this->title}
                    </{$this->level}>
                </div>
            </div>
        HTML;
    }
}