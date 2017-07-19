<template>
<div>
    <form>
        <h4>Asignar nuevo Acuerdo</h4>

        <input type="hidden" id="profesor" name="profesor" :value="acordado.professor_id">

        <div class="form-group">
            <input type="text"
                   id="nombre"
                   class="form-control"
                   placeholder="acuerdo"
                   v-model="acordado.nombre">
        </div>
        <div class="form-group">
            <textarea id="descripcion"
                      class="form-control"
                      placeholder="Agregar una descripción del acuerdo"
                      v-model="acordado.descripcion"></textarea>
        </div>
        <button type="submit"
                class="btn btn-primary"
                @click.prevent="agregarAcuerdo">Registrar acuerdo</button>
    </form>
    <hr>
    <h4>Acuerdos registrados</h4>
    <div v-if="acuerdos.length > 0">
        <div class="list-group" v-for="(acuerdo, indice) of acuerdos">
            <strong class="list-group-item-heading">{{ acuerdo.nombre }}</strong>
            <p class="list-group-item-text">{{ acuerdo.descripcion}}</p>
            <span class="pull-right">
                <a v-on:click="eliminarAcuerdo(acuerdo.id)">Borrar</a>
            </span>
            <hr>
        </div>
    </div>

    <div v-else>
        <div class="list-group">
            <strong class="list-group-item-heading"> <span class="glyphicon glyphicon-comment"></span> Sin Registro</strong>
            <p class="list-group-item-text">No hay registros de acuerdos con el Docente.</p>
            <hr>
        </div>
    </div>
</div>
</template>
<script>
    import API from '../../services/api_agreement'
    export default {
        props: ['id_profe'],
        data(){
            return {
                id_: this.id_profe,
                acordado: {
                    profesor: this.id_profe,
                    nombre: '',
                    descripcion: ''
                },
                acuerdosTodos: [],
                acuerdos: []
            }
        },
        mounted() {
            this.fetchAcuerdos();
        },
        methods: {
            fetchAcuerdos(){
                API.resource(this).get().then(response => {
                    this.acuerdosTodos = response.data;
                    var val = parseInt(this.id_);
                    this.acuerdos = this.acuerdosTodos.filter(c => c.professor_id === val);
                })
            },
            agregarAcuerdo(){
                var acuerdo = this.acordado.nombre.trim();
                var descr = this.acordado.descripcion.trim();
                if(acuerdo.length <= 1) return alert('El nombre del acuerdo no puede estar vacio!');
                if(descr.length <= 1) return alert('La  descripción del acuerdo no puede estar vacia!');
                if(acuerdo && descr){
                    API.resource(this).save(this.acordado).then(response => {
                        this.acuerdos.push(response.data);
                        this.acordado = {
                            profesor: this.id_profe,
                            nombre: '',
                            descripcion: ''
                        }
                    })
                }
            },
            eliminarAcuerdo(id){
                API.resource(this).delete({id: id}).then(response => {
                    this.fetchAcuerdos();
                })
            },
            retornarId(){
                return this.id_profe
            }
        }
    }
</script>