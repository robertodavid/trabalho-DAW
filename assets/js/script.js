let app = new Vue({
    el: '#app',
    data: {
        msg: 'teste VueJs',
        active: 'home'
    },
    methods:{
        makeActive: function(item){
            this.active = item;
        }
    }
})