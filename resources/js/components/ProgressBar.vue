<template>
    <div class="container-xxl skill-container mb-3">
        <div class="flex-space-between">
            <span class="white-txt">{{this.skill}}</span>
            <span class="white-txt">{{this.prog}}%</span>
        </div>
        <div class="counter" :class="counterClass" style="display: none">0</div>
        <div class="progressbar" :class="progressbarClass">
          <span class="progress" :class="progressClass"></span>
        </div>
    </div>
</template>

<script>
    export default {

        data() {
            return {
                counterClass: (Math.random() + 1).toString(36).substring(7),
                progressbarClass: (Math.random() + 1).toString(36).substring(7),
                progressClass: (Math.random() + 1).toString(36).substring(7),
                prog: -1
            }
        },

        props: {
            val: Number,
            delay: Number,
            skill: String
        },
        mounted() {

            let vm = this;
            $(document).ready(function() {

              var progress = $('.'+vm.progressbarClass+ ' .'+vm.progressClass)

              function counterInit( fValue, lValue ) {

                var counter_value = parseInt( $('.'+vm.counterClass).text() );
                counter_value++;
                vm.prog += 1;
                if( counter_value >= fValue && counter_value <= lValue ) {

                  $('.'+vm.counterClass).text( counter_value + '%' );
                  progress.css({ 'width': counter_value + '%' });

                  setTimeout( function() {
                    counterInit( fValue, lValue );
                  }, 10-(vm.val/100) );


                }

              }
              counterInit( 0, vm.val );

            });

 


        }
    }
</script>


<style scoped>
    .skill-container {
        font-size: 0.775rem!important;
    }
    .progressbar {
      position: relative;

      width: 100%;
      margin: 10px auto 0;
      height: 5px;
      background: rgba(39, 69, 69,0.9);
      overflow: hidden;
    }

    span.progress {
      position: absolute;
      left: 0;
      top: 0;
      bottom: 0;
      width: 0;
      background: rgba(251, 191, 36,0.9);
      transition: all 0.01s;
      height:5px;
    }

    div.counter {
        height:0px!important;
    }

</style>