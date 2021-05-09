<?php

namespace Emptynick\Tiptap;

use Illuminate\Support\Str;
use Voyager\Admin\Classes\Formfield;

class TiptapFormfield extends Formfield
{
    public function type(): string
    {
        return 'tiptap';
    }

    public function name(): string
    {
        return 'Tiptap';
    }

    public function browse($input)
    {
        return Str::limit(strip_tags($input), $this->options->display_length ?? 150);
    }

    public function getComponentName(): string {
        return 'tiptap-formfield';
    }

    public function getBuilderComponentName(): string {
        return 'tiptap-builder';
    }
}