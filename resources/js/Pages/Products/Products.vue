<script setup>
import SectionTitle from "@/Components/SectionTitle.vue";
import ProductCard from "@/Pages/Products/ProductCard.vue";

const state = defineProps({
	products: {
		type: Array,
		default: [],
	}
});

</script>

<template>
	<section>
		<SectionTitle
				main_title="Мы предлагаем"
				second_title="Лечебные грибы для вашего здоровья!"
		/>
		<div class="grid grid-cols-1 md:grid-cols-3 gap-4 p-4">
			<ProductCard v-for="product in state.products" :key="product.id" :product="product" />
		</div>
	</section>
</template>
