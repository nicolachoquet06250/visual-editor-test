<?php

namespace ve\drawers;

use ve\helpers\Drawer;

class TariffCartridge extends Drawer {
    private array $colors = [
        '#555' => 'gray',
        '#78b41e' => 'green',
        '#a50f78' => 'purple'
    ];

    public function draw(): string {
        [
            'cartridge-color' => $color,
            'title' => $title,
            'phone-number' => $phone,
            'describe' => $describe,
            'complement-infos' => $complement_infos,
            '_name' => $name
        ] = $this->component;

        return <<<HTML
            <div class="row">
                <div class="col">
                    <div class="ob1-tariff-cartridge {$this->colors[$color]}">
                        <span class="ob1-tariff-cartridge-label">
                            {$title}
                        </span>

                        <div class="ob1-tariff-cartridge-global-container">
                            <div class="ob1-tariff-cartridge-container">
                                <div class="ob1-tariff-cartridge-call-number">{$phone}</div>

                                <div class="ob1-tariff-cartridge-call-description">
                                    {$describe}
                                </div>
                            </div>

                            <div class="ob1-tariff-cartridge-asterisk">(*)</div>
                        </div>

                        <p class="ob1-tariff-cartridge-description">
                            {$complement_infos}
                        </p>
                    </div>
                </div>
            </div>
        HTML;
    }
}