<template>
    <div>
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

</template>

<script>

    export default {
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
                ]
            }
        }
    }
</script>
