<?php

namespace ve\drawers;

use ve\helpers\Drawer;

class Alert extends Drawer {
    public string $type;
    public string $content;

    public function draw(): string {
        $writtenType = $this->type === 'danger' ? 'Error' : ucfirst($this->type);

        return <<<HTML
            <div class="alert alert-{$this->type}" role="alert">
                <span class="alert-icon">
                    <span class="visually-hidden">{$writtenType}</span>
                </span>
                
                <p>{$this->content}</p>
            </div>
        HTML;
    }
}