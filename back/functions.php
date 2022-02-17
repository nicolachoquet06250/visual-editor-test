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
    
    public static function hero($component) {
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
                'type' => $type,
                'label' => $label
            ] = $button;
            $_buttons .= "<a id=\"{$button_id}\" href=\"{$url}\" class=\"card-link\">{$label}</a>";
        }

        $content = '<span>' . implode('</span><br /><span>', explode("\n", $content)) . '</span>';
    
        return <<<HTML
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{$title}</h5>
                    <p class="card-text">{$content}</p>
                    {$_buttons}
                </div>
            </div>
        HTML;
    }
}