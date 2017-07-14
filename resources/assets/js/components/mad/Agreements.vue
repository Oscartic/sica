<template>
<div>
    <form>
        <h4>Asignar nuevo Acuerdo</h4>
        <div class="form-group">
            <input type="text"
                   id="nombre"
                   class="form-control"
                   placeholder="acuerdo"
                   v-model="acuerdoNuevo">
        </div>
        <div class="form-group">
            <textarea id="descripcion"
                      class="form-control"
                      placeholder="Agregar una descripción del acuerdo"
                      v-model="descNueva"></textarea>
        </div>

        <button type="submit"
                class="btn btn-primary"
                @click.prevent="agregarAcuerdo">Registrar acuerdo</button>
    </form>
    <hr>
    <h4>Acuerdos registrados</h4>
    <div class="list-group" v-for="(acuerdo, indice) of acuerdos">
        <strong class="list-group-item-heading">{{ acuerdo.nombre }}</strong>
        <p class="list-group-item-text">{{ acuerdo.descripcion}}</p>
        <span class="pull-right">
            <a @click="eliminarAcuerdo">Borrar</a>
        </span>
        <hr>
    </div>
</div>
</template>
<script>
    export default {
        props: ['acuerdos'],
        data(){
            return {
                acuerdoNuevo: '',
                descNueva: ''
            }
        },
        methods: {
            agregarAcuerdo(){
                var acuerdo = this.acuerdoNuevo.trim();
                var descr = this.descNueva.trim();
                if(acuerdo.length <= 1) return alert('El nombre del acuerdo no puede estar vacio!');
                if(descr.length <= 1) return alert('La descripción del acuerdo no puede estar vacia!');
                if(acuerdo && descr){
                    this.acuerdos.push({
                        nombre: acuerdo,
                        descripcion: descr
                    });
                }
                console.log('acuerdos');
            },
            eliminarAcuerdo(indice){
                this.acuerdos.splice(indice,1);
            }
        }
    }
</script>