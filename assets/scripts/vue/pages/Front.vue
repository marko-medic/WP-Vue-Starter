<template>
  <div>
    <h3 @click="hello">Front page content!</h3>
    <v-info />
    <slot></slot>
  </div>
</template>

<script lang="ts">
import vInfo from '../components/Info.vue';
export default {
  components: {
    vInfo,
  },
  name: 'v-front',
  data() {
    return {
      msg: 'some-message',
    };
  },
  methods: {
    hello() {
      console.log(this.msg + 'zxc');
    },
  },
};
</script>

<style scoped></style>
