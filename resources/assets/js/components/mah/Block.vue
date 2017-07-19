<template>
    <div v-bind="seleccion"
         class="bloque"
         v-on:click="estado = !estado">
        <p >{{ horario }} +
            {{ espacios }}</p>
        <small v-if="estado" class="estado_asig">Reservado</small>
        <small v-else class="estado_dis">disponible</small>
    </div>
</template>
<script>
    export default {
        props: ['horario','espacios', 'estado'],
        data(){
            return {
                eleccion: [
                    {
                        dia: '',
                        bloque: '',
                        disponible: ''
                    }
                ],
                seleccion: [
                    {
                        dia: this.horario,
                        bloque: this.espacios,
                        disponible: false
                    }
                ]
            }
        },
        methods: {
            marcarHora(){
                this.eleccion.push()
            }
        }

    }
</script>
<style>
    .bloque {
        max-width: 100%;
        border: 1px solid #f1f1f1;
        cursor: pointer;
        border-radius: 3px;
    }
    .bloque:hover {
        border: 1px solid #bbb;
        font-weight: 500;
    ;
    }
    .bloque p {
        text-align: center;
        margin: 5px 0;
        font-size: 0.8em;
    }
    .bloque small {
        text-align: center;
        display: block;
    }
    .estado_dis {
        color: #1ec116;
    }
    .estado_asig {
        color: #d9534f;
        font-weight: 500;
    }
    .disponible {
        background: #d7ffd7;
        color: #26ab26;
    }
    .asignado {
        background: #e8e8e8;
        color: #8a8a8a;
    }
</style>
