<script setup>
import WaitingForm from "@/Pages/Waiting/WaitingForm.vue";
import Contacts from "@/Pages/Waiting/Contacts.vue";
</script>

<template>
	<section class="mt-[100px]">
		<h2 class="font-semibold text-6xl text-center mb-[20px]">Мы ждем вас!</h2>
		<div class="flex gap-5 flex-wrap max-md:justify-center">
			<WaitingForm/>
			<Contacts/>
		</div>
	</section>
</template>

