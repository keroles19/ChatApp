require('./bootstrap');
import VueChatScroll from 'vue-chat-scroll'
require('font-awesome/css/font-awesome.min.css');
window.Vue = require('vue');
Vue.use(VueChatScroll)

Vue.component('user-component', require('./components/UserComponent.vue').default);
Vue.component('message-component', require('./components/MessageComponent.vue').default);

const app = new Vue({
    el: '#app',
    data: {
        'message': '',
        'chat': {
            'message': [],
            'type': [],
        }
    }

    ,
    methods: {
        send() {
            if (this.message.length != 0) {
                axios.post('send', {
                    message: this.message
                }).then(response => {
                     this.chat.message.push(this.message);
                    this.chat.type.push('send')
                    this.message='';
                    }).catch(error => {
                    console.log(error)
                })

            }
        },

    },
    watch :{
      message(){
          Echo.private('chat');
      }
    },
    mounted() {
        Echo.private('chat').listen('ChatEvent', (e) => {
            this.chat.message.push(e.message);
            this.chat.type.push('receive');

        })
    }
});
