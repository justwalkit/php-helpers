<?php
/**
 * var_dump function
 *
 * @since     1.0.0
 */

function dump($var, $isHidden = false, $var_class = '') {
    if(method_exists('Kint','dump')) {
        // + modifier ignores *depth to great*, instead parses entire variable.
        +Kint::dump($var);
    } else {
        $old = ini_get('xdebug.var_display_max_depth');
        ini_set('xdebug.var_display_max_depth', 15);

        echo '<pre '.$isHidden.' class="dump '.$var_class.'">';
        var_dump($var);
        echo'</pre>';

        ini_set('xdebug.var_display_max_depth', $old);
    }
}