let app = new Vue({
    el: '#app',
    data: {
        msg: 'teste VueJs',
        active: 'painel'
    },
    methods: {
        makeActive: function(item){
            this.active = item;
        }
    }
})