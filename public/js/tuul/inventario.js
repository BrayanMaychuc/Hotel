
function init(){

    apiProductos='http://localhost/Hotel/public/prod';
    apiSalidas='http://localhost/Hotel/public/sali';
    apiEncargados='http://localhost/Hotel/public/encargado';
    apiEntradas='http://localhost/Hotel/public/entradas';

    new Vue ({
        http: {
            headers:{
                'X-CSRF-TOKEN': document.querySelector('#token').getAttribute('value')
            }
        },
        el:'#inventarios',
        data:{
            productos:[],
            id_producto:'',
            nombre:'',
            unidad:'',
            cantidad:'',
            salidas:[],
            id:'',
            producto:'',
            cantidad:'',
            restante:'',
            fecha:'',
            id_encargado:'',
            observacion:'',
            encargados:[],
            id_encargado:'',
            nombre:'',
            cargo:'',
            entradas:[],
            id_entrada:'',
            fecha:'',
            descripcion:'',
            unidad:'',
            cantidad:'',
            observacion:'',
        },
        created:function(){
            this.getDatos();
            this.getEncargados();
            this.getProductos();
            this.getEntrada();
        },
        methods:{
            getDatos:function(){
                this.$http.get(apiSalidas).then(function(j){
                    this.salidas=j.data;
                });
            },
            getEncargados:function(){
                this.$http.get(apiEncargados).then(function(j){
                    this.encargados=j.data;
                })
            },
            getProductos:function(){
                this.$http.get(apiProductos).then(function(j){
                    this.productos=j.data;
                })
            },
            getEntrada:function(){
                this.$http.get(apiEntradas).then(function(j){
                    this.entradas=j.data;
                })
            },
            guardarSalida:function(){
                var salida={
                    id:this.id,
                    producto:this.producto,
                    cantidad:this.cantidad,
                    restante:this.restante,
                    fecha:this.fecha,
                    id_encargado:this.id_encargado,
                    observacion:this.observacion
                }
                this.$http.post(apiSalidas, salida).then(function(j){                    
                    this.id="",
                    this.producto="",
                    this.cantidad="",
                    this.restante="",
                    this.fecha="",
                    this.id_encargado="",
                    this.observacion="";
                    
                    console.log(j);
                })
            },
            
            guardar:function(){
                var producto={
                    id_producto:this.id_producto,
                    nombre:this.nombre,
                    unidad:this.unidad,
                    cantidad:this.cantidad
                }
                this.$http.post(apiProductos, producto).then(function(j){
                    this.id_producto="";
                    this.nombre="";
                    this.unidad="";
                    this.cantidad="";
                })
                
            },

            

        }
    })

}window.onload=init;