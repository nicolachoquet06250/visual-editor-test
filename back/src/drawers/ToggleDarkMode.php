<?php

namespace ve\drawers;

use ve\helpers\Drawer;

class ToggleDarkMode extends Drawer {
    public bool $preview = false;
    public bool $toggleDarkMode;

    public function draw(): string {
        $script = ($this->preview && $this->toggleDarkMode ? "enable" : "disable") . '-dark-mode.js';
        
        return <<<HTML
            <script src="/assets/js/{$script}"></script>
        HTML;
    }
}