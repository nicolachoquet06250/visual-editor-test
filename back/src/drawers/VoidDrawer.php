<?php

namespace ve\drawers;

use ve\helpers\Drawer;

class VoidDrawer extends Drawer {
    public function draw(): string {
        return "";
    }
}