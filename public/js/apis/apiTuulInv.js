function init(){

    var apiBlancosTuul = 'http://localhost/Hotel/public/BlancosTuul';
    new Vue({
        el:'#apiTuulInv',
        data:{
            blancosTuul:[],
            id_blanco3:'',
            folio:'',
            elaborado:'',
            fecha_elaboracion:'',
            descripcion:'',
            marca:'',
            unidad:'',
            stock:'',
            piso:'',
            surtido:'',
            total:'',
            observaciones:'',
        },
        created:function(){
            this.getInv();
        },
        methods:{
            getInv:function(){
                this.$http.get(apiBlancosTuul).then(function(j){
                    this.blancosTuul=j.data;
                    console.log(j);
                });
            },
            showListInv:function(){
                $('#modalListInventario').modal('show');
            },
            showModal:function(){
                $('#modalInventarioTuul').modal('show');
            },
        }
    })
}window.onload=init;