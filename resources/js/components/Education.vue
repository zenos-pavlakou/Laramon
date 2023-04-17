<template>
			<div class="witten-content rounded mt-3 white-txt" id="education">
				
				<div class="flex-space-between">
					<h1 class="mb-3">Education</h1> 
					<i class="fas fa-graduation-cap gown"></i>
				</div>
				


				<div class="flex-space-between mt-4" :class="this.education_lg ? '' : 'hide'">
					<div style="">
						<h4>University of Sussex</h4>
						<p>
							BSc with Honours in Computer Science <br>
							First Class
						</p>
					</div>
					<div style="text-align:right;">
						<h5>Sussex</h5>
						<p>Sep 2016 - June 2019</p>
					</div>
				</div>


				<div class="flex-space-between mt-4" :class="this.education_lg ? 'hide' : ''">
					<div style="text-align:left;">
						<h4>University of Sussex</h4>
						<p>
							BSc with Honours in Computer Science<br>
							First Class <br>
							Sep 2016 - June 2019
						</p>
					</div>
				</div>

				
				<!-- <p class="mt-3">You can view my degree <a href="/files/degree.pdf" target="_blank">here</a></p> -->
				<div class="degree-button-container my-2">
					<a class="degree-link" href="/files/degree.pdf" target="_blank"> <div class="cta-button">View my degree!</div></a>
				</div>
			</div>
</template>


<script>
	export default {
		data() {
			return {
				education_lg: true
			}
		},
		mounted: function() {
			let screenWidth = window.innerWidth;
			let vm = this;
			let breakpoint = 560;
			let startingWidth = window.screen.width;
			vm.education_lg = startingWidth > breakpoint;

			window.addEventListener("resize", function () {
			  if (window.innerWidth !== screenWidth) {
			    screenWidth = window.innerWidth;
			    if(screenWidth <= breakpoint && vm.education_lg) {
			    	vm.education_lg = false;
			    } else if(screenWidth > breakpoint && !vm.education_lg) {
			    	vm.education_lg = true;
			    }
			  }
			});
		}
	}
</script>

<style scoped>

	.gown {
		font-size: 2rem!important;
		color:rgba(62, 62, 72,0.75);
	}

	.degree-button-container {
		width:160px!important;
	}
	.cta-button {
	  background-color: rgba(255, 201, 46, 0.75);
	  color: black;
	  padding: 10px 20px;
	  border-radius: 5px;
	  border: none;
	  font-size: 16px;
	  cursor: pointer;
	  animation: pulse 3s infinite;
	}

	@keyframes pulse {
	  0% {
	    transform: scale(1);
	  }
	  25% {
	    transform: scale(1.04);
	  }
	  50% {
	    transform: scale(1);
	  }
	  75% {
	    transform: scale(1.04);
	  }
	  100% {
	    transform: scale(1);
	  }
	}


	.hide {
		display:none;
	}

</style>