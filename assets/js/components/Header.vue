<template>
  <header>Hello {{ content }}!</header>
</template>

<script>
export default {
  name: 'v-header',
  props: ['content'],
  data() {
    return {};
  },
  created() {
    console.log('@created');
  },
};
</script>

<style scoped>
header {
  background-color: #eee;
}
</style>

