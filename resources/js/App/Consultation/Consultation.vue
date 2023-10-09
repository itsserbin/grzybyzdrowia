<script setup>
import SectionTitle from "@/Components/SectionTitle.vue";
import Button from "@/Components/Button.vue";
import ModalCallback from "@/Components/ModalCallback.vue";
</script>

<template>
	<section class="flex flex-col items-center my-[100px]">
		<SectionTitle
				main_title="Запишитесь на консультацию"
				second_title="Ещё больше отзывов в <a class='text-blue-700' href='https://t.me/opinii_grzybyzdrowia'>телеграм</a>."
		/>
		<ModalCallback title="Закажите обратный звонок"/>
	</section>
</template>

