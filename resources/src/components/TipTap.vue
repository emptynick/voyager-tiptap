<template>
    <div class="tiptap input cursor-text" @click="editor.focus()">
        <editor-menu-bar :editor="editor" v-slot="{ commands, isActive }">
            <div class="button-group">
                <button v-if="bold" class="button font-bold small icon-only" :class="[isActive.bold() ? 'accent' : null]" @click="commands.bold" v-tooltip="__('voyager::tiptap.bold')">
                    B
                </button>
                <button v-if="italic" class="button italic small icon-only" :class="[isActive.italic() ? 'accent' : null]" @click="commands.italic" v-tooltip="__('voyager::tiptap.italic')">
                    I
                </button>
                <button v-if="strike" class="button line-through small icon-only" :class="[isActive.strike() ? 'accent' : null]" @click="commands.strike" v-tooltip="__('voyager::tiptap.strike')">
                    S
                </button>
                <button v-if="underline" class="button underline small icon-only" :class="[isActive.underline() ? 'accent' : null]" @click="commands.underline" v-tooltip="__('voyager::tiptap.underline')">
                    U
                </button>
                <button v-if="code" class="button small icon-only" :class="[isActive.code() ? 'accent' : null]" @click="commands.code" v-tooltip="__('voyager::tiptap.code')">
                    <icon icon="code" :size="5"></icon>
                </button>
                <button class="button small icon-only" :class="[isActive.paragraph() ? 'accent' : null]" @click="commands.paragraph" v-tooltip="__('voyager::tiptap.paragraph')">
                    P
                </button>
                <button v-if="ul" class="button small icon-only" :class="[isActive.bullet_list() ? 'accent' : null]" @click="commands.bullet_list" v-tooltip="__('voyager::tiptap.bullet_list')">
                    UL
                </button>
                <button v-if="ol" class="button small icon-only" :class="[isActive.ordered_list() ? 'accent' : null]" @click="commands.ordered_list" v-tooltip="__('voyager::tiptap.ordered_list')">
                    OL
                </button>
                <button v-if="hr" class="button small icon-only" :class="[isActive.horizontal_rule() ? 'accent' : null]" @click="commands.horizontal_rule" v-tooltip="__('voyager::tiptap.horizontal_rule')">
                    HR
                </button>
                <button v-if="heading" class="button small icon-only" :class="[isActive.heading({ level: 1 }) ? 'accent' : null]" @click="commands.heading({ level: 1 })" v-tooltip="__('voyager::tiptap.heading_1')">
                    H1
                </button>
                <button v-if="heading" class="button small icon-only" :class="[isActive.heading({ level: 2 }) ? 'accent' : null]" @click="commands.heading({ level: 2 })" v-tooltip="__('voyager::tiptap.heading_2')">
                    H2
                </button>
                <button v-if="heading" class="button small icon-only" :class="[isActive.heading({ level: 3 }) ? 'accent' : null]" @click="commands.heading({ level: 3 })" v-tooltip="__('voyager::tiptap.heading_3')">
                    H3
                </button>
                <button v-if="history" class="button small icon-only" @click="commands.undo" v-tooltip="__('voyager::tiptap.undo')">
                    &lt;
                </button>
                <button v-if="history" class="button small icon-only" @click="commands.redo" v-tooltip="__('voyager::tiptap.redo')">
                    &gt;
                </button>
            </div>
        </editor-menu-bar>

        <editor-content class="content mt-2" spellcheck="false" :editor="editor" />
    </div>
</template>
<script>
// https://github.com/scrumpy/tiptap
import { Editor, EditorContent, EditorMenuBar } from 'tiptap';
import {
    Heading,
    HorizontalRule,
    OrderedList,
    BulletList,
    ListItem,
    Bold,
    Code,
    Italic,
    Strike,
    Underline,
    History
} from 'tiptap-extensions';

export default {
    props: {
        value: {
            type: String,
            default: '',
        },
        ul: {
            type: Boolean,
            default: true,
        },
        heading: {
            type: Boolean,
            default: true,
        },
        hr: {
            type: Boolean,
            default: true,
        },
        ol: {
            type: Boolean,
            default: true,
        },
        bold: {
            type: Boolean,
            default: true,
        },
        code: {
            type: Boolean,
            default: true,
        },
        italic: {
            type: Boolean,
            default: true,
        },
        strike: {
            type: Boolean,
            default: true,
        },
        underline: {
            type: Boolean,
            default: true,
        },
        history: {
            type: Boolean,
            default: true,
        },
        asJson: {
            type: Boolean,
            default: false,
        }
    },
    components: {
        EditorContent,
        EditorMenuBar
    },
    data: function() {
        var vm = this;
        return {
            editor: new Editor({
                extensions: [
                    new BulletList(),
                    new Heading({ levels: [1, 2, 3] }),
                    new HorizontalRule(),
                    new ListItem(),
                    new OrderedList(),
                    new Bold(),
                    new Code(),
                    new Italic(),
                    new Strike(),
                    new Underline(),
                    new History()
                ],
                content: vm.value,
                onUpdate: function ({ getHTML, getJSON }) {
                    if (vm.asJson) {
                        vm.$emit('input', getJSON());
                    } else {
                        vm.$emit('input', getHTML());
                    }
                },
                parseOptions: {
                    preserveWhitespace: true,
                }
            })
        };
    },
    watch: {
        value: function (value) {
            this.editor.setContent(value);
        }
    },
    beforeDestroy: function () {
        this.editor.destroy();
    }
};
</script>

<style lang="scss" scoped>
.tiptap {
    .content {
        min-height: 16rem;
    }
}
</style>

<style lang="scss">
.ProseMirror {
    height: 100%;
    width: 100%;
    &:focus {
        outline: none !important;
    }

    li > p:first-child {
        display: inline;
    }
}
</style>