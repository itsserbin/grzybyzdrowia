<script setup>
import Button from "@/Components/Button.vue";
import ButtonOutline from "@/Components/ButtonOutline.vue";
</script>

<template>
	<div class="max-md:order-1">
		<p class="text-xl mb-[1.25em]">Грибы для здоровья</p>
		<h1 class="text-6xl leading-14 font-semibold">ГРИБНАЯ АПТЕЧКА</h1>
		<p class="text-2xl mt-4 mb-[1.25em]">Мухомор красный, Ежевик гребенчатый, Кордицепс милитарис, Чага сибирская, Майтаке,
			Шиитаке, Рейши и другие грибы для здоровья. Доставка по всему миру.
		</p>
		<div class="flex gap-4 max-md:flex-col">
			<Button>Заказать обратный звонок</Button>
			<ButtonOutline>Видео</ButtonOutline>
		</div>
	</div>
</template>
