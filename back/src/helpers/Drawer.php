<?php

namespace ve\helpers;

abstract class Drawer {
    public function __construct(
        protected array $component = []
    ) {}
    
    public abstract function draw(): string;
}