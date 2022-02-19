<?php

namespace ve\drawers;

use ve\helpers\Drawer;

class SearchNavBar extends Drawer {
    private function currentPageAttribute($label) {
        return ($_GET['page'] ?? 'Home') === $label ? 'aria-current="page"' : '';
    }

    private function currentPageClass($label) {
        return ($_GET['page'] ?? 'Home') === $label ? ' active' : '';
    }

    private function getTheme(string $color): array {
        switch ($color) {
            case '#CCCCCC':
                $btnMode = 'success';
                $mode = 'light';
                break;
            case 'black':
                $btnMode = 'secondary';
                $mode = 'dark';
                break;
            case 'white':
                $btnMode = 'secondary';
                $mode = 'white';
                break;
            default:
                $btnMode = 'secondary';
                $mode = 'auto';
        }

        return [
            'btnMode' => $btnMode,
            'mode' => $mode
        ];
    }

    private function getScript(string $mode): string {
        $script = '';
        if ($mode === 'auto') {
            $script = <<<HTML
                <script defer async>
                    window.addEventListener('load', () => {
                        const elemToObserve = document.querySelector('html');
                        console.log(elemToObserve)
                        let prevClassState = elemToObserve.classList.contains('dark');

                        const observer = new MutationObserver(mutations => {
                            mutations.forEach(mutation => {
                                if(mutation.attributeName == "class"){
                                    const currentClassState = mutation.target.classList.contains('dark');
                                    
                                    if (prevClassState !== currentClassState)    {
                                        prevClassState = currentClassState;

                                        if (currentClassState) {
                                            console.log("dark mode enabled");

                                            document.querySelector('#navbar-{$mode}-{$id}').parentElement.parentElement.classList.remove('navbar-white');
                                            document.querySelector('#navbar-{$mode}-{$id}').parentElement.parentElement.classList.remove('bg-white');

                                            document.querySelector('#navbar-{$mode}-{$id}').parentElement.parentElement.classList.add('navbar-dark');
                                            document.querySelector('#navbar-{$mode}-{$id}').parentElement.parentElement.classList.add('bg-dark');
                                        } else {
                                            console.log("dark mode disabled");
                                            
                                            document.querySelector('#navbar-{$mode}-{$id}').parentElement.parentElement.classList.remove('navbar-dark');
                                            document.querySelector('#navbar-{$mode}-{$id}').parentElement.parentElement.classList.remove('bg-dark');

                                            document.querySelector('#navbar-{$mode}-{$id}').parentElement.parentElement.classList.add('navbar-white');
                                            document.querySelector('#navbar-{$mode}-{$id}').parentElement.parentElement.classList.add('bg-white');
                                        }
                                    }
                                }
                            });
                        });

                        observer.observe(elemToObserve, { attributes: true });
                    });
                </script>
            HTML;
        }

        return $script;
    }

    public function draw(): string {
        [
            'logo' => $logo,
            'links' => $links,
            'mode-color' => $color,
            'opened' => $defaultOpened
        ] = $this->component;
        $preview = $this->component['preview'] ?? false;

        $str_links = '';

        foreach ($links as $link) {
            [
                'label' => $label,
                'url' => $url
            ] = $link;

            $currentPageAttribute = $this->currentPageAttribute($label);
            $currentPageClass = $this->currentPageClass($label);

            $str_links .= "
            <li class=\"nav-item\">
                <a  class=\"nav-link{$currentPageClass}\" 
                    {$currentPageAttribute}
                    href=\"{$url}\">{$label}</a>
            </li>
            ";
        }

        [
            'btnMode' => $btnMode,
            'mode' => $mode
        ] = $this->getTheme($color);

        $id = uniqid();

        $menuTogglerClassOpenedInMobile = $preview && $defaultOpened ? '' : ' collapsed';
        $menuNavbarClassOpenedInMobile = $preview && $defaultOpened ? ' show' : '';

        return <<<HTML
            {$this->getScript($mode)}

            <nav class="navbar navbar-expand-lg navbar-{$mode} bg-{$mode}">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="{$logo}" 
                             role="img" alt="logo" loading="lazy" 
                             width="50" height="50">
                    </a>

                    <button class="navbar-toggler{$menuTogglerClassOpenedInMobile}" type="button" 
                            data-bs-toggle="collapse" 
                            data-bs-target="#navbar-{$mode}-{$id}" 
                            aria-controls="navbar-{$mode}-{$id}" 
                            aria-expanded="false" 
                            aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="navbar-collapse collapse{$menuNavbarClassOpenedInMobile}" 
                         id="navbar-{$mode}-{$id}">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            {$str_links}
                        </ul>

                        <form class="d-flex">
                            <input  class="form-control me-2" type="search" 
                                    placeholder="Search" aria-label="Search">

                            <button class="btn btn-{$btnMode}" type="submit">
                                Search
                            </button>
                        </form>
                    </div>
                </div>
            </nav>
        HTML;
    }
}