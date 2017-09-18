<?php

if (!function_exists('features')) {
    /**
     * Get features class instance.
     *
     * @return \Frozzare\Features\Features
     */
    function features()
    {
        return \Frozzare\Features\Features::instance();
    }
}
