<script setup>
import QuestionAccordion from "@/Pages/Questions/QuestionAccordion.vue";
import SectionTitle from "@/Components/SectionTitle.vue";

const data = [
	{
		title:'Какие виды доставки у вас есть?',
		content:'- Польша InPost - 20 zl<br/>' +
						'- Европа - 20$<br/>' +
						'- Доставка по другим континентам мира рассчитывается индивидуально.'
	},
	{
		title:'Какие виды оплаты возможны?',
		content:'- Blik чек / Blik перевод<br/>' +
				'- Криптовалюта<br/>' +
				'- PayPal<br/>' +
				'- IBAN.'
	},
	{
		title:'Как можно оформить заказ через телеграм?',
		content:'\n' +
				'✨ email - @myxomor_4iiik<br/>' +
				'✨ viber/whatsapp - +48600791167<br/>' +
				'✨ наш канал - https://t.me/grzyby_zdrowia_channel<br/>' +
				'✨ чат - <a href="https://t.me/grzybyzdrowia">https://t.me/grzybyzdrowia</a><br/>' +
				'✨ отзывы - https://t.me/opinii_grzybyzdrowi.'
	},
];
</script>

<template>
	<section>
		<SectionTitle
				main_title="Вопросы-ответы"
				second_title="Ответы на часто задаваемые вопросы."
		/>
		<QuestionAccordion v-for="item in data" :title="item.title" :content="item.content"/>
	</section>
</template>

