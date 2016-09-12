<?php
/**
 * anchor_tag_extras function
 *
 * @since     1.0.0
 */

function anchor_tag_extras($rule){
    if ($rule[0] == "#"){
        $id = substr($rule,1,strlen($rule)); //2
        $data = ' id="' . $id . '"'; //3
        return $data;
    }

    if ($rule[0] == "."){
        $class = substr($rule,1,strlen($rule));
        $data = ' class="' . $class . '"';
        return $data;
    }

    if ($rule[0] == "_"){
        $data = ' target="' . $rule . '"';
        return $data;
    }
}