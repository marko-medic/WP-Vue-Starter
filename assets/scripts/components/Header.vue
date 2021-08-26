<template>
  <header>Hello {{content}} {{ title }}!</header>
</template>

<script>
export default {
  name: 'v-header',
  props: ['content'],
  data() {
    return {title: "Again"};
  },

};
</script>

<style scoped>
header {
  background-color: green;
  color: white;
  padding: 2rem;
}
</style>

 