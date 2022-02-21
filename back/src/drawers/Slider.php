<?php

namespace ve\drawers;

use ve\helpers\Drawer;

class Slider extends Drawer {
    private bool $auto;
    private bool $indicators;
    private bool $fadeAnimations;
    private bool $preventCycling;
    private array $slides;

    public function __construct(
        protected array $component
    ) {
        parent::__construct($component);

        [
            'auto' => $this->auto,
            'show-indicators' => $this->indicators,
            'fade-animations' => $this->fadeAnimations,
            'prevent-cycling' => $this->preventCycling,
            'slides' => $this->slides
        ] = $component;
    }

    public function getSlides(): string {
        $slides = '';
        foreach ($this->slides as $slide) {
            [
                'image' => $image,
                'active' => $active,
                'alternative-text' => $alt,
                'interval' => $interval
            ] = $slide;
            $activeClass = $active ? 'active' : '';
            $intervalAttr = $this->auto && $interval ? " data-bs-interval=\"{$interval}\"" : '';

            $slides .= <<<HTML
                <div class="carousel-item {$activeClass}"{$intervalAttr}>
                    <img src="{$image}" class="d-block w-100" alt="{$alt}">
                </div>
            HTML;
        }
        return $slides;
    }

    public function getIndicators(): string {
        if (!$this->indicators || $this->fadeAnimations) {
            return '';
        }

        $indicators = '';
        foreach ($this->slides as $i => $slide) {
            [
                'active' => $active,
                'alternative-text' => $alt
            ] = $slide;
            $activeAttrs = $active ? ' class="active" aria-current="true"' : '';

            $indicators .= <<<HTML
                <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="{$i}"{$activeAttrs} aria-label="{$alt}"></button>
            HTML;
        }

        return <<<HTML
            <div class="carousel-indicators">
                {$indicators}
            </div>
        HTML;
    }

    public function draw(): string {
        $preventCyclingAttr = $this->preventCycling ? ' data-bs-wrap="false"' : '';
        $fadeClass = $this->fadeAnimations ? ' carousel-fade' : '';

        return <<<HTML
            <div id="carouselExampleControls" class="carousel slide{$fadeClass}"{$preventCyclingAttr} data-bs-ride="carousel">
                {$this->getIndicators()}
                
                <div class="carousel-inner">
                    {$this->getSlides()}
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        HTML;
    }
}