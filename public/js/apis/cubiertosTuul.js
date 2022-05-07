function init(){

    var cubiertos='http://localhost/Hotel/public/cubiertosTuul';
    new Vue ({
        http: {
            headers:{
                'X-CSRF-TOKEN': document.querySelector('#token').getAttribute('value')
            }
        },
        el:'#cubiertosTuul',
        data:{
            cubiertos:[],
            id_tuul:'',
            descripcion:'',
            existencia:'',
            surtido:'',
            total:'', 
            status:'',
            observacion:'',
            fecha_elaboracion:''

        },
        created:function(){
            this.getCubiertos();
        },
        methods:{
            getCubiertos:function(){
                this.$http.get(cubiertos).then(function(j){
                    this.cubiertos=j.data;
                    console.log(j);
                });
            },

            nuevoCubierto:function(){
                var cubT={
                    descripcion:this.descripcion,
                    existencia:this.existencia,
                    surtido:this.surtido,
                    total:this.total,
                    status:this.status,
                    observacion:this.observacion,
                    fecha_elaboracion:this.fecha_elaboracion
                }
                
                this.$http.post(cubiertos, cubT).then(function(j){
                    console.log(j);
                    $('#modalCubiertoTuul').modal('hide');
                });
            },

            mostrarModal:function(){
                $('#modalCubiertoTuul').modal('show');
            }
        }
    })
}window.onload=init;