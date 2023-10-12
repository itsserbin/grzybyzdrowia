<script setup>
const props = defineProps({
	products: {
		type: Array,
		default: () => [],
	},
	showHeader: {
		type: Boolean,
		default: true
	}
});
</script>

<template>
	<table class="min-w-full text-xl bg-white shadow-2xl border rounded overflow-hidden mb-5">
		<thead v-if="showHeader">
		<tr class="text-left bg-[#DBDBDB]">
			<th class="px-4 w-[80%] py-2 font-semibold">Грибы</th>
			<th class="px-4 w-[80%] py-2 font-semibold">Цена, zł</th>
		</tr>
		</thead>
		<tbody>
		<tr v-for="product in props.products" :key="product.id"  class="hover:bg-gray-100">
			<td class="border-none w-[90%] px-4 py-2">{{ product.name }}</td>
			<td class="border-none w-[90%] px-4 py-2">{{ product.price }}</td>
		</tr>
		<tr v-for="n in (5 - products.length)" :key="'empty' + n" class="hover:bg-gray-100">
			<td class="border-none px-4 py-2">&nbsp;</td>
			<td class="border-none px-4 py-2">&nbsp;</td>
		</tr>
		</tbody>
	</table>
</template>
