function init(){

    var apiBlancosTuul = 'http://localhost/Hotel/public/BlancosTuul';
    var DatosEncargado ='http://localhost/Hotel/public/Datos';
    new Vue({
        http: {
            headers:{
                'X-CSRF-TOKEN': document.querySelector('#token').getAttribute('value')
            }
        },
        el:'#apiTuulInv',

        data:{
            blancosTuul:[],
            id_blancos3:'',
            descripcion:'',
            marca:'',
            unidad:'',
            stock:'',
            piso:'',
            surtido:'',
            total:'',
            observaciones:'',
            DatosEncargado:[],
            folio:'',
            elaborado:'',
            fecha_elaboracion:'',
            agregando:true,
        },
        created:function(){
            this.getInv();
        },
        methods:{
            getInv:function(){
                this.$http.get(apiBlancosTuul).then(function(j){
                    this.blancosTuul=j.data;
                });
            },
            getDatos:function(){
                this.$http.get(DatosEncargado).then(function(j){
                   this.DatosEncargado=j.data;
                })
            },
            showListInv:function(){
                $('#modalListInventario').modal('show');
            },
            showModal:function(){
                $('#modalInventarioTuul').modal('show');
            },
            newInventary:function(){
                
                var inventario={
                    id_blancos3:this.id_blancos3,
                    descripcion:this.descripcion,
                    marca:this.marca,
                    unidad:this.unidad,
                    stock:this.stock,
                    piso:this.piso,
                    surtido:this.surtido,
                    total:this.total,
                    observaciones:this.observaciones
                    }    
                    this.$http.post(apiBlancosTuul, inventario).then(function(j){
                        this.getInv();
                        this.descripcion="",
                        this.marca="",
                        this.unidad="",
                        this.stock="",
                        this.piso="",
                        this.surtido="",
                        this.total="",
                        this.observaciones=""
                        // this.blancosTuul.push(inventario);
                        $('#modalInventarioTuul').modal('hide');
                        
                    });
                    
            },

            saveName:function(){
                var datos={
                    folio:this.folio,
                    elaborado:this.elaborado,
                    fecha_elaboracion:this.fecha_elaboracion
                }
                this.$http.post(DatosEncargado, datos).then(function(j){
                    this.folio="",
                    this.elaborado="",
                    this.fecha_elaboracion=""
                });
                
            },

            editarProductos:function(id){
                this.agregando=false;
                this.id_blancos3=id; 
                this.$http.get(apiBlancosTuul + '/' + id).then(function(j){
                    this.getInv();
                    this.id_blancos3=j.data.id_blancos3,
                    this.descripcion=j.data.descripcion,
                    this.marca=j.data.marca,
                    this.unidad=j.data.unidad,
                    this.stock=j.data.stock,
                    this.piso=j.data.piso,
                    this.surtido=j.data.surtido,
                    this.total=j.data.total,
                    this.observaciones=j.data.observaciones
                    
                });
                $('#modalInventarioTuul').modal('show');
            },
            updateData:function(){
                var update={
                    id_blancos3:this.id_blancos3,
                    descripcion:this.descripcion,
                    marca:this.marca,
                    unidad:this.unidad,
                    stock:this.stock,
                    piso:this.piso,
                    surtido:this.surtido,
                    total:this.total,
                    observaciones:this.observaciones
                }
                this.$http.patch(apiBlancosTuul + '/' + this.id_blancos3,update).then(function(j){
                    this.getInv();
                });
                $('#modalInventarioTuul').modal('show');
            }
        }
    })
}window.onload=init;