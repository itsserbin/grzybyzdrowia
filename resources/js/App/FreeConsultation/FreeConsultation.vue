<script setup>
import SectionTitle from "@/Components/SectionTitle.vue";
import Button from "@/Components/Button.vue";
import ModalCallback from "@/Components/ModalCallback.vue";
</script>

<template>
<section class="flex flex-col items-center my-[50px]">
	<SectionTitle
		main_title="Запишитесь на бесплатную консультацию!"
		second_title="Закажите звонок от нашего консультанта, чтобы записаться на консультацию в удобное для вас время."
	/>
	<ModalCallback title="Заказать звонок от консультанта"/>
</section>
</template>

