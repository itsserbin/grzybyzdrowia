<script setup>
import { ref, toRefs, defineProps, defineEmits, watchEffect, onMounted, onBeforeUnmount } from 'vue';

const props = defineProps({
    modelValue: Boolean
});

const emit = defineEmits(['update:modelValue']);

const { modelValue } = toRefs(props);
const closeModal = () => {
    emit('update:modelValue', false);
};

watchEffect(() => {
    if (modelValue.value) {
        document.body.classList.add('no-scroll');
    } else {
        document.body.classList.remove('no-scroll');
    }
});

const modalContent = ref(null);

const handleOutsideClick = (event) => {
    if (modalContent.value && !modalContent.value.contains(event.target)) {
        closeModal();
    }
};

const handleKeyDown = (event) => {
    if (event.key === 'Escape') {
        closeModal();
    }
};

onMounted(() => {
    document.addEventListener('keydown', handleKeyDown);
});

onBeforeUnmount(() => {
    document.removeEventListener('keydown', handleKeyDown);
});
</script>

<template>
    <transition name="fade">
        <div v-if="modelValue" class="z-[100] fixed inset-0 flex justify-center items-center bg-black bg-opacity-50" @click="handleOutsideClick">
            <div class="bg-white p-5 rounded-lg shadow-lg" ref="modalContent">
                <slot></slot>
                <button @click="closeModal" class="mt-4 px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600">Закрыть</button>
            </div>
        </div>
    </transition>
</template>
