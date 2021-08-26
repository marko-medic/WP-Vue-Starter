<template>
  <header>Hello {{content}} {{ title }}!</header>
</template>

<script lang="ts">

interface IData {
  title: string
}
export default {
  name: 'v-header',
  props: ['content'],
  data(): IData {
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

 