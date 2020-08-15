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
        Voyager::addTranslations('tiptap', include(__DIR__.'/../resources/lang.php'));
    }

    public function register()
    {
        //
    }
}