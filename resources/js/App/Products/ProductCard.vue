<script setup>
const state = defineProps({
	product: {
		type: Object,
		default: {},
	}
});
</script>

<template>
	<article v-if="state.product.availability" class="border-4 bg-[#FFFFFF] border-[#FFFFFF] overflow-hidden shadow-md m-auto rounded-[10px] w-full max-w-xl">
		<!-- Изображение товара -->
		<img :src=" + '/storage/' + state.product.img" :alt="state.product.name" class="w-full object-cover transition hover:transform hover:scale-105 aspect-w-16 aspect-h-9">
		<div class="p-4">
			<!-- Название товара -->
			<h2 class="font-semibold text-xl mb-2">{{ state.product.name + ' ' + state.product.weight + 'г' }}</h2>
		</div>
	</article>
</template>
