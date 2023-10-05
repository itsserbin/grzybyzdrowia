<script setup>
const state = defineProps({
	num:{
		type:Number,
		default:0,
	}
})
</script>

<template>
<div>
	<div class="absolute flex justify-center items-center left-1/2
	transform -translate-x-1/2 text-white text-xl w-[65px] h-[65px]
	bg-black rounded-full max-md:w-[40px] max-md:h-[40px]">{{state.num}}</div>
</div>
</template>
