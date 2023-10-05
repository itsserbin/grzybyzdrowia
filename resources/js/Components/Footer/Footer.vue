<script setup>

const data = [
	{
		name:"Пользовательское Соглашение",
		route:"/accept"
	},
	{
		name:"Публичная Оферта",
		route:"/oferta"
	},
	{
		name:"Политика Конфиденциальности",
		route:"/politika-konfidencialnosti"
	},
	{
		name:"Реквизиты",
		route:"/rekvizity"
	}
]

</script>

<template>
	<footer class="flex justify-center flex-wrap mt-[50px] mb-[10px] px-4">
		<ul class="flex flex-wrap gap-4 md:gap-10">
			<li class="text-xl hover:border-b-[1px] hover:border-gray-400 text-center w-full sm:w-1/2 md:w-auto" v-for="item in data">
				<a :href="item.route">{{ item.name }}</a>
			</li>
		</ul>
	</footer>
</template>



