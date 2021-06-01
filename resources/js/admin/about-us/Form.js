import AppForm from '../app-components/Form/AppForm';

Vue.component('banner-about-us-form', {
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

Vue.component('section1-about-us-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                title:  '' ,
                subtitle:  '' ,
            },
            mediaCollections: ['gallery'],
        }
    },
});

Vue.component('section2-about-us-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                title:  '' ,
                subtitle:  '' ,
            },
        }
    },
});