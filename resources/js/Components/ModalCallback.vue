<script setup>
import Modal from "@/Components/Modal.vue";
import {ref} from "vue";
import Button from "@/Components/Button.vue";
import WaitingForm from "@/App/Waiting/WaitingForm.vue";

defineProps({
	title:{
		type:String,
		default:''
	},
})

const isModalOpen = ref(false);

function showModal() {
	isModalOpen.value = true;
}

function hideModal() {
	isModalOpen.value = false;
}
</script>

<template>
	<Modal :modelValue="isModalOpen" @update:modelValue="hideModal">
		<WaitingForm :showLine="false" />
	</Modal>
	<Button @click="showModal">{{ title }}</Button>
</template>
