<script setup>
import SectionTitle from "@/Components/SectionTitle.vue";
import Button from "@/Components/Button.vue";
import ModalCallback from "@/Components/ModalCallback.vue";
</script>

<template>
	<div class="bg-white border-[1px] p-6 rounded-[8px]">
			<div class="flex flex-col items-center">
				<SectionTitle
						main_title="Остались вопросы?"
						second_title="Задайте их нашему консультанту он вам перезвонит через 15 минут."
				/>
				<ModalCallback title="Заказать звонок от консультанта"/>
			</div>
		</div>
</template>

