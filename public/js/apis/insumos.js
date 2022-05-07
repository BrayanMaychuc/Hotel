function init(){
        
        var insumosT='http://localhost/Hotel/public/insumos'
    new Vue({
        http: {
            headers:{
                'X-CSRF-TOKEN': document.querySelector('#token').getAttribute('value')
            }
        },
        el:'#insumosTuul',
        data:{
            insumos:[],
            id_insumo:'',
            nombre:'',
            unidad:'',
            cantidad:'', 
        },
        created:function(){
            this.getInsumos();
        },
        methods:{
            getInsumos:function(){
                this.$http.get(insumosT).then(function(j){
                    this.insumos=j.data;
                });
            },
            modal:function(){
                $('#modalInsumos').modal('show');
            },
            nuevoInsumo:function(){
                var insumo1={
                    nombre:this.nombre,
                    unidad:this.unidad,
                    cantidad:this.cantidad
                }
                this.$http.post(insumosT, insumo1).then(function(j){
                    this.getInsumos();
                    nombre="",
                    unidad="",
                    cantidad=""
                });
                $('#modalInsumos').modal('hide');
            },
            editInsumos:function(id){
                this.id_insumo=id;
                this.$http.get(insumosT + '/' + id).then(function(j){
                    this.nombre=j.data.nombre;
                    this.unidad=j.data.unidad;
                    this.cantidad=j.data.cantidad;
                    console.log(j);
                });
                $('#modalInsumos').modal('show');
            },
            deleteInsumos:function(id){
                this.$http.delete(insumosT + '/' + id).then(function(j){
                    this.getInsumos();

                }).catch(function(j){
                    console.log(j);
                })
            }
        }
    });




}window.onload=init;