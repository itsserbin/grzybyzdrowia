<script setup>
import {reactive, ref} from "vue";
import Input from "@/Components/Input.vue";
import Button from "@/Components/Button.vue";
import Textarea from "@/Components/Textarea.vue";
import { Inertia } from '@inertiajs/inertia'

defineProps({
	showLine:{
		type:Boolean,
		default:true
	}
})

const isChecked = ref(false);

const data = ref({
	name: '',
	phone: '',
	message: '',
});
const submitForm = () => {
	if (isChecked.value) {
		Inertia.post('/api/send', data.value);
	}
};
</script>

<template>
	<form @submit.prevent="submitForm" class="w-full max-w-xl  p-3"
				:class="showLine ? 'lg:border-r-[1px]' : '' "
	>
		<div class="mb-[25px]">
			<h2 class="max-md:text-[1.6em] lg:text-[1.6em] font-semibold">Оставьте заявку на обратный звонок</h2>
			<p class="text-lg">Консультант перезвонит вам через 15 минут</p>
		</div>

		<!-- Имя -->
		<div class="mb-4">
			<Input v-model="data.name" class="w-full" placeholder="Ваше имя" />
		</div>

		<!-- Телефон -->
		<div class="mb-4">
			<Input v-model="data.phone" class="w-full" v-mask="'+48(###) ###-###'" placeholder="Телефон" />
		</div>

		<!-- Сообщение -->
		<div class="mb-4">
			<Textarea v-model="data.message"></Textarea>
		</div>

		<!-- Политика конфиденциальности -->
		<div class="flex items-center mb-6">
			<input id="policy" type="checkbox" class="mr-2 leading-tight" v-model="isChecked">
			<label for="policy" class="text-gray-500 text-sm flex-1">
				Я принимаю условия <a href="#" class="text-blue-500 underline hover:text-blue-600">Политики конфиденциальности</a> и даю согласие на обработку персональных данных.
			</label>
		</div>

		<!-- Кнопка отправки -->
		<div class="flex justify-end">
			<Button :disabled="!isChecked">Отправить</Button>
		</div>
	</form>
</template>

