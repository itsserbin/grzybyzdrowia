<script setup>
import SectionTitle from "@/Components/SectionTitle.vue";
import StartElement from "@/Components/StartElement.vue";

const data = [
	{
		img:'https://grzybyzdrowia.com/img/45-fitnes.png',
		mainTitle:'Закажите обратный звонок',
		secondTitle:'Наш консультант перезвонит вам в течение 15 минут и ответит на все ваши вопросы.',
	},
	{
		img:'https://grzybyzdrowia.com/img/46-fitnes.png',
		mainTitle:'Выберите удобное время',
		secondTitle:'Сообщите консультанту когда вам удобно пройти консультацию со специалистом.',
	},
	{
		img:'https://grzybyzdrowia.com/img/47-fitnes.png',
		mainTitle:'Проведите консультацию',
		secondTitle:'Выявим какие грибы вам нужны для улучшения вашего здоровья.',
	}
];

</script>

<template>
	<section id="start" class="mt-[100px] flex flex-col items-center">
		<SectionTitle
				main_title="С чего начать?"
				second_title="Три простых шага чтобы заказать грибы"
		/>

		<!-- Контейнер для элементов и центральной линии -->
		<div class="relative w-full max-w-4xl">
			<!-- Центральная линия -->
			<div class="absolute left-1/2 top-0 bottom-0 border-l-2 border-black transform -translate-x-1/2"></div>

			<!-- Элементы -->
			<div v-for="(item, index) in data">
				<StartElement
						:key="index"
						:index="index"
						:img="item.img"
						:mainTitle="item.mainTitle"
						:secondTitle="item.secondTitle"
						class="mb-8"
						:class="{ 'text-right mr-auto ml-[50%]': index % 2 === 0, 'text-left ml-auto mr-[55%]': index % 2 === 1 }"
				/>
			</div>
		</div>
	</section>
</template>

