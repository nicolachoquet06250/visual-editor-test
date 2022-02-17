<?php
/**
 *  An example CORS-compliant method.  It will allow any GET, POST, or OPTIONS requests from any
 *  origin.
 *
 *  In a production environment, you probably want to be more restrictive, but this gives you
 *  the general idea of what is involved.  For the nitty-gritty low-down, read:
 *
 *  - https://developer.mozilla.org/en/HTTP_access_control
 *  - https://fetch.spec.whatwg.org/#http-cors-protocol
 *
 */
function cors() {
    
    // Allow from any origin
    if (isset($_SERVER['HTTP_ORIGIN'])) {
        // Decide if the origin in $_SERVER['HTTP_ORIGIN'] is one
        // you want to allow, and if so:
        header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
        header('Access-Control-Allow-Credentials: true');
        header('Access-Control-Max-Age: 86400');    // cache for 1 day
    }
    
    // Access-Control headers are received during OPTIONS requests
    if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
        
        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
            // may also be using PUT, PATCH, HEAD etc
            header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
        
        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
            header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
    
        exit(0);
    }
}

function dumpInVar($e) {
    ob_start();
    var_dump($e);
    $var_dump = ob_get_contents();
    ob_end_clean();
    return $var_dump;
}

class Draw {
    public static function global_style() {
        return <<<HTML
            <style>
                .row {
                    margin-top: 5px;
                    margin-bottom: 5px;
                }


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
            </style>
        HTML;
    }

    public static function header() {
        return <<<HTML
            <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
                <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c8/Orange_logo.svg/1022px-Orange_logo.svg.png" style="width: 30px; margin-right: 10px; margin-left: 10px;" />
                    <span class="fs-4">header</span>
                </a>

                <ul class="nav nav-pills">
                    <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Features</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Pricing</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">FAQs</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">About</a></li>
                </ul>
            </header>
        HTML;
    }

    public static function void() {
        return '';
    }
    
    public static function simple_card($component) {
        [
            '_id' => $component_id, 
            'title' => $title, 
            'content' => $content, 
            'buttons' => $buttons
        ] = $component;

        $_buttons = '';
        foreach ($buttons as $button) {
            [
                '_id' => $button_id,
                'url' => $url,
                'label' => $label
            ] = $button;
            $_buttons .= "<a id=\"{$button_id}\" href=\"{$url}\" class=\"card-link\">{$label}</a>";
        }

        $content = '<span>' . implode('</span><br /><span>', explode("\n", $content)) . '</span>';
    
        return <<<HTML
            <div class="row">
                <div class="col-12">
                    <div class="card" style="height: 100%">
                        <div class="card-body">
                            <h5 class="card-title">{$title}</h5>
                            <p class="card-text">{$content}</p>
                            {$_buttons}
                        </div>
                    </div>
                </div>
            </div>
        HTML;
    }

    public static function card_row($component) {
        $cards = "<div class=\"row\">";
        foreach ($component['cards'] as $card) {
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
                <div class="col-12 col-md col-xl-4">
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

    public static function accordion($component) {
        [
            '_name' => $name,
            'accordion-mode' => $mode,
            'accordion-items' => $items
        ] = $component;
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

    public static function tariff_cartridge($component) {
        $colors = [
            '#555' => 'gray',
            '#78b41e' => 'green',
            '#a50f78' => 'purple'
        ];

        [
            'cartridge-color' => $color,
            'title' => $title,
            'phone-number' => $phone,
            'describe' => $describe,
            'complement-infos' => $complement_infos,
            '_name' => $name
        ] = $component;

        return <<<HTML
            <div class="row">
                <div class="col">
                    <div class="ob1-tariff-cartridge {$colors[$color]}">
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