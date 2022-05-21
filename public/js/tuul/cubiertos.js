function init(){
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
            observacion:'',
            editando:0

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

            showModal:function(){
                
                $('#modalCubierto').modal('show');
            },

            // INICIO DE GUARDAR
            guardarCubiertos:function(){
                var cubierto={
                    id_cubierto:this.id_cubierto,
                    nombre:this.nombre,
                    existencia:this.existencia,
                    total:this.total,
                    observacion:this.observacion
                }
                this.$http.post(cubiertosT, cubierto).then(function(j){
                    this.listCubierto();
                    this.id_cubierto="",
                    this.nombre="",
                    this.existencia="",
                    this.total="",
                    this.observacion=""

                    $('#modalCubierto').modal('hide');
                })
            }, //FIN DE GUARDAR

            // INICIO DE EDITAR
            editarCubiertos:function(id){
                this.editando=1;
                    this.id_cubierto=id;
                this.$http.get(cubiertosT + '/' + id).then(function(j){
                    
                    this.id_cubierto=j.data.id_cubierto,
                    this.nombre=j.data.nombre,
                    this.existencia=j.data.existencia,
                    this.total=j.data.total,
                    this.observacion=j.data.observacion;
                    $('#modalCubierto').modal('show');
                })

            }, //FIN DEL EDITAR

            // INICIO DEL METODO ACTUALIZAR
            actualizarCubierto:function(){
                var cubierto2={
                    id_cubierto:this.id_cubierto,
                    nombre:this.nombre,
                    existencia:this.existencia,
                    total:this.total,
                    observacion:this.observacion
                }

                this.$http.patch(cubiertosT + '/' + this.id_cubierto, cubierto2).then(function(j){
                    this.listCubierto();
                    this.nombre="",
                    this.existencia="",
                    this.total="",
                    this.observacion=""
                    $('#modalCubierto').modal('hide');
                });
            }, //FIN DE METODO ACTUALIZAR

            //INICIO DE METODO ELIMINAR
            eliminarCubiertos:function(id){

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
                    this.$http.delete(cubiertosT + '/' + id).then(function(j){
                        this.listCubierto();
                    });
                    Swal.fire(
                    'Deleted!',
                    'El producto se elemino correctamente',
                    'success'
                        )
                    }
                })
            }   //FIN DE METODO ELIMINAR

        }
    })
}window.onload=init;