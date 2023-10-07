<script setup>
import MasterLayout from "@/Layouts/MasterLayout.vue";
import Healthy from "@/App/Healthy/Healthy.vue";
import Products from "@/App/Products/Products.vue";
import FreeConsultation from "@/App/FreeConsultation/FreeConsultation.vue";
import Prices from "@/App/Prices/Prices.vue";
import Actions from "@/App/Actions/Actions.vue";
import Video from "@/App/Video/Video.vue";
import Reviews from "@/App/Reviews/Reviews.vue";
import Consultation from "@/App/Consultation/Consultation.vue";
import Questions from "@/App/Questions/Questions.vue";
import Start from "@/App/Start/Start.vue";
import Waiting from "@/App/Waiting/Waiting.vue";

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

