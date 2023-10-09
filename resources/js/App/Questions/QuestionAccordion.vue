<script setup>
import { ref, onMounted } from 'vue';
import { TweenLite } from 'gsap';

const props = defineProps({
	title: String,
	content: String
});

const isOpen = ref(false);
const bodyRef = ref(null);

const toggleAccordion = () => {
	const el = bodyRef.value;
	if (!isOpen.value) {
		isOpen.value = true;
		TweenLite.to(el, 0.5, {
			height: el.scrollHeight
		});
	} else {
		isOpen.value = false;
		TweenLite.to(el, 0.5, {
			height: 0
		});
	}
};

onMounted(() => {
	TweenLite.set(bodyRef.value, { height: 0 });
});
</script>

<template>
	<div class="mb-[20px]">
		<button @click="toggleAccordion" class="w-full text-lg font-semibold flex justify-between p-4 border border-gray-300 rounded-t-lg">
			{{ title }}
			<span v-if="isOpen">-</span>
			<span v-else>+</span>
		</button>

		<div ref="bodyRef"
				 class="border-l border-r text-lg border-gray-300 overflow-hidden"
				 :class="{
			'border-b': isOpen,
			'rounded-b-lg': isOpen,
			'body-closed': !isOpen
		}" >
			<div class="p-4" v-html="content"></div>
		</div>
	</div>
</template>

<style scoped>

.body-closed {
	height: 0;
}
</style>
