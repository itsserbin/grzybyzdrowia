<script setup>
import SectionTitle from "@/Components/SectionTitle.vue";
import PriceTable from "@/App/Prices/PriceTable.vue";

const props = defineProps({
	products:{
		type:Array,
		default:[],
	},
})

const chunk = (arr, size) =>
		Array.from({ length: Math.ceil(arr.length / size) }, (v, i) =>
				arr.slice(i * size, i * size + size)
		);

const filteredProducts = props.products.filter(product => product.availability);
const groupedProducts = chunk(filteredProducts, 5);
</script>

<template>
	<section id="price">
		<SectionTitle
				main_title="Цены"
				second_title="На фасованные грибы"
		/>

		<PriceTable
				v-for="(productsGroup, index) in groupedProducts"
				:key="index"
				:products="productsGroup"
				:showHeader="index === 0"
		/>
	</section>
</template>
