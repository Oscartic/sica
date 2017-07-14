<template>
    <div>
        <h4>Asignar nueva tarea</h4>

        <div class="form-group">
            <label>Tipo de tarea</label>
            <select class="form-control" v-model="tipo" >
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
                   v-model="nuevaTarea"
                   class="form-control"
                   v-on:keyup.enter="agregarTarea">
        </div>
        <hr>
        <h4>Tareas Registradas</h4>
        <ul class="list-group">
            <li v-for="(tarea, indice) of tareas"
                class="list-group-item">
                <span v-bind:class="{terminada : tarea.estado}">{{ tarea.tarea }} | {{ tarea.tipo }}</span> | <small>{{ tarea.created_at }}</small>
                <br>
                <small>Estado:</i></small>
                <span class="label label-success" v-if="tarea.estado">Realizada</span>
                <span class="label label-warning" v-else>Pendiente</span>
                <span class="pull-right">
                    <button type="button" class="btn btn-success btn-xs glyphicon glyphicon-ok"
                            v-on:click="tarea.estado = !tarea.estado">
                    </button>

                    <button type="button" class="btn btn-danger btn-xs glyphicon glyphicon-remove"
                            v-on:click="borrar(indice)">
                    </button>
                </span>
            </li>
        </ul>
    </div>
</template>
<script>
export default {
    props: ['tareas'],
    data(){
        return {
            nuevaTarea: '',
            tipo: ''
        }
    },
    methods: {
        agregarTarea(){
            var texto = this.nuevaTarea = this.nuevaTarea.trim();
            var tipo = this.tipo;
            if(this.tipo.length <= 1) return alert("¡Seleccione el tipo de tarea!");
            if(this.nuevaTarea.length <= 1) return alert("¡La tarea no puede estar vacía!");
            if(texto){
                this.tareas.push({
                    tarea: texto,
                    tipo: tipo,
                    estado: false
                });
            }
            this.nuevaTarea = '';
        },
        borrar(indice){
            this.tareas.splice(indice, 1);
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