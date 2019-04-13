<?php

class content{
    var $vars = array();
    var $content;

    function set($name, $value){
        $this->vars[$name] = $value;
    }

    function outputContent($phtml){
        $this->content = file_get_contents($phtml);
        foreach( $this->vars as $key=>$value){
            $this->content = str_replace($key, $value, $this->content);
        }

        print $this->content;
    }    
}

$content = new content();
?>