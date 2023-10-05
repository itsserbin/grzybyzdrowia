<script setup>
const state = defineProps({
	for:{
		type:String,
		default:'',
	}
})
</script>

<template>
	<label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" :for="state.for">
		<slot/>
	</label>
</template>

