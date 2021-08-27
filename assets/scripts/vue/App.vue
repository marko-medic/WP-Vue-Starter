<template>
	<div class="site-content">
		<v-header />
		<h1>App</h1>
	<slot></slot>
	<v-footer :content="'@copywright'" />
	</div>
</template>

<script lang="ts">
import vHeader from "./components/Header.vue"
import vFooter from "./components/Footer.vue"
export default {
	name: "v-app",
	components: {
		vHeader,
		vFooter
	},
}
</script>

<style scoped>
	div {
		background-color: grey;
	}
</style>