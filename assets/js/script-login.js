let login = new Vue({
    el: '#login',
    data: {
        email: null,
        senha: null,
        erremail: null,
        errsenha: null,
        erro: null,
    },
    methods: {
        validar: function(e){
            if (!this.email) {
                this.erremail="O e-mail deve ser preenchido!";
            }else if(!this.emailValido(this.email)) {
                this.erremail="Informe um E-mail válido!";
            }else{
                this.erremail = null;
            }
            if (!this.senha) {
                this.errsenha="A senha  deve ser preenchida";
            }else{
                this.errsenha = null;
            }
            if(this.errsenha == null && this.erremail == null){
                return true;
            }else{
                e.preventDefault();
            }

        },
        emailValido:function(email) {
            var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(email);
        },
        close:function(){
            this.erro = null;
        },
        addErro:function (er) {
            this.erro = er;
        }
    }
})
