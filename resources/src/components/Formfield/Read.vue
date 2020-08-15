<template>
    <div v-html="translate(data, !translatable)" class="tiptap">
    </div>
</template>

<script>
export default {
    props: ['options', 'data', 'translatable'],
};
</script>

<style lang="scss">
.tiptap {
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