<?php

namespace ve\drawers;

class CheckboxListGroup extends ListGroup {
    protected function getItems(): string {
        $items = '';
        foreach ($this->items as $i => $item) {
            [
                'item-color' => $color,
                'item-title' => $label,
                'item-active' => $checked,
                'item-disabled' => $disabled,

                'checkbox-value' => $value,
                'checkbox-name' => $name,

                'item-tag-content' => $itemBadgeContent,
                'item-tag-color' => $itemBadgeColor
            ] = $item;

            $name = empty(trim($name)) ? 'checkbox-' . $this->id . '-' . $i : trim($name);

            $bgColor = $this->getColor($color) === 'white' 
                ? '' : " list-group-item-{$this->getColor($color)}";

            $activeClass = $checked ? ' active' : '';
            $activeAttr = $checked ? ' aria-current="true"' : '';
            $checkboxChecked = $checked ? ' checked' : '';

            $disabledClass = $disabled ? ' disabled' : '';
            $disabledAttr = $disabled ? '  aria-disabled="true"' : '';
            $checkboxDisabled = $disabled ? ' disabled' : '';

            $hasBadge = !empty(trim($itemBadgeContent));

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
                <label for="checkbox-{$this->id}-{$i}" class="list-group-item{$activeClass}{$disabledClass}{$bgColor}{$hasBadgeClasses}"{$disabledAttr}{$activeAttr}>
                    <input id="checkbox-{$this->id}-{$i}" name="{$name}" class="form-check-input me-1" type="checkbox" value="{$value}" {$checkboxChecked}{$checkboxDisabled}>
                    
                    {$label}

                    {$badge}
                </label>
            HTML;
        }
        return $items;

        return '';
    }

    public function draw(): string {
        $flush = $this->flush ? ' list-group-flush' : '';

        return <<<HTML
            <div class="list-group{$flush} mb-2">
                {$this->getItems()}
            </div>
        HTML;
    }
}