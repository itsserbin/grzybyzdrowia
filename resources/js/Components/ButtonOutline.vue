<script setup>
import Button from "@/Components/Button.vue";

defineProps({
	type: {
		type: String,
		default: 'submit',
	},
});
</script>

<template>
	<button :type="type"
					class="
            border-2
            border-[#D72B00]
            text-[#D72B00]
            text-lg
            max-md:p-[0.4em]
           	p-[0.6em] px-[1.6em]
            rounded-[7px]
            whitespace-nowrap
        "
	>
		<slot/>
	</button>
</template>

