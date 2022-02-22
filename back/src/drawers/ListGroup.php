<?php

namespace ve\drawers;

use ve\helpers\Drawer;
use ve\helpers\Helper;

class ListGroup extends Drawer {
    private bool $flush;
    private bool $numbered;
    private array $items;

    public function __construct(
        protected array $component
    ) {
        parent::__construct($component);

        [
            'flush' => $this->flush,
            'numbered' => $this->numbered,
            'items' => $this->items
        ] = $component;
    }

    private function getItems(): string {
        $items = '';
        foreach ($this->items as $item) {
            [
                'item-color' => $color,
                'item-text' => $label,
                'item-active' => $active,
                'item-disabled' => $disabled,

                'item-link-href' => $itemLinkHref,
                'item-link-target' => $itemLinkTarget,

                'item-button-type' => $itemButtonType,
                'item-button-action' => $itemButtonAction,

                'item-tag-content' => $itemTagContent,
                'item-tag-color' => $itemTagColor
            ] = $item;

            $bgColor = $this->getColor($color) === 'white' 
                ? '' : " list-group-item-{$this->getColor($color)}";

            $activeClass = $active ? ' active' : '';
            $activeAttr = $active ? ' aria-current="true"' : '';

            $disabledClass = $disabled ? ' disabled' : '';
            $disabledAttr = $disabled ? '  aria-disabled="true"' : '';

            $isLink = !empty($itemLinkHref);
            $isButton = !empty($itemButtonType);
            $hasBadge = !empty($itemTagContent);

            $badgeColor = $this->getColor($itemTagColor) === 'white' ? '' : "bg-{$this->getColor($itemTagColor)}";

            $itemTagContent = str_replace(['<p>', '</p>'], '', $itemTagContent);

            $badge = $hasBadge ? <<<HTML
                <span class="d-flex justify-content-end" style="flex: 1;">
                    <span class="badge {$badgeColor} rounded-pill">
                        {$itemTagContent}
                    </span>
                </span>
            HTML : '';

            $hasBadgeClasses = $hasBadge ? " d-flex justify-content-between align-items-center" : "";

            if ($isLink) {
                $items .= <<<HTML
                    <a  href="{$itemLinkHref}" 
                        class="list-group-item list-group-item-action{$activeClass}{$disabledClass}{$bgColor}{$hasBadgeClasses}"
                        {$activeAttr}
                        {$disabledAttr} target="{$itemLinkTarget}">
                        {$label}
                        {$badge}
                    </a>
                HTML;
                continue;
            } else if ($isButton) {
                $items .= <<<HTML
                    <button type="{$itemButtonType}" 
                            onclick="{$itemButtonAction}"
                            class="list-group-item list-group-item-action{$activeClass}{$disabledClass}{$bgColor}{$hasBadgeClasses}"
                            {$activeAttr}
                            {$disabledAttr}>
                        {$label}
                        {$badge}
                    </button>
                HTML;
                continue;
            }

            $items .= <<<HTML
                <li class="list-group-item{$activeClass}{$disabledClass}{$bgColor}{$hasBadgeClasses}"
                    {$activeAttr}
                    {$disabledAttr}>
                    {$label}
                    {$badge}
                </li>
            HTML;
        }
        return $items;
    }

    private function getColor(string $color): string {
        return match($color) {
            'black' => 'dark',
            'white' => 'white',
            '#FF7900' => 'primary',
            '#50BE87' => 'success',
            '#32C832' => 'success',
            '#CD3C14' => 'danger',
            '#CD3C14' => 'danger',
            '#FFD200' => 'warning',
            '#FFCC00' => 'warning',
            '#4BB4E6' => 'info',
            '#527ED8' => 'info',
            '#CCCCCC' => 'light'
        };
    }

    public function draw(): string {
        $flush = $this->flush ? ' list-group-flush' : '';
        $numbered = $this->numbered ? ' list-group-numbered' : '';

        return <<<HTML
            <ul class="list-group{$flush}{$numbered} mb-2">
                {$this->getItems()}
            </ul>
        HTML;
    }
}