import AppForm from '../app-components/Form/AppForm';

Vue.component('news-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                title:  '' ,
                type:  '' ,
                description:  '' ,
                published_at:  '' ,
                
            }
        }
    }

});