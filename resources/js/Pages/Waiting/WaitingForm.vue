<script setup>
import Input from "@/Components/Input.vue";
import Button from "@/Components/Button.vue";

</script>

<template>
	<form class="w-full max-w-xl lg:border-r-[1px] p-3">
		<div class="mb-[25px]">
			<h2 class="max-md:text-[1.6em] lg:text-[1.6em] font-semibold">Оставьте заявку на обратный звонок</h2>
			<p class="text-lg">Консультант перезвонит вам через 15 минут</p>
		</div>

		<!-- Имя -->
		<div class="mb-4">
			<Input class="w-full" placeholder="Ваше имя" />
		</div>

		<!-- Телефон -->
		<div class="mb-4">
			<Input class="w-full" v-mask="'+48(###) ###-###'" placeholder="Телефон" />
		</div>

		<!-- Политика конфиденциальности -->
		<div class="flex items-center mb-6">
			<input id="policy" type="checkbox" class="mr-2 leading-tight">
			<label for="policy" class="text-gray-500 text-sm flex-1">
				Я принимаю условия <a href="#" class="text-blue-500 underline hover:text-blue-600">Политики конфиденциальности</a> и даю согласие на обработку персональных данных.
			</label>
		</div>

		<!-- Кнопка отправки -->
		<div class="flex justify-end">
			<Button disabled>Отправить</Button>
		</div>
	</form>
</template>


<style scoped>

</style>
