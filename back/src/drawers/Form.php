<?php

namespace ve\drawers;

use ve\helpers\Drawer;
use ve\helpers\Helper;

class Form extends Drawer
{
    private string $method;
    private string $action;
    private array $elements;

    public function __construct(
        protected array $component
    )
    {
        parent::__construct($component);

        [
            'method' => $this->method,
            'destination' => $this->action,
            'elements' => $this->elements
        ] = $component;
    }

    public function draw(): string
    {
        $dump = Helper::dumpInVar($this->component);

        $form_body = '';
        foreach ($this->elements as $element) {
            [
                'enable-textarea' => $enableTextarea,
                'textarea-label' => $textareaLabel,
                'textarea-placeholder' => $textareaPlaceholder,
                'textarea-name' => $textareaName,
                'textarea-help' => $textareaHelp,
                'textarea-required' => $textareaRequired,

                'input-required' => $inputRequired,
                'enable-input' => $enableInput,
                'input-label' => $inputLabel,
                'input-label-alignment' => $inputLabelAlign,
                'input-type' => $inputType,
                'input-placeholder' => $inputPlaceholder,
                'input-name' => $inputName,
                'input-help' => $inputHelp,

                'enable-button' => $enableButton,
                'button-type' => $buttonType,
                'button-label' => $buttonLabel,
                'button-primary' => $buttonPrimary
            ] = $element;

            if ($enableTextarea) {
                $requireAttr = $textareaRequired ? ' required="required"' : '';

                $form_body .= <<<HTML
                    <div class="form-group m-0">
                        <label for="exampleInputEmail1" class="form-label">
                            {$textareaLabel}
                        </label>
                        
                        <textarea  name="{$textareaName}" 
                                class="form-control" 
                                {$requireAttr} 
                                placeholder="{$textareaName}"></textarea>
                        
                        <div id="emailHelp" class="form-text">
                            {$textareaHelp}
                        </div>
                    </div>
                HTML;
            }

            if ($enableButton) {
                $isPrimary = $buttonPrimary ? 'primary' : 'secondary';

                $form_body .= <<<HTML
                    <div class="mt-4">
                        <button type="{$buttonType}" class="btn btn-{$isPrimary} mt-sm-0 mt-2">
                            {$buttonLabel}
                        </button>
                    </div>
                HTML;

            }

            if ($enableInput) {
                $requireAttr = $inputRequired ? ' required="required"' : '';

                $form_body .= <<<HTML
                    <div class="form-group m-0">
                        <label for="exampleInputEmail1" class="form-label">
                            {$inputLabel}
                        </label>
                        
                        <input  name="{$inputName}" 
                                type="{$inputType}" 
                                class="form-control" 
                                {$requireAttr} 
                                placeholder="{$inputPlaceholder}"/>
                        
                        <div id="emailHelp" class="form-text">
                            {$inputHelp}
                        </div>
                    </div>
                HTML;
            }
        }

        return <<<HTML
            <form class="row mb-2" action="{$this->action}" method="{$this->method}">
                <div class="col-12 col-md-6 col-xl-3">
                    {$form_body}
                </div>
            </form>
        HTML;
    }
}