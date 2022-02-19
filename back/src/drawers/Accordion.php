<?php

namespace ve\drawers;

use ve\helpers\Drawer;

class Accordion extends Drawer {
    public function draw(): string {
        [
            '_name' => $name,
            'accordion-mode' => $mode,
            'accordion-items' => $items
        ] = $this->component;
        $id = uniqid();

        $acc = "<div class=\"accordion\" id=\"{$name}-{$id}\">";
        
        foreach ($items as $i => $item) {
            [
                'title' => $title,
                'content' => $content,
                'opened' => $opened
            ] = $item;

            $headerClass = $opened ? '' : ' collapsed';
            $bodyClass = $opened ? ' show' : '';
            $expended = $opened ? 'true' : 'false';
            $parent = $mode === 'simple' ? "data-bs-parent=\"#{$name}-{$id}\"" : '';

            $acc .= <<<HTML
                <div class="accordion-item">
                    <h2 id="heading-{$name}-{$id}-{$i}" class="accordion-header">
                        <button class="accordion-button{$headerClass}" type="button" 
                                data-bs-toggle="collapse" 
                                data-bs-target="#collapse-{$name}-{$id}-{$i}" 
                                aria-expanded="{$expended}" 
                                aria-controls="collapse-{$name}-{$id}-{$i}">
                            {$title}
                        </button>
                    </h2>
                    
                    <div id="collapse-{$name}-{$id}-{$i}" 
                         class="accordion-collapse collapse{$bodyClass}" 
                         aria-labelledby="heading-{$name}-{$id}-{$i}" 
                         {$parent}>
                        <div class="accordion-body">
                            {$content}
                        </div>
                    </div>
                </div>
            HTML;
        }

        $acc .= "</div>";

        return $acc;
    }
}