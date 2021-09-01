<template>
 <div>
  <h3>Contact form</h3>
	<form @submit="logMessage" action="">
		<input type="text" placeholder="First Name" v-model="firstName">
		<input type="text" placeholder="Last Name" v-model="lastName">
		<button type="submit">Click</button>
	</form>
 </div>
</template>

<script lang="ts">
  interface IData {
    firstName: string;
    lastName: string
  }
export default {
  name: 'v-form',
  data(): IData { 
    return {
      firstName: '',
      lastName: ''
    };
  },
  methods: {
    logMessage(e: Event) {
      e.preventDefault();
      console.log('@log', this)
    }
  }
};
</script>

<style scoped>
  h3 {
    color: orange;
  }
</style>

