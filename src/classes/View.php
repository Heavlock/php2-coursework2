<?php

namespace App;

class View implements Renderable
{
    public string $tempName;
    public array $pageData;

    public function __construct($tempName, $pageData)
    {
        $this->tempName = $tempName;
        $this->pageData = $pageData;
    }

    public function render()
    {
        $pageData = $this->pageData;
        require_once VIEW_DIR . 'header.php';
        if (file_exists(VIEW_DIR . $this->tempName . '.php')) {
            require_once VIEW_DIR . $this->tempName . '.php';
        }
        require_once VIEW_DIR . 'footer.php';
//        return [VIEW_DIR . $this->tempName . '.php', $this->pageData];
    }
}