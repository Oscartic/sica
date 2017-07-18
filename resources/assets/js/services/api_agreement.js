const API_URL = 'http://sicapp2.dev/acuerdos';

export default {
    resource(context) {
        return context.$resource(API_URL + '{/id}');
    }
}
