
        BlancosT='http://localhost/Hotel/public/blanco'
    new Vue({
        http: {
            headers:{
                'X-CSRF-TOKEN': document.querySelector('#token').getAttribute('value')
            }
        },
        el:'#blancosTuul',
        data:{
            blancos:[],
            id_nuevo:'',
            descripcion:'',
            marca:'',
            unidad:'',
            surtido:'',
            total:'',
            observaciones:'',

        },
        created:function(){

        },
        
        methods:{
            listaBlancos:function(){
                this.$http.get(BlancosT).then(function(j){
                    this.blancos=j.data;
                })
            }
        }
    })