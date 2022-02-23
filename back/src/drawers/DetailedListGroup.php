<?php

namespace ve\drawers;

class DetailedListGroup extends ListGroup {
    protected function getItems(): string {
        $items = '';
        foreach ($this->items as $item) {
            [
                'item-color' => $color,
                'item-title' => $title,
                'item-text' => $content,
                'item-active' => $active,
                'item-disabled' => $disabled,

                'item-tag-content' => $itemBadgeContent,
                'item-tag-color' => $itemBadgeColor
            ] = $item;

            $content = str_replace('<p>', '', $content);
            $content = implode('<br />', explode('</p>', $content));

            $bgColor = $this->getColor($color) === 'white' 
                ? '' : " list-group-item-{$this->getColor($color)}";

            $activeClass = $active ? ' active' : '';
            $activeAttr = $active ? ' aria-current="true"' : '';

            $disabledClass = $disabled ? ' disabled' : '';
            $disabledAttr = $disabled ? '  aria-disabled="true"' : '';

            $hasBadge = !empty($itemBadgeContent);

            $badgeColor = $this->getColor($itemBadgeColor) === 'white' ? '' : "bg-{$this->getColor($itemBadgeColor)}";

            $itemBadgeContent = str_replace(['<p>', '</p>'], '', $itemBadgeContent);

            $badge = $hasBadge ? <<<HTML
                <span class="d-flex justify-content-end" style="flex: 1;">
                    <span class="badge {$badgeColor} rounded-pill">
                        {$itemBadgeContent}
                    </span>
                </span>
            HTML : '';

            $hasBadgeClasses = $hasBadge ? " d-flex justify-content-between align-items-start" : "";

            $items .= <<<HTML
                <li class="list-group-item{$activeClass}{$disabledClass}{$bgColor}{$hasBadgeClasses}"{$disabledAttr}{$activeAttr}>
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">
                            {$title}
                        </div>

                        {$content}
                    </div>
                    {$badge}
                </li>
            HTML;
        }
        return $items;
    }
}