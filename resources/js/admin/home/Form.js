import AppForm from '../app-components/Form/AppForm';

Vue.component('banner-home-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                title:  '' ,
                subtitle:  '' ,
                button:  '' ,
            },
            mediaCollections: ['banner'],
        }
    },
});

Vue.component('about-us-home-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                title:  '' ,
                description:  '' ,
                button:  '' ,
            },
            mediaCollections: ['gallery'],
        }
    },
});

Vue.component('menu-home-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                title:  '' ,
            },
        }
    },
});