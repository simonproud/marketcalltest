<?php
namespace Parser\Classes;
/**
 * @author SimonProud
 * @license none
 * @version 0.1
 */

class Tag
{

    /**
     * The name of the tag.
     *
     * @var string
     */
    public $name;


    /**
     * The attributes of the tag.
     *
     * @var array
     */
    protected $attr = [];

    /**
     * Is this tag self closing. />
     *
     * @var bool
     */
    protected $selfClosing = false;

    /**
     * Sets up the tag with a name.
     *
     * @param $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @param string $key
     * @return mixed
     */
    public function __get($key)
    {
        return $this->getAttribute($key);
    }

    /**
     * @param string $key
     * @param mixed $value
     */
    public function __set($key, $value)
    {
        $this->setAttribute($key, $value);
    }

    /**
     * Returns the name of this tag.
     *
     * @return string
     */
    public function name(): string
    {
        return $this->name;
    }

    /**
     * Set an attribute for this tag.
     *
     * @param string $key
     * @param string|array $value
     * @return Tag
     */
    public function setAttribute(string $key, $value): Tag
    {
        $key = strtolower($key);

        $this->attr[$key] = $value;

        return $this;
    }

    /**
     * Returns an attribute by the key
     *
     * @param string $key
     * @return array
     */
    public function getAttribute(string $key):array
    {
        return $this->attr[$key];
    }

    /**
     * Returns TRUE if Tag has attribute
     *
     * @param string $key
     * @return bool
     */
    public function hasAttribute(string $key)
    {
        return isset($this->attr[$key]);
    }

}