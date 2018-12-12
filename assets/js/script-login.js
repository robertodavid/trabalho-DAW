let login = new Vue({
    el: '#login',
    data: {
        email: null,
        senha: null,
        erremail: null,
        errsenha: null,
    },
    methods: {
        validar: function(){
            if (!this.email) {
                this.erremail="O e-mail deve ser preenchido!";
            }else if(!this.emailValido(this.email)) {
                this.erremail="Informe um E-mail válido!";
            }else{
                this.erremail = null;
            }
            if (!this.errsenha) {
                this.errsenha="A senha  deve ser preenchida";
            }else{
                this.errsenha = null;
            }
            if(!this.errsenha != null || !this.erremail != null){
                return true;
            }else{
                e.preventDefault();
            }

        },
        emailValido:function(email) {
            var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(email);
        }
    }
})
