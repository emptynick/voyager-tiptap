<template>
    <div>
        <tiptap
            :as-json="options.as_json"
            :ul="options.ul"
            :heading="options.heading"
            :hr="options.hr"
            :ol="options.ol"
            :bold="options.bold"
            :code="options.code"
            :italic="options.italic"
            :strike="options.strike"
            :underline="options.underline"
            :history="options.history"
            v-bind:value="value"
            @input="$emit('input', $event)" />
    </div>
</template>

<script>
export default {
    props: ['options', 'value'],
};
</script>