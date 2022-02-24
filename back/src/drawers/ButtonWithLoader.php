<?php

namespace ve\drawers;

use ve\helpers\Drawer;

class ButtonWithLoader extends Drawer {
    public bool $spinnerShow;
    public string $spinnerLabel;

    public string $ajaxUrl;
    public string $ajaxMethod;
    public array $ajaxHeaders;
    public array $ajaxBody;

    public string $ajaxStatusKey;
    public string $ajaxStatusOkValue;

    public string $buttonLabel;
    public string $buttonType;
    public string $buttonSize;
    public bool $buttonOutline;

    public bool $showFinalButton;
    public bool $preview = false;

    protected final function showFinalButton(): bool {
        return $this->preview && $this->showFinalButton;
    }

    public function style(): string {
        return <<<CSS
            .spinner-border.show-label {
                margin-right: 15px;
            }
        CSS;
    }

    protected function getButtonTemplate(): string {
        $outlineClass = $this->buttonOutline ? ' btn-no-outline' : '';

        return <<<HTML
            <button type="button" 
                    class="btn btn-{$this->buttonType}{$outlineClass} {$this->buttonSize}">
                {$this->buttonLabel}
            </button>
        HTML;
    }

    protected function getLoadingButtonTemplate(): string {
        if ($this->spinnerShow) {
            return <<<HTML
                <div class="row" id="button-spinner-{$this->id}-container">
                    <div class="col-12">
                        <button id="spinner-{$this->id}" class="btn btn-primary" 
                                type="button" disabled>
                            <span class="spinner-border spinner-border-sm show-label" 
                                role="status" aria-hidden="true"></span>
                            
                            {$this->spinnerLabel}
                        </button>
                    </div>
                </div>
            HTML . "<script>{$this->getScript()}</script>";
        } else {
            return <<<HTML
                <div class="row" id="button-spinner-{$this->id}-container">
                    <div class="col-12">
                        <button id="spinner-{$this->id}" class="btn btn-primary" 
                                type="button" disabled>
                            <span class="spinner-border spinner-border-sm" 
                                role="status" aria-hidden="true"></span>

                            <span class="visually-hidden">
                                {$this->spinnerLabel}
                            </span>
                        </button>
                    </div>
                </div>
            HTML . "<script>{$this->getScript()}</script>";
        }
    }

    public function getScript(): string {
        $headers = array_reduce($this->ajaxHeaders, function($r, $c) {
            return [
                ...$r,
                $c['key'] => $c['value']
            ];
        }, []);
        $body = array_reduce($this->ajaxBody, function($r, $c) {
            return [
                ...$r,
                $c['key'] => $c['value']
            ];
        }, []);

        $headers = json_encode($this->ajaxHeaders);
        $body = "body: '" . json_encode($this->ajaxBody) . "'";

        if (strtolower($this->ajaxMethod) === 'get') {
            $body = '';
        }
        
        return <<<JS
            window.addEventListener('load', () => {
                fetch('{$this->ajaxUrl}', {
                    method: '{$this->ajaxMethod}',
                    headers: JSON.parse('{$headers}'),
                    {$body}
                }).then(r => r.json())
                .then(json => {
                    if (json.{$this->ajaxStatusKey} && json.{$this->ajaxStatusKey} === '{$this->ajaxStatusOkValue}') {
                        document.querySelector('#button-spinner-{$this->id}-container .col-12').innerHTML = `
                            {$this->getButtonTemplate()}
                        `;
                    }
                })
            });
        JS;
    }

    public function draw(): string {
        if ($this->showFinalButton()) {
            return <<<HTML
                <div class="row" id="button-spinner-{$this->id}-container">
                    <div class="col-12">
                        {$this->getButtonTemplate()}
                    </div>
                </div>
            HTML;
        } else {
            return $this->getLoadingButtonTemplate();
            
        }
    }
}