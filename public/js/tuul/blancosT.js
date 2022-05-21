function init(){
    blancosTuul='http://localhost/Hotel/public/blancoT';

    new Vue({
        http: {
            headers:{
                'X-CSRF-TOKEN': document.querySelector('#token').getAttribute('value')
            }
        },
        el:'#blancosTuul',

        data:{
            blancosT:[],
            id_blanco:'',
            descripcion:'',
            marca:'',
            unidad:'',
            stock:'',
            piso:'',
            surtido:'',
            total:'',
            observaciones:'',
            editando:0,
        }, 
        created:function(){
            this.listBlanco();
        },
        methods:{

            listBlanco:function(){
                this.$http.get(blancosTuul).then(function(j){
                    this.blancosT=j.data;
                })
            },
            ventana:function(){
                $('#modalTuul').modal('show');
            },
            agregarBlanco:function(){
                var blanco={
                    id_blanco:this.blanco,
                    descripcion:this.descripcion,
                    marca:this.marca,
                    unidad:this.unidad,
                    stock:this.stock,
                    piso:this.piso,
                    surtido:this.surtido,
                    total:this.total,
                    observaciones:this.observaciones
                }
                this.$http.post(blancosTuul, blanco).then(function(j){
                    this.listBlanco();
                    id_blanco="",
                    descripcion="",
                    marca="",
                    unidad="",
                    stock="",
                    piso="",
                    surtido=""
                    total="",
                    observaciones=""
                    console.log(j);

                    $('#modalTuul').modal('hide');
                })
            },
            eliminarBlanco:function(id){

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
                        this.$http.delete(blancosTuul + '/' + id).then(function(j){
                        this.listBlanco();
                    });
                Swal.fire(
                    'Deleted!',
                    'El producto se elemino correctamente',
                    'success'
                  )
                }
              })
            },
            editarBlancos:function(id){

                this.editando=1
                this.id_blanco=id;
                this.$http.get(blancosTuul + '/' + id).then(function(j){

                    this.descripcion=j.data.descripcion,
                    this.marca=j.data.marca,
                    this.unidad=j.data.unidad,
                    this.stock=j.data.stock,
                    this.piso=j.data.piso,
                    this.surtido=j.data.surtido,
                    this.total=j.data.total,
                    this.observaciones=j.data.observaciones;

                    $('#modalTuul').modal('show');
                })
            },
            actualizar:function(){

                var blanco2={
                    id_blanco:this.id_blanco,
                    descripcion:this.descripcion,
                    marca:this.marca,
                    unidad:this.unidad,
                    stock:this.stock,
                    piso:this.piso,
                    surtido:this.surtido,
                    total:this.total,
                    observaciones:this.observaciones
                }
                this.$http.patch(blancosTuul + '/' + this.id_blanco, blanco2).then(function(j){
                    this.listBlanco();
                    id_blanco="",
                    descripcion="",
                    marca="",
                    unidad="",
                    stock="",
                    piso="",
                    surtido=""
                    total="",
                    observaciones=""

                    $('#modalTuul').modal('hide');
                });
            },
            
            
        }
    })
}window.onload=init;