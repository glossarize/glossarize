<?php

namespace Javanile\Glossar;

class Check
{
    /**
     *
     */
    protected $source;

    /**
     *
     */
    protected $options;

    /**
     * Config constructor.
     *
     * @param $config
     */
    public function __construct($source, $options)
    {
        $this->source = $source;
        $this->options = $options;
    }

    /**
     *
     */
    public function execute($vars = [])
    {
        $this->source->setVars($vars);

        if (is_callable($this->options)) {
            call_user_func_array($this->options, [$this->source]);
        } else {
            die("Check options are not callable");
        }
    }
}