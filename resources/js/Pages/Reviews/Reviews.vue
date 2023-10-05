<script setup>
import SectionTitle from "@/Components/SectionTitle.vue";
import ReviewsCard from "@/Pages/Reviews/ReviewsCard.vue";
const state = defineProps({
	reviews:{
		type:Array,
		default:[],
	}
})
</script>

<template>
	<section>
		<SectionTitle
				main_title="Отзывы"
				second_title="Наших постоянных клиентов"
		/>
		<div class="grid grid-cols-2 gap-4 max-md:grid-cols-1">
			<ReviewsCard :key="review.id" v-for="review in state.reviews" :review="review"/>
		</div>
	</section>
</template>

