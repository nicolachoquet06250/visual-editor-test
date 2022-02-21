<?php

namespace ve\drawers;

use ve\helpers\Drawer;
use ve\helpers\Helper;

class ButtonGroup extends Drawer {
    private string $label;
    private bool $enable_button;
    private array $buttons;
    private bool $enable_checkbox;
    private array $checkboxes;
    private bool $enable_radio;
    private array $radios;

    public function __construct(
        protected array $component
    ) {
        parent::__construct($component);

        [
            'label' => $this->label,
            'enable-button-type' => $this->enable_button,
            'buttons' => $this->buttons,
            'enable-checkbox-type' => $this->enable_checkbox,
            'checkboxes' => $this->checkboxes,
            'enable-radio-type' => $this->enable_radio,
            'radios' => $this->radios
        ] = $component;
    }

    private function getButtonGroup(): string {
        $buttons = '';
        foreach ($this->buttons as $button) {
            [
                'type' => $type,
                'label' => $label,
                'theme' => $theme,
                'active' => $active
            ] = $button;
            $activeClass = $active ? ' active' : '';
            $activeAttr = $active ? ' aria-current="page"' : '';

            $buttons .= <<<HTML
                <button type="{$type}" 
                        class="btn btn-{$theme}{$activeClass}"
                        {$activeAttr}>
                    {$label}
                </button>
            HTML;
        }

        return $buttons;
    }

    private function getCheckboxGroup(): string {
        $checkboxes = '';
        foreach ($this->checkboxes as $button) {
            [
                'label' => $label,
                'name' => $name,
                'default' => $active,
                'theme' => $theme
            ] = $button;
            $checked = $active ? 'checked' : '';
            $id = uniqid();

            $checkboxes .= <<<HTML
                <input type="checkbox" class="btn-check" name="{$name}" id="checkbox-{$id}" autocomplete="off" {$checked}>

                <label class="btn btn-{$theme}" for="checkbox-{$id}">
                    {$label}
                </label>
            HTML;
        }

        return $checkboxes;
    }

    private function getRadioGroup(): string {
        $radios = '';
        foreach ($this->radios as $button) {
            [
                'label' => $label,
                'name' => $name,
                'default' => $active,
                'theme' => $theme
            ] = $button;
            $checked = $active ? 'checked' : '';
            $id = uniqid();

            $radios .= <<<HTML
                <input type="radio" class="btn-check" name="{$name}" id="checkbox-{$id}" autocomplete="off" {$checked}>
                
                <label class="btn btn-{$theme}" for="checkbox-{$id}">
                    {$label}
                </label>
            HTML;
        }

        return $radios;
    }

    public function draw(): string {
        $method = 'getButtonGroup';

        if ($this->enable_button) {
            $method = 'getButtonGroup';
        } else if ($this->enable_checkbox) {
            $method = 'getCheckboxGroup';
        } else if ($this->enable_radio) {
            $method = 'getRadioGroup';
        }

        return <<<HTML
            <div class="btn-group" role="group" aria-label="{$this->label}">
                {$this->{$method}()}
            </div>
        HTML;
    }
}