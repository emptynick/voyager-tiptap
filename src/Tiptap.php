<?php

namespace Emptynick\Tiptap;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Illuminate\View\View;
use Voyager\Admin\Facades\Voyager;
use Voyager\Admin\Classes\Formfield;
use Voyager\Admin\Contracts\Plugins\FormfieldPlugin;

class Tiptap implements FormfieldPlugin
{
    public $name = 'Tiptap';
    public $description = 'Tiptap WYSIWYG editor for Voyager II';
    public $repository = 'emptynick/voyager-tiptap';
    public $website = 'https://github.com/emptynick/voyager-tiptap';
    public $version = '1.0.0';

    public function getInstructionsView(): ?View
    {
        return null;
    }

    public function registerProtectedRoutes()
    {
        //
    }

    public function registerPublicRoutes()
    {
        Route::get('tiptap.js', function () {
            $path = realpath(dirname(__DIR__, 1).'/resources/dist/tiptap.js');
            $response = response(File::get($path), 200, ['Content-Type' => 'text/javascript']);
            $response->setSharedMaxAge(31536000);
            $response->setMaxAge(31536000);
            $response->setExpires(new \DateTime('+1 year'));

            return $response;
        })->name('voyager-tiptap');
    }

    public function getSettingsView(): ?View
    {
        return null;
    }

    public function getCssRoutes(): array
    {
        return [];
    }

    public function getJsRoutes(): array
    {
        return [
            Voyager::route('voyager-tiptap')
        ];
    }

    public function getFormfield(): Formfield
    {
        return new TiptapFormfield();
    }
}
