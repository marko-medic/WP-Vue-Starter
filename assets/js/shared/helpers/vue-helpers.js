import Vue from 'vue';
import vHeader from "../../components/Header.vue"
import vFooter from "../../components/Footer.vue"
import vFront from "../../components/Front.vue"

export const loadVueComponents = (selector = "#app", extraOptions= {}) => 
	new Vue({
		el: selector,
		components: {
			vHeader,
			vFront,
			vFooter
		},
		...extraOptions
	})