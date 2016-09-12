<?php
/**
 * anchor_tag function
 *
 * $extras = array('#special_id','.special_class','_blank');
 * echo anchor('new-page.php','New Page','Custom Title Message!',$extras);
 * 
 * @since     1.0.0
 */

function anchor($link, $text, $title, $extras){
    $domain = get_domain();
    $link = $domain . $link;
    $data = '<a href="' . $link . '"';

    if ($title) {
        $data .= ' title="' . $title . '"';
    } else {
        $data .= ' title="' . $text . '"';
    }

    if (is_array($extras)){
        foreach($extras as $rule){
            $data .= anchor_tag_extras($rule);
        }
    }

    if (is_string($extras)){
        $data .= anchor_tag_extras($extras);
    }

    $data .= '>';
    $data .= $text;
    $data .= "</a>";

    return $data;
}