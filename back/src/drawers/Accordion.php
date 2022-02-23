<?php

namespace ve\drawers;

use ve\helpers\Drawer;

class Accordion extends Drawer {
    public string $_name;
    public string $content;

    public function draw(): string {
        $acc = "<div class=\"accordion\" id=\"{$this->_name}-{$this->id}\">";
        
        foreach ($this->items as $i => $item) {
            [
                'title' => $title,
                'content' => $content,
                'opened' => $opened
            ] = $item;

            $headerClass = $opened ? '' : ' collapsed';
            $bodyClass = $opened ? ' show' : '';
            $expended = $opened ? 'true' : 'false';
            $parent = $this->mode === 'simple' ? "data-bs-parent=\"#{$this->_name}-{$this->id}\"" : '';

            $acc .= <<<HTML
                <div class="accordion-item">
                    <h2 id="heading-{$this->_name}-{$this->id}-{$i}" class="accordion-header">
                        <button class="accordion-button{$headerClass}" type="button" 
                                data-bs-toggle="collapse" 
                                data-bs-target="#collapse-{$this->_name}-{$this->id}-{$i}" 
                                aria-expanded="{$expended}" 
                                aria-controls="collapse-{$this->_name}-{$this->id}-{$i}">
                            {$title}
                        </button>
                    </h2>
                    
                    <div id="collapse-{$this->_name}-{$this->id}-{$i}" 
                         class="accordion-collapse collapse{$bodyClass}" 
                         aria-labelledby="heading-{$this->_name}-{$this->id}-{$i}" 
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