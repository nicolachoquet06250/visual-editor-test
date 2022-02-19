<?php

namespace ve\drawers;

use ve\helpers\Drawer;

class SimpleCard extends Drawer {
    public function draw(): string {
        [
            'title' => $title, 
            'content' => $content, 
            'buttons' => $buttons
        ] = $this->component;

        $_buttons = '';
        foreach ($buttons as $button) {
            [
                'url' => $url,
                'label' => $label
            ] = $button;
            $_buttons .= "<a href=\"{$url}\" class=\"card-link\">{$label}</a>";
        }

        $content = '<span>' . implode('</span><br /><span>', explode("\n", $content)) . '</span>';
    
        return <<<HTML
            <div class="row">
                <div class="col-12">
                    <div class="card" style="height: 100%">
                        <div class="card-body">
                            <h5 class="card-title">{$title}</h5>
                            <p class="card-text">{$content}</p>
                            {$_buttons}
                        </div>
                    </div>
                </div>
            </div>
        HTML;
    }
}