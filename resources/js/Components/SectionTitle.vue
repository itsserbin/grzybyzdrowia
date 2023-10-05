<script setup>
defineProps({
	main_title:{
		type:String,
		default:'',
	},
	second_title:{
		type:String,
		default:'',
	}
})
</script>

<template>
	<div class="text-center">
			<h2 class="text-[3.6em] font-semibold">{{ main_title }}</h2>
			<p class="text-lg">{{ second_title }}</p>
	</div>
</template>
