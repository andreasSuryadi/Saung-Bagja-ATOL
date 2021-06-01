import AppForm from '../app-components/Form/AppForm';

Vue.component('banner-menu-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                title:  '' ,
                subtitle:  '' ,
            },
            mediaCollections: ['banner'],
        }
    },
});