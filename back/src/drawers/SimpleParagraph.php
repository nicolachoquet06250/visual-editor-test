<?php

namespace ve\drawers;

use ve\helpers\Drawer;

class SimpleParagraph extends Drawer
{
    private string $text;

    public function __construct(
        protected array $component
    )
    {
        parent::__construct($component);

        [
            'paragraph' => $this->text
        ] = $component;
    }

    public function draw(): string
    {
        return <<<HTML
            <div class="row">
                <div class="col-12 col-md-10 col-xl-8">
                    <p class="lead text-mw pb-0 mb-2">
                        {$this->text}
                    </p>
                </div>
            </div>
        HTML;
    }
}