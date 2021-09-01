<template>
  <footer>Footer content: {{ content }}</footer>
</template>

<script lang="ts">
export default {
  name: 'v-footer',
  props: ['content'],
  data() {
    return {};
  },
};
</script>

<style scoped>
footer {
  background-color: black;
  color: white;
}
</style>

 