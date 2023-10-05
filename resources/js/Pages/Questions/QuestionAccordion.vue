<script setup>
import { ref } from 'vue';

const props = defineProps({
	title: String,
	content: String
});

const isOpen = ref(false);

const toggleAccordion = () => {
	isOpen.value = !isOpen.value;
};
</script>

<template>
	<div class="mb-[20px]">
		<button @click="toggleAccordion" class="w-full text-lg font-semibold flex justify-between p-4 border border-gray-300 rounded-t-lg">
			{{ title }}
			<span v-if="isOpen">-</span>
			<span v-else>+</span>
		</button>

		<div v-if="isOpen" class="border-l text-lg border-r border-gray-300 p-4 overflow-hidden transition-max-height duration-500 ease-in-out"
				 :class="{ 'border-b': isOpen, 'rounded-b-lg': isOpen }" v-html="content">
		</div>
	</div>
</template>

