<?php
namespace Parser\Classes;
/**
 * @author SimonProud
 * @license none
 * @version 0.1
 */

class Page implements \Parser\Interfaces\PageInterface
{
    private $code;
    public  $tags;
    private $nullTags = [];
    private $pattern = '/(?<=<)[^<]+(?=>)/';

    public function __construct($code)
    {
        $this->code = $code;
        $this->parseTags();
    }

    public function parseTags(){

        $this->tags = new TagsCollection();

        preg_match_all($this->pattern, $this->code, $this->nullTags);

        foreach ($this->nullTags[0] as $tag){

            if(substr($tag,0,1) != '/'){
                $temptag = explode(' ', $tag);
                $name =  preg_replace("/[^A-Za-z0-9]/",'',$temptag[0]);
                $tagob = new Tag($name);

            }
            if(substr($tag, -1, 1) == '/' && $tag instanceof Tag){
                $tagob->selfclosed = true;
            }

            if($tagob instanceof Tag){
                $this->tags->addItem($tagob);
            }
        }

    }

    public function getTags()
    {
        return $this->tags;
    }

}