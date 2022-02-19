<?php

namespace ve\drawers;

use ve\helpers\Drawer;

class ToggleDarkMode extends Drawer {
    public function draw(): string {
        [ 
            'preview' => $preview, 
            'toggle-dark-mode' => $darkMode 
        ] = $this->component;
        $script = ($preview && $darkMode ? "enable" : "disable") . '-dark-mode.js';
        
        return <<<HTML
            <script src="/assets/js/{$script}"></script>
        HTML;
    }
}