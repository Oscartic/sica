<template>
    <div class="container">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Cursos y capacitaciones</h3>
                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th width="22%">Curso</th>
                        <th>Descripción</th>
                        <th width="10%">Año</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-bind="cursos" v-for="curso of cursos">
                        <td>{{ curso.nombre }}</td>
                        <td>{{ curso.descripcion }}</td>
                        <td>{{ curso.annio }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Gestión Docente</h3>
                </div>
                <div class="panel-body">
                    <div class="col-md-6">
                        <task v-bind:tareas="tareas"></task>
                    </div>
                    <div class="col-md-6">
                        <agreements v-bind:acuerdos="acuerdos"></agreements>
                    </div>
                </div>
            </div>
        </div>

    </div>

</template>

<script>
    import Task from './Task.vue'
    import Agreements from './Agreements.vue'

    export default {
        components: {
            task: Task,
            agreements: Agreements
        },
        name: 'app',
        data () {
            return {
                cursos: [
                    {
                        nombre: 'Lenguaje y comunicación',
                        descripcion: 'Perfeccionamiento de la comunicación oral en la práctica docente.',
                        annio: '2015'
                    },
                    {
                        nombre: 'Competencias Directivas',
                        descripcion: 'Reforzar las habilidades y competencias que permiten lograr un desempeño efectivo en la función directiva, considerando los actuales desafíos que enfrenta laeducación superior',
                        annio: '2016'
                    }
                ],
                tareas: [
                    {
                        tarea: 'Recuperación de clases',
                        tipo: 'Académica',
                        estado: false,
                        created_at: '04,02,2017'
                    },
                    {
                        tarea: 'Recibir equipos de sala',
                        tipo: 'Administrativa',
                        estado: false,
                        created_at: '13,05,2017'
                    },
                    {
                        tarea: 'Dirigir "los genios nunca duermen"',
                        tipo: 'Extracurricular',
                        estado: false,
                        created_at: '23,06,2017'
                    },

                ],
                acuerdos: [
                    {
                        nombre: 'Compromiso de puntualidad',
                        descripcion: 'El docente se compromete en llegar a la hora de inicio de clases y evitar los constantes retrasos que ha presentado en sus ramos.'
                    }
                ]
            }
        }
    }
</script>
