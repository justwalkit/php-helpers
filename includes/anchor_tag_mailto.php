<?php
/**
 * mailto function
 * 
 * @since     1.0.0
 */

function mailto($email, $text, $title, $extras) //1
{
    $link = '<a href=\"mailto:' . $email; //2
    $link = str_rot13($link); //3

    $data = '<script type="text/javascript">document.write("'; //4
    $data .= $link; //5
    $data .= '".replace(/[a-zA-Z]/g, function(c){return String.fromCharCode((c<="Z"?90:122)>=(c=c.charCodeAt(0)+13)?c:c-26);}));
</script>';
    $data .= '"';

    if ($title) //6
    {
        $data .= ' title="' . $title . '"';
    }
    else
    {
        $data .= ' title="' . $text . '"';
    }

    if (is_array($extras))
    {
        foreach($extras as $rule)
        {
            $data .= parse_extras($rule);
        }
    }

    if (is_string($extras))
    {
        $data .= parse_extras($extras);
    }
    $data .= ">";

    $data .= $text;
    $data .= "</a>"; //7
    return $data; //8
}