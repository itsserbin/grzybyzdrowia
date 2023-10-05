<script setup>
import MasterLayout from "@/Layouts/MasterLayout.vue";
import Healthy from "@/Pages/Healthy/Healthy.vue";
import Products from "@/Pages/Products/Products.vue";
import FreeConsultation from "@/Pages/FreeConsultation/FreeConsultation.vue";
import Prices from "@/Pages/Prices/Prices.vue";
import Actions from "@/Pages/Actions/Actions.vue";
import Video from "@/Pages/Video/Video.vue";
import Reviews from "@/Pages/Reviews/Reviews.vue";
import Consultation from "@/Pages/Consultation/Consultation.vue";
import Questions from "@/Pages/Questions/Questions.vue";
import Start from "@/Pages/Start/Start.vue";
import Waiting from "@/Pages/Waiting/Waiting.vue";

const state = defineProps({
	products:{
		type:Array,
		default:[],
	},
	reviews:{
		type:Array,
		default:[],
	}
})
</script>

<template>
	<MasterLayout>
		<Healthy/>
		<Products :products="state.products"/>
		<FreeConsultation/>
		<Prices :products="state.products"/>
		<Actions/>
		<Video/>
		<Reviews :reviews="state.reviews"/>
		<Consultation/>
		<Questions/>
		<Start/>
		<Waiting/>
	</MasterLayout>
</template>

