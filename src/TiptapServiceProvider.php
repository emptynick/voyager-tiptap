<?php

namespace Emptynick\Tiptap;

use Illuminate\Support\ServiceProvider;
use Voyager\Admin\Facades\Voyager as Voyager;
use Voyager\Admin\Manager\Plugins as PluginManager;

class TiptapServiceProvider extends ServiceProvider
{
    public function boot(PluginManager $pluginmanager)
    {
        $pluginmanager->addPlugin(\Emptynick\Tiptap\Tiptap::class);
        $this->loadTranslationsFrom(realpath(__DIR__.'/../resources/lang'), 'tiptap');
        Voyager::addTranslations('tiptap', 'tiptap');
    }

    public function register()
    {
        
    }
}