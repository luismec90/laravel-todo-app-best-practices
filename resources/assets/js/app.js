new Vue({
    el: '#app',

    data: {
        count: 0
    },


    methods: {
        updateCount: function () {
            this.count += 1;
        }
    }

});