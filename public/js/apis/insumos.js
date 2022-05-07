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
            cantidad:''
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
            }
        }
    });




}window.onload=init;