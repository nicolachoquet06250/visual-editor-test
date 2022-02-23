<?php

namespace ve\drawers;

use ve\helpers\Drawer;
use ve\helpers\Helper;

class SimpleTitle extends Drawer
{
    public string $titleLabel;
    public string $titleLevel;

    public function draw(): string
    {
        return <<<HTML
            <div class="row">
                <div class="col-12">
                    <{$this->titleLevel}>
                        {$this->titleLabel}
                    </{$this->titleLevel}>
                </div>
            </div>
        HTML;
    }
}