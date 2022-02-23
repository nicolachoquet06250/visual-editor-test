<?php

namespace ve\drawers;

use ve\helpers\Drawer;

class Dropdown extends Drawer {
    public bool $preview = false;
    public string $id;

    public bool $splitted;
    public bool $opened;
    public bool $dark;
    
    public string $buttonType;
    public string $buttonSize;
    public string $buttonLabel;
    public string $side = 'dropdown';

    public array $items;

    private function getButtonSizeClass(): string {
        switch($this->buttonSize) {
            case 'large': return ' btn-lg';
            case 'small': return ' btn-sm';
            default: return '';
        }
    }

    private function getToggler(): string {
        $expanded = $this->opened && $this->preview ? 'true' : 'false';
        $openedClass = $this->opened && $this->preview ? ' show' : '';

        if ($this->splitted) {
            return <<<HTML
                <button type="button" 
                        class="btn btn-{$this->buttonType}{$this->getButtonSizeClass()}{$openedClass}">
                    {$this->buttonLabel}
                </button>
            HTML;
        }

        return <<<HTML
            <button class="btn btn-{$this->buttonType}{$this->getButtonSizeClass()} dropdown-toggle{$openedClass}" 
                    type="button" id="dropdown-{$this->id}" 
                    data-bs-toggle="dropdown" 
                    aria-expanded="{$expanded}">
                {$this->buttonLabel}
            </button>
        HTML;
    }

    private function getSplit(): string {
        if (!$this->splitted) {
            return '';
        }

        $expanded = $this->opened && $this->preview ? 'true' : 'false';
        $openedClass = $this->opened && $this->preview ? ' show' : '';

        return <<<HTML
            <button type="button" class="btn btn-{$this->buttonType}{$this->getButtonSizeClass()} dropdown-toggle dropdown-toggle-split{$openedClass}" 
                    data-bs-toggle="dropdown" 
                    aria-expanded="{$expanded}">
                <span class="visually-hidden">Toggle Dropdown</span>
            </button>
        HTML;
    }

    private function getItems(): string {
        $darkClass = $this->dark ? ' dropdown-menu-dark' : '';
        $openedClass = $this->opened && $this->preview ? ' show' : '';
        switch($this->side) {
            case 'dropdown':
                $style = $this->opened && $this->preview ? 'style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 42px);"' : '';
                break;
            case 'dropup':
                $style = $this->opened && $this->preview ? 'style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(0px, -42px);"' : '';
                break;
            case 'dropend':
                $style = $this->opened && $this->preview ? 'style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(122px);"' : '';
                break;
            case 'dropstart':
                $style = $this->opened && $this->preview ? 'style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate(-122px);"' : '';
                break;
            default:
                $style = '';
        }

        return "
            <ul class=\"dropdown-menu{$darkClass}{$openedClass}\"
                {$style}
                aria-labelledby=\"dropdown-{$this->id}\">
                " . (function() {
                    $items = '';
                    foreach ($this->items as $item) {
                        [
                            'label' => $label,
                            'href' => $href,
                            'is-separator' => $separator
                        ] = $item;

                        if ($separator) {
                            $items .= <<<HTML
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                            HTML;
                            continue;
                        }
                        $items .= <<<HTML
                            <li>
                                <a class="dropdown-item" href="{$href}">
                                    {$label}
                                </a>
                            </li>
                        HTML;
                    }
                    return $items;
                })() . '
            </ul>
        ';
    }

    public function draw(): string {
        $expanded = $this->opened && $this->preview ? 'true' : 'false';

        return <<<HTML
            <div class="btn-group {$this->side}">
                {$this->getToggler()}
                {$this->getSplit()}
                {$this->getItems()}
            </div>
        HTML;
    }
}