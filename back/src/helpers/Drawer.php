<?php

namespace ve\helpers;

abstract class Drawer {
    protected string $id;

    public function __construct(
        protected array $component = []
    ) {
        foreach ($component as $prop => $v) {
            $var = lcfirst(
                implode(
                    '', 
                    array_map(
                        fn(string $c) => ucfirst($c), 
                        explode('_', 
                            str_replace(
                                '-', '_', $prop
                            )
                        )
                    )
                )
            );

            if (
                ($prop === '_name' || $prop === '_id') && 
                in_array($prop, array_keys(get_class_vars($this::class)))
            ) {
                $this->{$prop} = $v;
            } else if (in_array($var, array_keys(get_class_vars($this::class)))) {
                $this->{$var} = $v;
            }
        }

        $this->id = uniqid();
    }
    
    public abstract function draw(): string;
}