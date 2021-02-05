<?php

namespace Rteeom;

use Composer\Composer;
use Composer\EventDispatcher\EventSubscriberInterface;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;
use Composer\Plugin\PluginEvents;
use Composer\Plugin\PreCommandRunEvent;


class ReleaseDatePlugin implements PluginInterface, \Composer\Plugin\Capable, EventSubscriberInterface
{
    
    protected $composer;
    protected $io;
    
    public function activate(Composer $composer, IOInterface $io)
    {
        $this->composer = $composer;
        $this->io = $io;
    }
    
    public function deactivate(Composer $composer, IOInterface $io)
    {
    }
    
    public function uninstall(Composer $composer, IOInterface $io)
    {
    }
    
    public static function getSubscribedEvents()
    {
        return [
            PluginEvents::PRE_COMMAND_RUN => [
                ['onPreCommandRun', 0]
            ],
        ];
    }
    
    public function onPreCommandRun(PreCommandRunEvent $event)
    {
//        echo 'CACAA';
//        var_dump($event);exit;
    }
    
    
    public function getCapabilities()
    {
        return array(
            'Composer\Plugin\Capability\CommandProvider' => 'Rteeom\CommandProvider',
        );
    }
}
