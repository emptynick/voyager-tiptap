<?php

namespace Emptynick\Tiptap;

use Illuminate\Support\ServiceProvider;
use Voyager\Admin\Manager\Plugins as PluginManager;

class TiptapServiceProvider extends ServiceProvider
{
    public function boot(PluginManager $pluginmanager)
    {
        $pluginmanager->addPlugin(\Emptynick\Tiptap\Tiptap::class);
    }

    public function register()
    {
        //
    }
}