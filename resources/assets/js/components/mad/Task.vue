<template>
    <div>
        <h4>Asignar nueva tarea</h4>
        <form>
            <div class="form-group">
                <input type="hidden" name="profesor" :value="nuevaTarea.profesor">
                <label>Tipo de tarea</label>
                <select class="form-control" v-model="nuevaTarea.tipo" >
                    <option value="academica">Academica</option>
                    <option value="administrativa">Administrativa</option>
                    <option value="extracurricular">Extracurricular</option>
                </select>
            </div>

            <div class="input-group">
                <span class="input-group-btn">
                    <button type="button"
                            v-on:click="agregarTarea"
                            class="btn btn-primary">Agregar</button>
                </span>
                <input type="text"
                       placeholder="Agregar nueva tarea"
                       v-model="nuevaTarea.tarea"
                       class="form-control"
                       v-on:keyup.enter="agregarTarea">
            </div>
        </form>
        <hr>
        <h4>Tareas Registradas</h4>
        <ul class="list-group">
            <li v-for="(tarea, indice) of tareas"
                class="list-group-item">
                <span v-bind:class="{terminada : tarea.estado}">{{ tarea.tarea }} | {{ tarea.tipo }}</span> | <small>{{ tarea.created_at }}</small>
                <br>
                <small>Estado:</small>
                <span class="label label-success" v-if="tarea.estado">Realizada</span>
                <span class="label label-warning" v-else>Pendiente</span>
                <span class="pull-right">
                    <button type="button" class="btn btn-success btn-xs glyphicon glyphicon-ok"
                            v-on:click="actualizarTarea(tarea)">
                    </button>

                    <button type="button" class="btn btn-danger btn-xs glyphicon glyphicon-remove"
                            v-on:click="eliminarTarea(tarea.id)">
                    </button>
                </span>
            </li>
        </ul>
    </div>
</template>
<script>
import API from './../../services/api_task'
export default {
    props: ['id_profe'],
    data(){
        return {
            nuevaTarea: {
                profesor: this.id_profe,
                tarea: '',
                tipo: '',
                estado: false
            },
            tareasTodas:[],
            tareas:[]
        }
    },
    mounted(){
        this.fetchTareas();
    },
    methods: {
        fetchTareas(){
            API.resource(this).get().then(response => {
                this.tareasTodas = response.data;
                var val = parseInt(this.id_profe);
                this.tareas = this.tareasTodas.filter(c => c.professor_id === val);
            })
        },
        agregarTarea(){
            var texto = this.nuevaTarea.tarea.trim();
            var tipo = this.nuevaTarea.tipo;
            if(tipo.length <= 1) return alert("¡Seleccione el tipo de tarea!");
            if(texto.length <= 1) return alert("¡La tarea no puede estar vacía!");
            if(texto){

                API.resource(this).save(this.nuevaTarea).then(response => {
                    this.tareas.push(response.data);
                    this.nuevaTarea = {
                        profesor: this.id_profe,
                        tarea: '',
                        tipo: '',
                        estado: false
                    }
                })
            }
        },
        eliminarTarea(id){
            API.resource(this).delete({id: id}).then(response => {
                this.fetchTareas();
            })
        },
        actualizarTarea(tarea){
            API.resource(this).update({id: tarea.id}, tarea.estado = true).then( response => {
                console.log(response.data);
            })
        }
    }
}
</script>
<style>
    .terminada {
        color: gray;
        text-decoration: line-through;
    }
</style>