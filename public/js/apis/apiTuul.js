function init(){

    var apiBlancos = 'http://localhost/Hotel/public/apiBlancos';
    new Vue ({
        http: {
            headers:{
                'X-CSRF-TOKEN': document.querySelector('#token').getAttribute('value')
            }
        },

        el:'#apiTuul',

        data:{
            blancos:[],
            id_blancoN:'',
            descripcion:'',
            marca:'',
            unidad:'',
            cantidad:'',
            surtido:'',
            total:'',
            fecha_entrada:'',

            find:'',

        },

        created:function(){
            this.getElements();
        },

        methods:{
            getElements:function(){
                this.$http.get(apiBlancos).then(function(j){
                    this.blancos=j.data;
                })
            },
            // Metodo para insertar los datos en la tabla
            addElements:function(){
                var add={
                    id_blancoN:this.id_blancoN,
                    descripcion:this.descripcion,
                    marca:this.marca,
                    unidad:this.unidad,
                    cantidad:this.cantidad,
                    surtido:this.surtido,
                    total:this.total,
                    fecha_entrada:this.fecha_entrada
                }
                this.$http.post(apiBlancos, add).then(function(j){
                    console.log(j);
                    this.blancos.push(add);
                });
                
                

            },

            showModal:function(){
                $('#modalInventario').modal('show');
            },
        }, 
        // FIN DEL METHODS
        computed:{
            findInv:function(){
                return this.blancos.filter((add)=>{
                    return add.fecha_entrada.toLowerCase().match(this.find.toLowerCase().trim());
                });
            },
        }
        
    });
}window.onload = init;