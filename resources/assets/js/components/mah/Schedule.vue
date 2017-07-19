<template>
    <div class="container">
        <h1>Horario Docente</h1>
        <hr>
        <table class="table table-bordered table-striped responsive-utilities">
            <tbody>
            <tr>
                <th class="center">lunes</th>
                <th class="center">Martes</th>
                <th class="center">Miercoles</th>
                <th class="center">Jueves</th>
                <th class="center">Viernes</th>
                <th class="center">Sabado</th>
                <th class="center" rowspan="19">Domingo</th>
            </tr>
            <tr v-for="espacio of espacios">
                <td v-for="hora of horario">
                    <bloque :horario="hora.dia"
                            :espacios="espacio.bloque"
                            :estado="estado"
                    ></bloque>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    import Bloque from './Block.vue'

    export default {
        components: {
            Bloque
        },
        data() {
            return {
                estado: false,
                horario: [
                    {dia: 'lunes'},
                    {dia: 'martes'},
                    {dia: 'miercoles'},
                    {dia: 'jueves'},
                    {dia: 'viernes'},
                    {dia: 'sabado'}
                ],
                espacios: [
                    {bloque: 'Bloque 1'}, {bloque: 'Bloque 2'}, {bloque: 'Bloque 3'},
                    {bloque: 'Bloque 4'}, {bloque: 'Bloque 5'}, {bloque: 'Bloque 6'},
                    {bloque: 'Bloque 7'}, {bloque: 'Bloque 8'}, {bloque: 'Bloque 9'},
                    {bloque: 'Bloque 10'}, {bloque: 'Bloque 11'}, {bloque: 'Bloque 12'},
                    {bloque: 'Bloque 13'}, {bloque: 'Bloque 14'}, {bloque: 'Bloque 15'},
                    {bloque: 'Bloque 16'}, {bloque: 'Bloque 17'}, {bloque: 'Bloque 18'}
                ]
            }
        }
    }
</script>
