@extends('layouts.app')

@section('content')

<div class="container-xxl root-container">

	<div class="inner-container">

		<div class="about-me-col">



			<div class="about-me-header">
				<img class="prof-pic" src="/imgs/zen.jpg">
				<p class="white-txt sub-heading">Zenos Pavlakou</p>
				<p style="margin-top:-7px;">
					Python Developer<br>
					Full-Stack & Web3 Developer
				</p>
			</div>


			<div class="about-me-body">
				<div>
					<div class="flex-space-between">
						<span class="white-txt">Residence:</span><span>Cyprus</span>
					</div>
					<div class="flex-space-between">
						<span class="white-txt">City:</span><span>Larnaca</span>
					</div>
					<div class="flex-space-between">
						<span class="white-txt">Age:</span><span>29</span>
					</div>
					
				</div>

				<hr>

				<div class="spoken-languages flex-center mt-4">
					<donut :val=100 language="English"></donut>
					<donut :val=75 language="Greek"></donut>
				</div>

				<hr>

				<div class="programming-languages">
					<progress-bar skill="HTML" :val=90 :delay=8></progress-bar>
					<progress-bar skill="CSS" :val=85 :delay=8.5></progress-bar>
					<progress-bar skill="Web3" :val=70 :delay=9.3></progress-bar>
					<progress-bar skill="Python" :val=80 :delay=9></progress-bar>
					<progress-bar skill="JS" :val=80 :delay=9></progress-bar>
					<progress-bar skill="Node" :val=70 :delay=9.3></progress-bar>
					<progress-bar skill="Vue" :val=70 :delay=9.3></progress-bar>
					<progress-bar skill="Solidity" :val=75 :delay=9.3></progress-bar>
					<progress-bar skill="NGINX" :val=30 :delay=26></progress-bar>
					<progress-bar skill="Laravel" :val=75 :delay=9.3></progress-bar>
					<progress-bar skill="PHP" :val=65 :delay=9.3></progress-bar>
					<progress-bar skill="Docker" :val=50 :delay=26></progress-bar>
					<progress-bar skill="Git" :val=75 :delay=9></progress-bar>
					<progress-bar skill="MySQL" :val=40 :delay=26></progress-bar>
					<progress-bar skill="OOP" :val=80 :delay=9></progress-bar>
					<progress-bar skill="Linux" :val=70 :delay=9></progress-bar>
					<progress-bar skill="SEO" :val=70 :delay=9></progress-bar>
				</div>

				<hr class="">

				<a href="#" class="download-cv white-txt bold-txt">Download CV <i class="ml-1 fa-solid fa-download"></i></a>

			</div>


			<div class="about-me-footer">
				
				<div class="social-links-wrapper flex-center">
					<a href="https://www.linkedin.com/in/zenos-pavlakou-030959142/" target="_blank" class="social-link"><i class="fa-brands fa-linkedin"></i></a>
					<a href="https://github.com/zenos-pavlakou" target="_blank" class="social-link"><i class="fa-brands fa-square-github"></i></a>
					<a href="https://twitter.com/CryptoMultisend" target="_blank" class="social-link"><i class="fa-brands fa-square-twitter"></i></a>
					<a href="https://www.facebook.com/zenos.pavlakou" target="_blank" class="social-link"><i class="fa-brands fa-square-facebook"></i></a>
				</div>
			</div>
		</div>









 


	</div>

	<div class="main-container" >
		<div class="content-container">
			<div id="-about-me" style="position:absolute; top:0px"></div>
			<div class="foo rounded">
				<typewriter></typewriter>
			</div>

			<div class="witten-content rounded mt-3 white-txt" id="about-me">
				<h1 class="mb-3">About me</h1>
				<p>
					Hi there! I'm Zenos Pavlakou, a passionate programmer who enjoys taking on new challenges and solving complex problems. I found my passion for programming during my time at university and I have been captivated ever since.
					<br><br>

					What I enjoy most about programming is the way it allows me to turn my ideas into reality. One example of this is <a href="https://cryptomultisender.com" target="_blank">Crypto Multisender</a> which I built from the ground up. Since its release, the platform has been used regularly by various startup companies and the total value of all crypto assets processed by the platform exceeds $30,000,000.<br>

					<!-- I was able to achieve this because I believe that with the right tools and mindset, anything is possible. That's why I approach every project with a can-do attitude and a willingness to learn and adapt as needed. Whether I'm working on a small-scale project or a large-scale application, I take pride in my attention to detail and my commitment to delivering high-quality work.<br> -->

					
				</p>
			</div>

			<div class="witten-content rounded mt-3 white-txt" id="skills">
				<div id="-side-projects" style="position: absolute; top:-15px;"></div>
				<h1 class="mb-3">Skills and proficiencies</h1>

				<div class="flex-space-between">
					<progress-bar skill="HTML" :val=90 :delay=8></progress-bar>
					<progress-bar skill="CSS" :val=85 :delay=8.5></progress-bar>
				</div>
				<div class="flex-space-between">
					<progress-bar skill="Web3" :val=70 :delay=9.3></progress-bar>
					<progress-bar skill="Python" :val=80 :delay=9></progress-bar>
				</div>
				<div class="flex-space-between">
					<progress-bar skill="JS" :val=80 :delay=9></progress-bar>
					<progress-bar skill="Node" :val=70 :delay=9.3></progress-bar>
				</div>
				<div class="flex-space-between">
					<progress-bar skill="Vue" :val=70 :delay=9.3></progress-bar>
					<progress-bar skill="Solidity" :val=75 :delay=9.3></progress-bar>
				</div>
				<div class="flex-space-between">
					<progress-bar skill="NGINX" :val=30 :delay=26></progress-bar>
					<progress-bar skill="Laravel" :val=75 :delay=9.3></progress-bar>
				</div>
				<div class="flex-space-between">
					<progress-bar skill="PHP" :val=65 :delay=9.3></progress-bar>
					<progress-bar skill="Docker" :val=50 :delay=26></progress-bar>
				</div>
				<div class="flex-space-between">
					<progress-bar skill="Git" :val=75 :delay=9></progress-bar>
					<progress-bar skill="MySQL" :val=40 :delay=26></progress-bar>
				</div>
				<div class="flex-space-between">
					<progress-bar skill="OOP" :val=80 :delay=9></progress-bar>
					<progress-bar skill="Linux" :val=70 :delay=9></progress-bar>
				</div>
				<div class="flex-space-between">
					<progress-bar skill="SEO" :val=70 :delay=9></progress-bar>
				</div>

			</div>


					
         


			<div class="witten-content rounded mt-3 white-txt" id="work-experience">
				<div id="-work-experience" style="position: absolute; top:-15px;"></div>
				<h1 class="mb-4">Work experience</h1>

				<hr class="my-4">

				<work-experience
					company="Crypto Multisender"
					title="Founder & Developer"
					from-date="July 2018"
					to-date="Present"
					location="Remote"
					intro="
						<p>
							Crypto Multisender is a decentralized software solution that automates the distribution of crypto assets.
							These assets include, but are not limited to Ethereum, ERC20 tokens and NFTs. Since the launch of
							Crypto Multisender, the platform has been used by over 800 blockchain companies and projects to
							distribute crypto assets to over 2,500,000 recipients with a total value of upwards of $30,000,000. I built the
							software entirely on my own and for this I:
						</p>
					"
					:bullet-points="[
						'Developed the smart contracts that power the Crypto Multisender system', 
						'Configured the backend to use an NGINX server', 
						'Built the website using Laravel and Vue JS',
						'Enabled the frontend to interact with the smart contracts using Web3',
						'Developed an API and several microservices for the website using the Flask module in Python',
						'Built an entire CMS for those with admin privileges'
					]"
				></work-experience>

				<hr class="my-4">


				<work-experience
					company="Ayima"
					title="Data Developer"
					from-date="May 2019"
					to-date="June 2022"
					location="London"
					intro="
						<p>
							Ayima is a leading company in the digital marketing and SEO industry. I started working for this company
							right after graduating from university. I originally joined as a data developer, however, after some time I
							took on other technical tasks outside the scope of my role. Some of these tasks include web development
							and also building technical SEO tools. During my time at Ayima, I:
						</p>
					"
					:bullet-points="[
						'Built automated data pipelines for multiple clients, including EasyJet and British Airways', 
						'Designed and implemented a data warehouse using BigQuery', 
						'Developed in-house tools for automating time-consuming tasks for other departments of the company',
						'Contributed to the development of several websites and web applications',
						'Worked on building a multi-threaded and highly scalable web crawler using Python',
						'Regularly worked with external APIs from various services, including Semrush, Ahrefs, Google Search Console, Google Analytics, Page Speed Insights and more'
					]"
				></work-experience>



				<hr class="my-4">

				<work-experience
					company="Fiverr"
					title="Freelance Developer"
					from-date="Jan 2018"
					to-date="May 2019"
					location="Remote"
					intro="
						<p>
							As a student at university, I worked as a freelance developer on Fiverr, specializing in developing smart contract applications on Ethereum and other EVM blockchains. I offered services such as developing <a href='https://ethereum.org/en/developers/docs/standards/tokens/erc-20/' target='_blank'>ERC20 tokens</a>, <a href='https://en.wikipedia.org/wiki/Initial_coin_offering' target='_blank'>ICO smart contracts</a>, and <a href='https://cryptomultisender.com/blog/our-airdrop-smart-contract' target='_blank'>airdrop smart contracts</a>. During my time on Fiverr, I worked with over 50 clients, 35 of which left me a 5-star review, as can be seen on my <a href='https://www.fiverr.com/dapplecontracts?source=gig_page' target='_blank'>Fiverr profile</a>. While balancing my studies with work, I continuously updated my knowledge of the latest blockchain technologies and best practices to provide cutting-edge solutions to my clients. My experience as a freelance developer on Fiverr has provided me with a strong foundation in developing smart contract applications, project management skills, and a track record of delivering high-quality work to clients.
						</p>

						<p>
							During my time working as a freelancer on Fiverr, I noticed that there was a high demand for the development of custom airdrop smart contracts to enable the distribution of ERC20 tokens to thousands of recipients. This observation led me to develop Crypto Multisender, a tool that is capable of distributing all ERC20 tokens and NFTs. The development of Crypto Multisender not only demonstrated my ability to identify opportunities in the market but also my proficiency in creating solutions that meet the needs of users.
						</p>
					"
					:bullet-points="[]"
				></work-experience>



			</div>



