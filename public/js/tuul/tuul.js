function init(){

        var apiInventario='http://localhost/Hotel/public/diario';

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
        agregando:true,
        editando:false
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
        
        guardarLista:function(){
            var elemento={
                folio:this.folio,
                lugar:this.lugar,
                producto:this.producto,
                unidad:this.unidad,
                cantidad:this.cantidad
            };
            this.$http.post(apiInventario, elemento).then(function(j){
                    this.todoLista();
                    this.folio="",
                    this.lugar="",
                    this.producto="",
                    this.unidad="",
                    this.cantidad="";
                    // console.log(j);
                // ESCONDEMOS LA VENTANA MODAL
                $('#modalEditar').modal('hide');
                this.diarios.push(elemento);
                console.log(elemento, j); 
            });
                
            
        },
        editarLista:function(id){
            this.agregando=false;
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

        deleteProduct:function(id) {

            Swal.fire({
                title: 'Estas seguro?',
                text: "No podras recuperarlo despues!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, Eliminalo!'
              }).then((result) => {
                if (result.isConfirmed) {
                    this.$http.delete(apiInventario + '/' + id).then(function(j){
                        this.todoLista();
                    });
                  Swal.fire(
                    'Deleted!',
                    'El producto se elemino correctamente',
                    'success'
                  )
                }
              })
            
        },

        mostrarModal:function(){
            this.agregando=true;
            $('#modalEditar').modal('show');
        },

        actualizarDatos:function(){
            var up={
                folio:this.folio,
                lugar:this.lugar,
                producto:this.producto,
                unidad:this.unidad,
                cantidad:this.cantidad
            }
            this.$http.patch(apiInventario + '/' + this.folio, up).then(function(j){
                this.todoLista();
                    this.folio="",
                    this.lugar="",
                    this.producto="",
                    this.unidad="",
                    this.cantidad="";
                console.log(j);
            });
            $('#modalEditar').modal('hide');
        }
    }
    
})
}window.onload=init;