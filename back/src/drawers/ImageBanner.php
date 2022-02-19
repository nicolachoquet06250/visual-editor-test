<?php

namespace ve\drawers;

use ve\helpers\{
    Drawer,
    Helper
};

class ImageBanner extends Drawer {
    private string $image;
    private string $title;

    private static bool $rendered = false;

    public function __construct(
        protected array $component
    ) {
        parent::__construct($component);

        [
            'image' => $this->image,
            'title' => $this->title,
            '_name' => $this->name
        ] = $component;
    }

    public function style(): string {
        if (!static::$rendered) {
            static::$rendered = true;
            return <<<CSS
                .page_header_container.banner {
                      height: 300px;
                      display: flex;
                      align-content: center;
                      background-repeat: no-repeat;
                      background-position: right;
                      background-size: cover;
                }
            CSS;
        }
        return '';
    }

    public function draw(): string {
        return <<<HTML
            <div class="row page_header_container banner mb-2 mb-md-3 no-gutters"
                 style="background-image: url({$this->image})">
                <header id="page_header" class="col-12 page_header">
                    <h1 class="ml-md-3">
                        {$this->title}
                    </h1>
                </header>
            </div>
        HTML;
    }
}