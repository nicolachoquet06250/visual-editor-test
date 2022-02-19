<?php

namespace ve\drawers;

use ve\helpers\Drawer;

class TariffCartridge extends Drawer {
    private array $colors = [
        '#555' => 'gray',
        '#78b41e' => 'green',
        '#a50f78' => 'purple'
    ];

    private static bool $rendered = false;

    public function style(): string {
        if (!static::$rendered) {
            static::$rendered = true;
            return <<<CSS
                /**
                 * CARTOUCHE TARIFFAIRE
                 */
                .ob1-tariff-cartridge .ob1-tariff-cartridge-global-container {
                    display: flex;
                    margin-top: 0;
                }
                .ob1-tariff-cartridge .ob1-tariff-cartridge-container {
                    display: flex;
                    align-items: center;
                    height: 44px;
                    margin-left: 0;
                    border: 1px solid #555;
                    background-color: #fff;
                }
                .ob1-tariff-cartridge
                .ob1-tariff-cartridge-container
                .ob1-tariff-cartridge-call-number {
                    display: inline-block;
                    flex: 1;
                    padding: 0 15px;
                    font-size: 30px;
                    font-weight: 700;
                    color: #555;
                }
                .ob1-tariff-cartridge
                .ob1-tariff-cartridge-container
                .ob1-tariff-cartridge-call-number
                a {
                    color: inherit;
                }
                .ob1-tariff-cartridge
                .ob1-tariff-cartridge-container
                .ob1-tariff-cartridge-call-description {
                    position: relative;
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    height: 44px;
                    font-size: 12px;
                    color: #fff;
                    background-color: #555;
                }
                .ob1-tariff-cartridge
                .ob1-tariff-cartridge-container
                .ob1-tariff-cartridge-call-description::after {
                    position: absolute;
                    top: 11px;
                    left: 0;
                    width: 0;
                    height: 0;
                    content: "";
                    border-top: 11px solid transparent;
                    border-bottom: 11px solid transparent;
                    border-left: 10px solid #fff;
                }
                .ob1-tariff-cartridge
                .ob1-tariff-cartridge-container
                .ob1-tariff-cartridge-call-description
                > p {
                    padding: 0;
                    margin: 0 9px 0 24px;
                    font-size: 14px;
                    line-height: 12px;
                }
                .ob1-tariff-cartridge .ob1-tariff-cartridge-row {
                    display: flex;
                }
                .ob1-tariff-cartridge .ob1-tariff-cartridge-asterisk {
                    margin-top: -2px;
                    margin-left: 4px;
                    font-size: 16px;
                    font-style: normal;
                    color: #555;
                }
                .ob1-tariff-cartridge .ob1-tariff-cartridge-asterisk:focus,
                .ob1-tariff-cartridge .ob1-tariff-cartridge-asterisk:hover {
                    color: #555;
                }
                .ob1-tariff-cartridge .ob1-tariff-cartridge-label {
                    padding-top: 7px;
                    padding-bottom: 10px;
                    line-height: 1.375;
                    display: flex;
                    align-items: center;
                    margin-left: 0;
                    font-weight: 700;
                    font-size: 18px;
                }
                .ob1-tariff-cartridge .ob1-tariff-cartridge-label.icon {
                    padding-bottom: 0;
                    font-size: 16px;
                    font-weight: 700;
                    margin-bottom: 8px;
                }
                .ob1-tariff-cartridge .ob1-tariff-cartridge-label.icon::before {
                    margin-right: 15px;
                    font-size: 26px;
                    font-weight: 400;
                }
                .ob1-tariff-cartridge .ob1-tariff-cartridge-label-container {
                    display: flex;
                    min-height: 50px;
                }
                .ob1-tariff-cartridge
                .ob1-tariff-cartridge-label-container
                .ob1-tariff-cartridge-label-img-container {
                    width: 50px;
                    height: 50px;
                }
                .ob1-tariff-cartridge
                .ob1-tariff-cartridge-label-container
                .ob1-tariff-cartridge-label-img-container
                img {
                    width: 100%;
                }
                .ob1-tariff-cartridge
                .ob1-tariff-cartridge-label-container
                .ob1-tariff-cartridge-label {
                    align-self: start;
                    padding-top: 0;
                    margin-top: -5px;
                    margin-left: 15px;
                }
                .ob1-tariff-cartridge
                .ob1-tariff-cartridge-label-container
                + .ob1-tariff-cartridge-global-container {
                    position: absolute;
                    top: 30px;
                    margin-left: 65px;
                }
                .ob1-tariff-cartridge
                .ob1-tariff-cartridge-label-container
                + .ob1-tariff-cartridge-global-container
                + .ob1-tariff-cartridge-description {
                    margin-top: 25px;
                    margin-left: 65px;
                }
                .ob1-tariff-cartridge .ob1-tariff-cartridge-description {
                    padding-top: 8px;
                    padding-bottom: 11px;
                    line-height: 1.5;
                    margin-left: 0;
                    font-size: 14px;
                    color: #555;
                }
                .ob1-tariff-cartridge.gray .ob1-tariff-cartridge-asterisk,
                .ob1-tariff-cartridge.gray .ob1-tariff-cartridge-asterisk:focus,
                .ob1-tariff-cartridge.gray .ob1-tariff-cartridge-asterisk:hover {
                    color: #555;
                }
                .ob1-tariff-cartridge.gray .ob1-tariff-cartridge-container {
                    border-color: #555;
                }
                .ob1-tariff-cartridge.gray
                .ob1-tariff-cartridge-container
                .ob1-tariff-cartridge-call-number {
                    color: #555;
                }
                .ob1-tariff-cartridge.gray
                .ob1-tariff-cartridge-container
                .ob1-tariff-cartridge-call-description {
                    background-color: #555;
                }
                .ob1-tariff-cartridge.gray
                .ob1-tariff-cartridge-container
                .ob1-tariff-cartridge-call-description::before {
                    color: #555;
                }
                .ob1-tariff-cartridge.purple .ob1-tariff-cartridge-asterisk,
                .ob1-tariff-cartridge.purple .ob1-tariff-cartridge-asterisk:focus,
                .ob1-tariff-cartridge.purple .ob1-tariff-cartridge-asterisk:hover {
                    color: #a50f78;
                }
                .ob1-tariff-cartridge.purple .ob1-tariff-cartridge-container {
                    border-color: #a50f78;
                }
                .ob1-tariff-cartridge.purple
                .ob1-tariff-cartridge-container
                .ob1-tariff-cartridge-call-number {
                    color: #a50f78;
                }
                .ob1-tariff-cartridge.purple
                .ob1-tariff-cartridge-container
                .ob1-tariff-cartridge-call-description {
                    background-color: #a50f78;
                }
                .ob1-tariff-cartridge.purple
                .ob1-tariff-cartridge-container
                .ob1-tariff-cartridge-call-description::before {
                    color: #a50f78;
                }
                .ob1-tariff-cartridge.green .ob1-tariff-cartridge-asterisk,
                .ob1-tariff-cartridge.purple .ob1-tariff-cartridge-asterisk:focus,
                .ob1-tariff-cartridge.purple .ob1-tariff-cartridge-asterisk:hover {
                    color: #78b41e;
                }
                .ob1-tariff-cartridge.green .ob1-tariff-cartridge-container {
                    border-color: #78b41e;
                }
                .ob1-tariff-cartridge.green
                .ob1-tariff-cartridge-container
                .ob1-tariff-cartridge-call-number {
                    color: #78b41e;
                }
                .ob1-tariff-cartridge.green
                .ob1-tariff-cartridge-container
                .ob1-tariff-cartridge-call-description {
                    background-color: #78b41e;
                }
                .ob1-tariff-cartridge.green
                .ob1-tariff-cartridge-container
                .ob1-tariff-cartridge-call-description::before {
                    color: #78b41e;
                }
                @media screen and (max-width: 450px) {
                    .ob1-tariff-cartridge .ob1-tariff-cartridge-container {
                        flex-direction: column;
                        width: 200px;
                        height: 80px;
                    }
                    .ob1-tariff-cartridge
                    .ob1-tariff-cartridge-container
                    .ob1-tariff-cartridge-call-number {
                        margin-top: 5px;
                        font-size: 20px;
                        font-weight: 500;
                    }
                    .ob1-tariff-cartridge
                    .ob1-tariff-cartridge-container
                    .ob1-tariff-cartridge-call-description {
                        width: 100%;
                        padding-top: 4px;
                        padding-bottom: 5px;
                        margin-right: -25px;
                        margin-left: -25px;
                    }
                    .ob1-tariff-cartridge
                    .ob1-tariff-cartridge-container
                    .ob1-tariff-cartridge-call-description::after {
                        top: -2px;
                        left: 5px;
                        border-top: 7px solid transparent;
                        border-bottom: 7px solid transparent;
                        transform: rotate(90deg);
                    }
                    .ob1-tariff-cartridge
                    .ob1-tariff-cartridge-container
                    .ob1-tariff-cartridge-call-description
                    > p {
                        margin-left: 18px;
                    }
                    .ob1-tariff-cartridge .ob1-tariff-cartridge-label-container {
                        height: 32px;
                        margin-left: 0;
                    }
                    .ob1-tariff-cartridge
                    .ob1-tariff-cartridge-label-container
                    .ob1-tariff-cartridge-label-img-container {
                        width: 32px;
                        height: 32px;
                    }
                    .ob1-tariff-cartridge .ob1-tariff-cartridge-label {
                        font-size: 14px;
                    }
                    .ob1-tariff-cartridge
                    .ob1-tariff-cartridge-label-container
                    .ob1-tariff-cartridge-label {
                        margin-left: 10px;
                        font-size: 16px;
                        width: calc(100% - 32px + 15px);
                    }
                    .ob1-tariff-cartridge
                    .ob1-tariff-cartridge-label-container
                    + .ob1-tariff-cartridge-global-container {
                        top: 45px;
                        margin-left: 40px;
                    }
                    .ob1-tariff-cartridge
                    .ob1-tariff-cartridge-label-container
                    + .ob1-tariff-cartridge-global-container
                    + .ob1-tariff-cartridge-description {
                        margin-top: 80px;
                        margin-left: 40px;
                    }
                }
            CSS;
        }
        return '';
    }

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