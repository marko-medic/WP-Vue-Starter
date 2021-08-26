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

<script>
export default {
  name: 'v-form',
  data() {
    return {
      firstName: '',
      lastName: ''
    };
  },
  methods: {
    logMessage(e) {
      e.preventDefault();
      console.log('@log', this.firstName, this.lastName)
    }
  }
};
</script>

<style scoped>
  h3 {
    color: orange;
  }
</style>

