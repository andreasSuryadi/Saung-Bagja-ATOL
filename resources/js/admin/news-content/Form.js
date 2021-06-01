import AppForm from '../app-components/Form/AppForm';

Vue.component('banner-news-form', {
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