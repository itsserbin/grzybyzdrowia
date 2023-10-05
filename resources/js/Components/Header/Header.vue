<script setup>
import Logo from '../Logo.vue';
import Button from "@/Components/Button.vue";
import BurgerButton from "@/Components/Header/BurgerButton.vue";
import {ref} from "vue";


const navItems = [
	{
		title:'Предлагаем',
		link:"#",
	},
	{
		title:'Цена',
		link:"#",
	},
	{
		title:'Видео',
		link:"#",
	},
	{
		title:'Отзывы',
		link:"#",
	},
	{
		title:'Вопросы',
		link:"#",
	},
	{
		title:'С чего начать?',
		link:"#",
	}
]

const isMenuOpen = ref(false);
</script>

<template>
	<header class="max-w-screen-6xl mx-auto bg-[#FFFFFF] pb-[1rem] pt-2 z-[100] px-4 2xl:px-[370px] fixed w-full">
		<div class="flex justify-between items-center gap-[1.25rem]">
			<a href="#">
				<Logo/>
			</a>
			<div class="lg:hidden order-1" @click="isMenuOpen = !isMenuOpen">
				<BurgerButton :isOpen="isMenuOpen"/>
			</div>
			<ul
					:class="{'translate-x-full': !isMenuOpen, 'translate-x-0': isMenuOpen}"
					class="transform flex lg:gap-[40px] whitespace-nowrap transition-transform
					duration-500 lg:translate-x-0 fixed top-0 right-[-15px]
					bg-white max-lg:w-64 pt-8 lg:pt-0 space-y-4 max-lg:mt-[82px]
					lg:mt-0 lg:space-y-0 flex-col
					max-lg:border-[1px]
					border-gray-400
					rounded-[15px]
					lg:flex-row items-start
					lg:items-center mt-0 lg:static max-lg:py-12 max-lg:px-8" >
				<li v-for="item in navItems"><a :href="item.link" class="text-[#333333] hover:border-b-[1px] hover:border-gray-400 text-xl pl-4 lg:pl-0">{{ item.title }}</a></li>
			</ul>
			<Button class="w-[10rem]">Контакт</Button>
		</div>
	</header>
</template>


