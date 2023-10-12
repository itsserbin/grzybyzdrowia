<script setup>
defineProps({
	type: {
		type: String,
		default: 'submit',
	},
	active: {
		type: Boolean,
		default: false,
	},
    disabled:{
        type:Boolean,
        default:false,
    }
});
</script>
<template>
	<button :type="type"
            :disabled="disabled"
					class="
            rounded-[0.438rem]
            text-lg
            text-[#FFFFFF]
            px-[1.1em]
            py-[0.6em]
						max-md:p-[0.4em]
            border-transparent
            transition-all
            duration-200
            ease-in-out
            border-[1px]
            hover:bg-[#a92c0d]
						disabled:bg-gray-400
        "
					:class="{
            'bg-[#D72B00]' : !active
        }"
	>
		<slot/>
	</button>
</template>
