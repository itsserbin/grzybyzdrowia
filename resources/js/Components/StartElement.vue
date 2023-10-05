<script setup>
import Circle from "@/Components/Circle.vue";
const state = defineProps({
	img:{
		type:String,
		default:'',
	},
	mainTitle:{
		type:String,
		default:'',
	},
	secondTitle:{
		type:String,
		default:'',
	},
	index: {
		type: Number,
		default: 0,
	}
})
</script>

<template>
	<div class="flex items-center">
		<!-- Кружочек по центру -->
		<Circle :num="state.index + 1"/>
		<!-- Содержимое элемента -->
		<div class="relative  z-10 ml-6 flex flex-col items-center justify-center">
			<img width="130" height="80" :src="state.img" alt="">
			<div class="mt-2 text-center">
				<h3 class="font-semibold text-2xl max-md:text-lg">{{ state.mainTitle }}</h3>
				<p>{{ state.secondTitle }}</p>
			</div>
		</div>
	</div>
</template>
