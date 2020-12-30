<?php

namespace Emptynick\Tiptap;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Illuminate\View\View;
use Voyager\Admin\Contracts\Formfields\Formfield;
use Voyager\Admin\Contracts\Plugins\FormfieldPlugin;

class Tiptap implements FormfieldPlugin
{
    public $name = 'Tiptap';
    public $description = 'Tiptap WYSIWYG editor for Voyager II';
    public $repository = 'emptynick/voyager-tiptap';
    public $website = 'https://github.com/emptynick/voyager-tiptap';
    public $version = '1.0.0';

    public function provideJS(): string
    {
        return file_get_contents(realpath(dirname(__DIR__, 1).'/resources/dist/tiptap.js'));
    }

    public function getFormfield(): Formfield
    {
        return new TiptapFormfield();
    }
}
