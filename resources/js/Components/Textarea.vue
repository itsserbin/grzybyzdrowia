<script setup>
defineProps({
	modelValue: {
		type: String,
		default: '',
	}
});

const emit = defineEmits(['update:modelValue']);

const updateValue = (event) => {
	emit('update:modelValue', event.target.value);
};
</script>

<template>
	<textarea @input="updateValue" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-200 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-200 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Напишите ваше сообщение..."></textarea>
</template>

