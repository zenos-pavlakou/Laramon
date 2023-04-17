<template>
	
	<div class="work-experience-container">



		<div class="work-experience-header">
			<div class="flex-space-between header-top">
				<h3 class="company-name">{{this.company}}</h3>
				<h4 class="location">{{this.location}}</h4>
			</div>
			<div class="flex-space-between header-bot">
				<span class="title">{{this.title}}</span>
				<span class="dates">{{this.fromDate}} - {{this.toDate}}</span>
			</div>
		</div>


		<div class="work-experience-intro break-text" v-html="this.intro"></div>

		<ul>
			<li v-for="(bulletPoint, index) in this.bulletPoints" :key="index" class="break-text">{{ bulletPoint }}</li>
		</ul>

	</div>

</template>





<style scoped>
	.work-experience-header {
		margin-bottom: 20px;
	}

	@media only screen and (max-width: 523px) { 
		.company-name {
			font-size:1.1rem;
		}
		.location {
			font-size:0.95rem;
		}
		.title {
			font-size:0.85rem;
		}
		.location {
			font-size:0.85rem;
		}
	}


	@media only screen and (max-width: 470px) { 
		.company-name {
			font-size:1rem;
		}
		.location {
			font-size:0.9rem;
		}
		.title {
			font-size:0.85rem;
		}
		.location {
			font-size:0.85rem;
		}
	}

	@media only screen and (max-width: 400px) { 
		.title {
			font-size:0.8rem;
		}
		.location {
			font-size:0.8rem;
		}
	}
</style>




<script>
	export default {
		props: [
			"company",
			"title",
			"fromDate",
			"toDate",
			"location",
			"intro",
			"bulletPoints"
		],
	}
</script>