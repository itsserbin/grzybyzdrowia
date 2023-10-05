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
	<div class="text-center mb-[20px]">
			<h2 class="max-md:text-[2.6em] lg:text-[3.6em] font-semibold">{{ main_title }}</h2>
			<p class="text-lg" v-html="second_title"></p>
	</div>
</template>
