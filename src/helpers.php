<?php

if (!function_exists('features')) {
    /**
     * Get features class instance.
     *
     * @param  array $data
     *
     * @return \Frozzare\Features\Features
     */
    function features(array $data = [])
    {
        $features = \Frozzare\Features\Features::instance($data);

        if (!empty($data)) {
            $features->setData($data);
        }

        return $features;
    }
}
