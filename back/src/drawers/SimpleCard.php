<?php

namespace ve\drawers;

use ve\helpers\Drawer;

class SimpleCard extends Drawer {
    public string $title;
    public string $content;
    public array $buttons;

    public function draw(): string {
        $_buttons = '';
        foreach ($this->buttons as $button) {
            [
                'url' => $url,
                'label' => $label
            ] = $button;
            
            $_buttons .= "<a href=\"{$url}\" class=\"card-link\">{$label}</a>";
        }

        $content = '<span>' . implode('</span><br /><span>', explode("\n", $this->content)) . '</span>';
    
        return <<<HTML
            <div class="row">
                <div class="col-12">
                    <div class="card" style="height: 100%">
                        <div class="card-body">
                            <h5 class="card-title">{$this->title}</h5>
                            <p class="card-text">{$content}</p>
                            {$_buttons}
                        </div>
                    </div>
                </div>
            </div>
        HTML;
    }
}