
    blancosTuul='';

    new Vue({
        http: {
            headers:{
                'X-CSRF-TOKEN': document.querySelector('#token').getAttribute('value')
            }
        },
        el:'#blancosTuul',

        data:{
            blancosT:[],
            id_blanco:'',
            descripcion:'',
            marca:'',
            unidad:'',
            stock:'',
            piso:'',
            surtido:'',
            total:'',
            observaciones:''
        }, 
        created:function(){
            this.listBlanco();
        },
        methods:{

            listBlanco:function(){
                this.$http.get(blancosTuul).then(function(j){
                    this.blancosT=j.data;
                })
            },
        }
    })