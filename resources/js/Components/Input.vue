<script setup>
defineProps({
	placeholder:{
		type:String,
		default:'',
	},
	type:{
		type:String,
		default:'text',
	},
})
</script>

<template>
	<input class="bg-gray-200 appearance-none border-2
	border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
				 :type="type"
				 :placeholder="placeholder">
</template>

