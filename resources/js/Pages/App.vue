<script setup>
import MasterLayout from "@/Layouts/MasterLayout.vue";
import Healthy from "@/Pages/Healthy/Healthy.vue";
import Products from "@/Pages/Products/Products.vue";
import FreeConsultation from "@/Pages/FreeConsultation/FreeConsultation.vue";
import Prices from "@/Pages/Prices/Prices.vue";

const state = defineProps({
	products:{
		type:Array,
		default:[],
	},
})
</script>

<template>
	<MasterLayout>
		<Healthy/>
		<Products :products="state.products"/>
		<FreeConsultation/>
		<Prices :products="state.products"/>
	</MasterLayout>
</template>

