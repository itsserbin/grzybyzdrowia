<script setup>
import SectionTitle from "@/Components/SectionTitle.vue";
import Button from "@/Components/Button.vue";
import ModalCallback from "@/Components/ModalCallback.vue";
</script>

<template>
	<section class="flex flex-col items-center my-[50px]">
		<SectionTitle
				main_title="Узнайте действуют ли сегодня акции!"
				second_title="Закажите звонок, чтобы узнать о действующих акциях для новых клиентов."
		/>
		<ModalCallback title="Заказать обратный звонок"/>
	</section>
</template>
