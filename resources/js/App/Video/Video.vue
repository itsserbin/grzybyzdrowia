<script setup>
import SectionTitle from "@/Components/SectionTitle.vue";
</script>

<template>
	<section class="mb-[100px]">
		<SectionTitle
				main_title="Видео"
				second_title="Волшебные грибы - мухомор пантерный и мухомор серо-розовый"
		/>
		<div class="relative aspect-w-16 aspect-h-9" >
			<iframe class="w-full h-[700px] max-md:h-[400px]"
							src="https://www.youtube.com/embed/Yw4dqimSntQ?si=lgmy056IE9vvWZZU"
							title="YouTube video player" frameborder="0"
							allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
							allowfullscreen>
			</iframe>
		</div>
	</section>
</template>


