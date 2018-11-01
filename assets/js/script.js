

let header = new Vue({
  el: '#header',
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

let footer = new Vue({
  el: '#footer',
  data:{

  },
  methods:{

  }
})

let home = new Vue({
  el: '#home',
  data:{

  },
  methods:{
    ativar: function(item){
        header.makeActive(item);

    }
  }
})

let paciente = new Vue({
  el: '#paciente',
  data:{

  },
  methods:{
      ativar: function(item){
          header.makeActive(item);

      }
  }
})

let medico = new Vue({
  el: '#medico',
  data:{

  },
  methods:{
      ativar: function(item){
          header.makeActive(item);

      }
  }
})

let convenio = new Vue({
  el: '#convenio',
  data:{

  },
  methods:{
      ativar: function(item){
          header.makeActive(item);

      }
  }
})
