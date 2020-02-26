<?php


namespace Parser\Classes;
use Parser\Exceptions\UrlException;
use Parser\Interfaces\Source;


class HTTPRequest implements Source
{
    private $url;
    private $code;

    public function __construct($url)
    {
        if (filter_var($url, FILTER_VALIDATE_URL)) {
            $this->url = $url;
            $this->code = file_get_contents($this->url);
        }else{
            throw new UrlException();
        }
    }

    /**
     * @return false|string
     */
    public function getHTML()
    {
        return $this->code;
    }

    /**
     * @return mixed
     */
    public function getSource()
    {
        return $this->url;
    }

}