<template>
    <slot v-if="action == 'query'" />
    <div v-else-if="action == 'add' || action == 'edit'">
        <tiptap
            :bubbleMenu="options.bubbleMenu"
            :maxChars="options.maxChars"
            :modelValue="modelValue"
            @update:modelValue="$emit('update:modelValue', $event)"
            :bold="options.bold"
            :italic="options.italic"
            :strike="options.strike"
            :underline="options.underline"
            :code="options.code"
            :codeBlock="options.codeBlock"
            :blockquote="options.blockquote"
            :bulletList="options.bulletList"
            :orderedList="options.orderedList"
            :taskList="options.taskList"
            :heading="options.heading"
            :textAlign="options.textAlign"
            :horizontalRule="options.horizontalRule"
            :undoRedo="options.undoRedo"
        />
    </div>
    <div v-else-if="action == 'browse'">
        {{ modelValue }}
    </div>
</template>

<script>
export default {
    mixins: [voyager.formfieldMixin]
};
</script>