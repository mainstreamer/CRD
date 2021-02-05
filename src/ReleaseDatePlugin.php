<?php

namespace Rteeom;

use Composer\Composer;
use Composer\EventDispatcher\EventSubscriberInterface;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;
use Composer\Plugin\PluginEvents;
use Composer\Plugin\PreFileDownloadEvent;


class ReleaseDatePlugin implements PluginInterface, \Composer\Plugin\Capable
{
    
    protected $composer;
    protected $io;
    
    public function activate(Composer $composer, IOInterface $io)
    {
        echo '123123';
        $this->composer = $composer;
        $this->io = $io;
        die('sksksks');
    }
    
    public function deactivate(Composer $composer, IOInterface $io)
    {
    }
    
    public function uninstall(Composer $composer, IOInterface $io)
    {
    }
    
    public static function getSubscribedEvents()
    {
        return array(
            PluginEvents::PRE_COMMAND_RUN => array(
                array('onPreCommandRun', 0)
            ),
        );
    }
    
    public function onPreCommandRun(\Composer\Plugin\PreCommandRunEvent $event)
    {
        var_dump($event);exit;
    }
    
    
    public function getCapabilities()
    {
        return array(
            'Composer\Plugin\Capability\CommandProvider' => 'CommandProvider',
        );
    }
}
