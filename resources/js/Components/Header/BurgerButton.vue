<script setup>
import { defineProps } from 'vue';

const props = defineProps({
	isOpen: {
		type: Boolean,
		default: false,
	},
});
</script>

<template>
	<button type="button" class="z-10 text-gray-100 hover:text-gray-400 focus:outline-none focus:text-gray-400">
		<span :class="{'top-bar': true, 'open': props.isOpen}" class="burger-line"></span>
		<span :class="{'middle-bar': true, 'open': props.isOpen}" class="burger-line"></span>
		<span :class="{'bottom-bar': true, 'open': props.isOpen}" class="burger-line"></span>
	</button>
</template>

<style scoped>
.burger-line {
	background-color: #333;
	display: block;
	height: 4px;
	margin: 4px 0;
	width: 25px;
	border-radius: 9px;
	transition: transform 0.3s ease, opacity 0.3s ease, margin 0.3s ease;
}

.top-bar.open {
	transform: rotate(45deg) translate(6px, 6px);
}

.middle-bar.open {
	opacity: 0;
	margin: 0;
}

.bottom-bar.open {
	transform: rotate(-45deg) translate(5px, -5px);
}
</style>
