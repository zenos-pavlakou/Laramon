<template>
  <div class="typewriter-wrapper">
    <h1 class="typewriter-h1">
      Hi, I'm a
      <span class="typed-text">{{ typeValue }}</span>
      <span class="blinking-cursor">|</span>
      <span class="cursor" :class="{ typing: typeStatus }">&nbsp;<span class="hidden-div">|</span></span>
    </h1>
  </div>
</template>



<script>
  export default {
    data() {
      return {
        typeValue: "",
        typeStatus: false,
        displayTextArray: [
            "Back-End Developer", 
            "Front-End Developer", 
            "Full Stack Developer",
            "Python Developer",
            "PHP Developer",
            "JS Developer", 
            "Vue.js Developer",
            "Laravel Developer", 
            "Solidity Developer",
            "Web3 Developer"
        ],
        typingSpeed: 100,
        erasingSpeed: 100,
        newTextDelay: 1000,
        displayTextArrayIndex: 0,
        charIndex: 0,
      }
    },

    methods: {
      typeText() {
        if (this.charIndex < this.displayTextArray[this.displayTextArrayIndex].length) {
          if (!this.typeStatus) this.typeStatus = true;
          this.typeValue += this.displayTextArray[this.displayTextArrayIndex].charAt(
            this.charIndex
          );
          this.charIndex += 1;
          setTimeout(this.typeText, this.typingSpeed);
        } else {
          this.typeStatus = false;
          setTimeout(this.eraseText, this.newTextDelay);
        }
      },
      eraseText() {
        if (this.charIndex > 0) {
          if (!this.typeStatus) this.typeStatus = true;
          this.typeValue = this.displayTextArray[this.displayTextArrayIndex].substring(
            0,
            this.charIndex - 1
          );
          this.charIndex -= 1;
          setTimeout(this.eraseText, this.erasingSpeed);
        } else {
          this.typeStatus = false;
          this.displayTextArrayIndex += 1;
          if (this.displayTextArrayIndex >= this.displayTextArray.length)
            this.displayTextArrayIndex = 0;
          setTimeout(this.typeText, this.typingSpeed + 1000);
        }
      },
    },
    created() {
       setTimeout(this.typeText, this.newTextDelay + 200);
    },
  }
</script>



<style lang="scss" scoped>
.hidden-div {
  opacity:0;
  font-size:3rem;
}

.typewriter-wrapper {

  margin: auto;
  margin-top:45px!important;
}
.typewriter-h1 {
  background-color:rgba(0,0,0,1);
  padding:15px;
  border: 1px solid rgba(255,255,255,0.075);
  border-left:0;
  display: inline;
  font-size: 3rem;
  font-weight: bolder;
  span.typed-text {
    color: #fbbf24;
  }
  color:rgba(241,241,241,1)!important;
  text-shadow: 3px 2px 2px rgba(0,0,0,0.33);
  border-bottom-right-radius: 5px;
  border-top-right-radius: 5px;
}

// Cursor blinking CSS Starts...
.blinking-cursor {
  font-size: 3rem;
  color:rgba(255,255,255,0.9);
  -webkit-animation: 1s blink step-end infinite;
  -moz-animation: 1s blink step-end infinite;
  -ms-animation: 1s blink step-end infinite;
  -o-animation: 1s blink step-end infinite;
  animation: 1s blink step-end infinite;
}
@keyframes blink {
  from,
  to {
    color: transparent;
    text-shadow: 2px 2px rgba(0,0,0,0.0);
  }
  50% {
    color:rgba(255,255,255,0.9);
  }
}
@-moz-keyframes blink {
  from,
  to {
    color: transparent;
    text-shadow: 2px 2px rgba(0,0,0,0.0);
  }
  50% {
    color:rgba(255,255,255,0.9);
  }
}
@-webkit-keyframes blink {
  from,
  to {
    color: transparent;
    text-shadow: 2px 2px rgba(0,0,0,0.0);
  }
  50% {
    color:rgba(255,255,255,0.9);
  }
}
@-ms-keyframes blink {
  from,
  to {
    color: transparent;
    text-shadow: 2px 2px rgba(0,0,0,0.0);
  }
  50% {
    color:rgba(255,255,255,0.9);
  }
}
@-o-keyframes blink {
  from,
  to {
    color: transparent;
    text-shadow: 2px 2px rgba(0,0,0,0.0);
  }
  50% {
    color:rgba(255,255,255,0.9);
  }
}
// Cursor blinking CSS Ends...


@media only screen and (max-width: 1300px){
  .blinking-cursor {
    font-size: 2.1rem;
  }
}

@media only screen and (max-width: 1035px){
  .blinking-cursor {
    font-size: 2rem;
  }
}

@media only screen and (max-width: 990px){
  .typewriter-h1 {
    font-size:1.45rem!important;
  }
  .blinking-cursor {
    font-size: 1.45rem;
  }
}



@media only screen and (max-width: 630px){
  .typewriter-h1 {
    font-size:1.5rem!important;
    display: block;
    text-align:center;
    background-color:rgba(0,0,0,0);
    text-shadow: 3px 3px 2px rgba(0,0,0,0.95);
    border:0;
    margin-top:-10px;

  }



}

</style>

