<?php

namespace Frozzare\Features;

class Features
{
    /**
     * Features list.
     *
     * @var array
     */
    protected $data = [];

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
     * Features constructor.
     *
     * @param  array $data
     */
    public function __constructor(array $data = [])
    {
        $this->setData($data);
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
        return isset($this->data[$key]) && $this->data[$key];
    }

    /**
     * Enable feature.
     *
     * @param  string $key
     */
    public function enable($key)
    {
        $this->data[$key] = true;
    }

    /**
     * Disable feature.
     *
     * @param  string $key
     */
    public function disable($key)
    {
        if (isset($this->data[$key])) {
            unset($this->data[$key]);
        }
    }

    /**
     * Get features data.
     *
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set features data.
     *
     * @param  array $data
     */
    public function setData(array $data = [])
    {
        $this->data = $data;
    }
}
