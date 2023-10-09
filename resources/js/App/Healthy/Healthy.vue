<script setup>
import HealthyInfo from "@/App/Healthy/HealthyInfo.vue";
import HealthyBanner from "@/App/Healthy/HealthyBanner.vue";
</script>

<template>
	<section id="healthy" class="flex flex-col md:flex-row items-center md:items-start">
		<HealthyInfo class="md:w-1/2"/>
		<HealthyBanner class="md:w-1/2"/>
	</section>
</template>

