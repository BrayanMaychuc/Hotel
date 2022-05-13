
        cubiertosT='http://localhost/Hotel/public/cubierto';
    
    new Vue({
        http: {
            headers:{
                'X-CSRF-TOKEN': document.querySelector('#token').getAttribute('value')
            }
        },
        el:'#cubiertosTuul',
        data:{
            cubiertos:[],
            id_cubierto:'',
            nombre:'',
            existencia:'',
            total:'',
            observacion:''

        },
        created:function(){
            this.listCubierto();
        },
        methods:{

            listCubierto:function(){
                this.$http.get(cubiertosT).then(function(j){
                    this.cubiertos=j.data;
                })
            },

        }
    })