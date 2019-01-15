new Vue({
    el: '#vueCounter',
    data: {
        chargingstation : {
                 start: 0,
                 end: 20

               },
        broadcasting : {
                start: 0,
                end: 140620
        },
        happyClient : {
                start: 0,
                end: 1125
        },
        artAccessories : {
                start: 0,
                end: 5000
        },
        display: {
            chargingstation: 0,
            broadcasting: 0,
            happyClient: 0,
            artAccessories:0
        },
        divider: 20
    },
    methods: {
        count: function() {
            for (i=0; i<this.divider; i++) {
                setTimeout (function() {
                    this.display.chargingstation += this.chargingstation.end/this.divider;
                    this.display.broadcasting += this.broadcasting.end/this.divider;
                    this.display.happyClient += this.happyClient.end/this.divider;
                    this.display.artAccessories += this.artAccessories.end/this.divider;
                }.bind(this),150);    
            }
        }
    }
  });

