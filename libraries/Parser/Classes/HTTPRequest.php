<?php
namespace Parser\Classes;
/**
 * @author SimonProud
 * @license none
 * @version 0.1
 */

use Parser\Exceptions\UrlException;
use Parser\Interfaces\Source;


class HTTPRequest implements Source
{
    /**
     * Must have URL string
     * @var $url
     */
    private $url;
    /**
     * This var have result of file_get_contents function. Must have only HTML code.
     * @var $code
     */
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