
    apiInventario='http://localhost/Hotel/public/diario';

new Vue({
    // siempre añadir el token, de lo contrario los datos no van a llegar 
    http: {
        headers:{
            'X-CSRF-TOKEN': document.querySelector('#token').getAttribute('value')
        }
    },
    el:'#tuul',
    data:{
        diarios:[],
        folio:'',
        lugar:'',
        producto:'',
        unidad:'',
        cantidad:'',
    },

    created:function(){
        this.todoLista();
    },
    methods:{

        todoLista:function(){
            this.$http.get(apiInventario).then(function(j){
                this.diarios=j.data;
            })
        },
        editarLista:function(id){
            this.folio=id;
            this.$http.get(apiInventario + '/' + id).then(function(j){
                this.folio=j.data.folio;
                this.lugar=j.data.lugar;
                this.producto=j.data.producto;
                this.unidad=j.data.unidad;
                this.cantidad=j.data.cantidad;
                // console.log(j);
            });
            $('#modalEditar').modal('show');
        },

    }
})