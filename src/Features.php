<?php

namespace Frozzare\Features;

class Features
{
    /**
     * Features list.
     *
     * @var array
     */
    protected $features = [];

    /**
     * Features class instance.
     *
     * @var \Frozzare\Features\Features
     */
    protected static $instance;

    /**
     * Get features class instance.
     *
     * @return \Frozzare\Features\Features
     */
    public static function instance()
    {
        if (!isset(static::$instance)) {
            static::$instance = new static;
        }

        return static::$instance;
    }

    /**
     * Determine if a feature is enabled or not.
     *
     * @param  string $key
     *
     * @return bool
     */
    public function enabled($key)
    {
        return isset($this->features[$key]) && $this->features[$key];
    }

    /**
     * Enable feature.
     *
     * @param  string $key
     */
    public function enable($key)
    {
        $this->features[$key] = true;
    }

    /**
     * Disable feature.
     *
     * @param  string $key
     */
    public function disable($key)
    {
        if (isset($this->features[$key])) {
            unset($this->features[$key]);
        }
    }
}