<!-- 			<div class="witten-content rounded mt-3 white-txt" id="side-projects">
				<div id="-side-projects" style="position: absolute; top:-15px;"></div>
				<h1 class="mb-3">Side Projects</h1>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam et rutrum lacus. Aliquam mollis condimentum mauris, quis imperdiet augue dignissim quis. Suspendisse imperdiet lorem ut erat tincidunt sagittis. Donec consectetur, leo sit amet porta scelerisque, magna odio iaculis tellus, tincidunt ultrices diam odio nec orci. Vestibulum nec dui tortor. Duis erat diam, pulvinar ac finibus volutpat, posuere eu velit. Pellentesque pulvinar, nibh auctor egestas dictum, urna enim tristique ligula, ac bibendum metus dolor vitae magna.
				</p>

				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam et rutrum lacus. Aliquam mollis condimentum mauris, quis imperdiet augue dignissim quis. Suspendisse imperdiet lorem ut erat tincidunt sagittis. 
				</p>

			</div> -->


			<div class="witten-content rounded mt-3 white-txt" id="hobbies-interests">
				<div id="-hobbies-interests" style="position: absolute; top:-15px;"></div>
				<h1 class="mb-3">Hobbies & Interests</h1>
				<p>
					In my free time, I have a range of hobbies and interests that I am enthusiastic about. During the summer months, I like to explore the beauty of the underwater world through freediving and snorkeling. Also, as someone who is passionate about software development, I enjoy learning new technologies and I love a good hackathon! In addition to this, I also like to travel and explore new places, Europe being my favourite. I find traveling to be a great way to broaden my perspective and gain new insights into different cultures and ways of life. 
				</p>


			</div>


			
			<education></education>


			<div class="accordion mt-4 mb-4" id="faqAccordion" id="about-me">

			  <div class="accordion-item">
			    

			    <h1 style="color:rgba(255, 201, 46, 0.75); font-weight: bold; margin-left:24px;margin-top:24px;">FAQ</h1>
			    
			    <div id="faqCollapse" class="accordion-collapse mb-3" aria-labelledby="faqHeader" data-bs-parent="#faqAccordion">


			      <div class="accordion-body">
			        <div class="accordion" id="itemAccordion">


					<div class="accordion-item">
					  <h2 class="accordion-header" id="item1Header">
					    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#item1Collapse" aria-expanded="true" aria-controls="item1Collapse" data-bs-parent="#itemAccordion">
					      Where do you see yourself in 5 years?
					    </button>
					  </h2>
					  <div id="item1Collapse" class="accordion-collapse collapse show" aria-labelledby="item1Header" data-bs-parent="#itemAccordion">
					    <div class="accordion-body accordion-body-inner">
					      <p>In five years, I see myself as a senior software developer who has significantly contributed to the development of cutting-edge technologies. I plan to continuously improve my technical skills and stay up-to-date with the latest trends in the industry, while also seeking out opportunities to expand my knowledge and expertise in related areas.</p>

					      <p>I also hope to have taken on more leadership responsibilities and mentor junior team members, as I believe in giving back and sharing knowledge. I am eager to be a part of a company that values growth and innovation, and where I can make a positive impact on the organization and the people I work with.</p>

					      <p>Overall, my goal is to be a well-rounded professional with a strong technical foundation and leadership abilities, who can drive the development of innovative and impactful software solutions.</p>
					    </div>
					  </div>
					</div>


			          <div class="accordion-item">
			            <h2 class="accordion-header" id="item2Header">
			              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#item2Collapse" aria-expanded="false" aria-controls="item2Collapse">
			                What are your strengths and weaknesses?
			              </button>
			            </h2>
			            <div id="item2Collapse" class="accordion-collapse collapse" aria-labelledby="item2Header" data-bs-parent="#itemAccordion">
			              <div class="accordion-body accordion-body-inner">
							<p>I believe that one of my biggest strengths is my ability to communicate effectively with both technical and non-technical stakeholders. I've found that being able to translate complex technical concepts into easily understandable language is essential in ensuring everyone is on the same page.</p>

							<p>One area where I'm continuously working to improve is in managing my time more effectively. Sometimes, I can get so absorbed in a task that I lose track of time and end up working longer hours than necessary. I'm taking steps to become more disciplined with my time management, including setting specific goals and deadlines for myself and tracking my progress more closely.</p>

							<p>Overall, I believe that my strong communication skills and can-do attitude, along with my focus on improving my time management abilities, make me a valuable asset to any team.</p>
			              </div>
			            </div>
			          </div>
			          <div class="accordion-item">
			            <h2 class="accordion-header" id="item3Header">
			              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#item3Collapse" aria-expanded="false" aria-controls="item3Collapse">
			                What motivates you in your work?
			              </button>
			            </h2>
			            <div id="item3Collapse" class="accordion-collapse collapse" aria-labelledby="item3Header" data-bs-parent="#itemAccordion">
			              <div class="accordion-body accordion-body-inner">
							<p>What motivates me in my work is the opportunity to tackle challenging problems and create solutions that make a positive impact. I find it very rewarding to work on projects that have a real-world impact, whether it's improving the efficiency of a company's internal processes or creating a product that solves a real problem for users.</p>

							<p>In addition, I'm motivated by the opportunity to continuously learn and grow in my role. I'm passionate about programming and technology, and I'm always seeking out new ways to improve my skills and stay up-to-date with the latest industry trends. I find that working on new projects and collaborating with talented team members provides a great environment for learning and personal growth.</p>
			              </div>
			            </div>
			          </div>


			          <div class="accordion-item">
			            <h2 class="accordion-header" id="item4Header">
			              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#item4Collapse" aria-expanded="false" aria-controls="item4Collapse">
			                How do you handle constructive criticism and feedback?
			              </button>
			            </h2>
			            <div id="item4Collapse" class="accordion-collapse collapse" aria-labelledby="item4Header" data-bs-parent="#itemAccordion">
			              <div class="accordion-body accordion-body-inner">
							<p>I see constructive criticism and feedback as opportunities for growth and improvement, and I welcome it with an open mind. I listen actively, ask questions to clarify points that are unclear, and reflect on the feedback to see how I can improve. I also take ownership of my mistakes and strive to continuously improve my skills and performance.</p>
			              </div>
			            </div>
			          </div>




			          <div class="accordion-item">
			            <h2 class="accordion-header" id="item5Header">
			              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#item5Collapse" aria-expanded="false" aria-controls="item5Collapse">
			                What makes you unique?
			              </button>
			            </h2>
			            <div id="item5Collapse" class="accordion-collapse collapse" aria-labelledby="item5Header" data-bs-parent="#itemAccordion">
			              <div class="accordion-body accordion-body-inner">
							<p>I have a product-driven mindset and can take an idea and deliver results that create real user value.</p>
			              </div>
			            </div>
			          </div>





			          <div class="accordion-item">
			            <h2 class="accordion-header" id="item6Header">
			              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#item6Collapse" aria-expanded="false" aria-controls="item6Collapse">
			                Why should we hire you?
			              </button>
			            </h2>
			            <div id="item6Collapse" class="accordion-collapse collapse" aria-labelledby="item6Header" data-bs-parent="#itemAccordion">
			              <div class="accordion-body accordion-body-inner">
							<p>	As a developer, I bring a unique combination of technical skills and a passion for problem-solving. With experience in various programming languages and web technologies, I can adapt quickly to new projects and requirements. Additionally, I believe that my strong communication skills and ability to work well within a team will make me a valuable asset to your company. </p>

			              </div>
			            </div>
			          </div>



			        </div>
			      </div>
			    </div>
			  </div>
			</div>

		</div>

<!-- 
<div class="right-nav">
	<div class="nav-toggle-container">
		<div id="nav-toggler">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>


	<ul class="nav-items white-txt">
		<li><a href="#-about-me" class="nav-link">ABOUT</a></li>
		<li><a href="#-work-experience" class="nav-link">EXPERIENCE</a></li>
		<li><a href="#-side-projects" class="nav-link">PROJECTS</a></li>
		<li><a href="#-hobbies-interests" class="nav-link">INTERESTS</a></li>
		<li><a href="#-education" class="nav-link">EDUCATION</a></li>
	</ul>
</div> 
-->
		
	</div>
</div>
@endsection