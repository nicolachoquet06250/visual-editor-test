<?php

namespace ve\drawers;

use ve\helpers\Drawer;

class SimpleParagraph extends Drawer
{
    public string $paragraph;

    public function draw(): string
    {
        return <<<HTML
            <div class="row">
                <div class="col-12 col-md-10 col-xl-8">
                    <p class="lead text-mw pb-0 mb-2">
                        {$this->paragraph}
                    </p>
                </div>
            </div>
        HTML;
    }
}