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

};
</script>

<style scoped>
header {
  background-color: lightblue;
  padding: 2rem;
}
</style>

