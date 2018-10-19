let app = new Vue({
    el: '#app',
    data: {
        msg: 'Olá Vue!',
        active: 'home'
    },
    methods: {
        makeActive: function(item){
            this.active = item;
        }
    }
})