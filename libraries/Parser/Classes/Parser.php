<?php
namespace Parser\Classes;


use Parser\Interfaces\ParserInterface;
use Parser\Interfaces\Source;

class Parser implements ParserInterface
{
    private $url = '';

    public $page;

    private $stats = [];

    public function __construct(Source $source)
    {
        $this->page = new Page($source->getHTML());
        $this->stats = [
            'source' => $source->getSource(),
            'countByName' => $this->page->tags->countTagsByName()
        ];
    }

    public function getStats(){
        return $this->stats;
    }
    public function setUrl($url)
    {
        self::__construct($url);
    }

}