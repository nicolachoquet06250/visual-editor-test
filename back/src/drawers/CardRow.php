<?php

namespace ve\drawers;

use ve\helpers\Drawer;

class CardRow extends Drawer {
    public function draw(): string {
        $cards = "<div class=\"row\">";
        foreach ($this->component['cards'] as $i => $card) {
            [
                'title' => $title,
                'content' => $content,
                'card-buttons' => $buttons
            ] = $card;
            $content = '<span>' . implode('</span><br /><span>', explode("\n", $content)) . '</span>';
            
            $_buttons = '';
            foreach ($buttons as $button) {
                [
                    'url' => $url,
                    'label' => $label
                ] = $button;
                $_buttons .= "<a href=\"{$url}\" class=\"card-link\">{$label}</a>";
            }

            $cards .= <<<HTML
                <div class="col-12 col-md col-xl-4 mt-2">
                    <section class="card" style="height: 100%">
                        <div class="card-body">
                            <h5 class="card-title">{$title}</h5>
                            <p class="card-text">{$content}</p>
                            {$_buttons}
                        </div>
                    </section>
                </div>
            HTML;
        }
        $cards .= "</div>";
        
        return $cards;
    }
}