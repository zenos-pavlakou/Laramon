<template>

  <div class="donut">
    <div role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" :style=val_style></div>
    <p class="white-txt mt-3 lang">{{this.language}}</p>
  </div>
</template>


<style scoped lang="scss">
  @import '../../sass/_variables.scss';
  @keyframes growProgressBar {
    0%, 33% { --pgPercentage: 0; }
    100% { --pgPercentage: var(--value); }
  }

  @property --pgPercentage {
    syntax: '<number>';
    inherits: false;
    initial-value: 0;
  }



  div[role="progressbar"] {
    --size: 3.5rem;
    --fg: rgba(251, 191, 36,0.9);
    --bg: rgb(39, 69, 69,0.9);
    --pgPercentage: var(--value);
    animation: growProgressBar 1s 1 forwards;
    width: var(--size);
    height: var(--size);
    border-radius: 50%;
    display: grid;
    place-items: center;
    background: 
      radial-gradient(closest-side, rgb(36,36,46) 85%, transparent 0 99.9%, black 0),
      conic-gradient(var(--fg) calc(var(--pgPercentage) * 1%), var(--bg) 0)
      ;
    font-family: Helvetica, Arial, sans-serif;
    font-size: calc(var(--size) / 5);
    color: var(--fg);
  }

  div[role="progressbar"]::before {
    counter-reset: percentage var(--value);
    content: counter(percentage) '%';
    color:rgba(255,255,255,0.775)!important;
  }

  .lang {
    text-align: center;
  }
</style>


<script>
  export default {
    props: {
      language: String,
      val: Number
    },
    data() {
      return {
        prog: -1
      }
    },  
    computed: {
      val_style() {
        return "--value:"+this.prog;
      }
    },
    mounted() {
      let vm = this;
      $(document).ready(function() {

        var progress = $('.'+vm.progressbarClass+ ' .'+vm.progressClass)

        function counterInit( fValue, lValue, counter_value=0 ) {
          counter_value++;
          vm.prog += 1;
          if( counter_value >= fValue && counter_value <= lValue ) {
            setTimeout( function() {
              counterInit( fValue, lValue, counter_value=counter_value );
            }, 10-(vm.val/100) );
          }
        }
        counterInit( 0, vm.val );
      });
    }
  }
</script>
