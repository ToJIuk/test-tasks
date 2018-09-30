<?php

namespace Strategy;


use Strategy\Interfaces\PluginInterface;

class Strategy
{
    private $plugin;

    public function __construct(PluginInterface $plugin)
    {
        $this->plugin = $plugin;
    }

    public function setPlugin(PluginInterface $plugin)
    {
        $this->plugin = $plugin;
    }

    public function renderBlock()
    {
        $this->plugin->render();
    }
}
