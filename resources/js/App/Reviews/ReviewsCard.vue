<script setup>
const state = defineProps({
	review:{
		type:Object,
		default:[],
	}
})
</script>

<template>
	<article class="bg-[#FFFFFF] shadow-2xl rounded-[8px] p-4">
		<div class="flex gap-4 items-center max-md:items-start">
			<div>
				<img
						 :src="state.review.img"
						 :alt="state.review.name"
						 class="rounded-[50%] w-full h-full"
				>
			</div>
			<div>
				<h3 class="text-xl font-semibold">{{ state.review.name }}</h3>
				<p class="text-lg">{{ state.review.review_text }}</p>
			</div>
		</div>
	</article>
</template>

