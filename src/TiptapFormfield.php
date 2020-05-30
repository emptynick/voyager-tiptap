<?php

namespace Emptynick\Tiptap;

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

    public function listOptions(): array
    {
        return [
            'display_length'    => 50,
        ];
    }

    public function viewOptions(): array
    {
        return [
            'as_json'       => false,
            'ul'            => true,
            'heading'       => true,
            'hr'            => true,
            'ol'            => true,
            'bold'          => true,
            'code'          => true,
            'italic'        => true,
            'strike'        => true,
            'underline'     => true,
            'history'       => true,
        ];
    }

    public function browse($input)
    {
        return strip_tags($input);
    }
}