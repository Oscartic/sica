const API_URL = 'http://sicapp2.dev/tareas';

export default {
    resource(context) {
        return context.$resource(API_URL + '{/id}');
    }
}
