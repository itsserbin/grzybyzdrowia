<script setup>
import Header from '../Components/Header/Header.vue';
import Footer from "@/Components/Footer/Footer.vue";
</script>

<template>
	<Header/>
	<main id="main" class="max-w-7xl mx-auto pt-[9rem] max-md:px-2 max-md:pt-[6.25rem] px-3 h-full">
		<slot></slot>
	</main>
	<Footer />
</template>
