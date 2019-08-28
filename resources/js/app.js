require('./bootstrap');

$('form').on('submit', function(){
    $(this).find('input[type=submit]').attr('disabled', true);
});

// Echo.channel('messages-channel')
//     .listen('MessageWasReceived', (data) => {
//         let message = data.message;
//         let html = `
//         <ul class="list-group">

//             @forelse ($messages as $message)
//                 <li class="list-group-item border-0 mb-3 shadow-sm">
//                     <a class="text-secondary d-flex justify-content-between align-items-center"
//                         href="/messages/${massage.id}"
//                         >
//                         <span class=" font-weight-bold"
//                             >
//                             ${ message.subject }
//                         </span>
//                         <span class="text-black-50"
//                             >

//                         </span>
//                     </a>
//                 </li>

//             @empty
//                 <li class="list-group-item border-0 mb-3 shadow-sm">No hay nada para mostrar</li>
//             @endforelse
//             {{ $message->links() }}
//         </ul>
//         `;

//         $(html).prependTo('ul');
//     });

window.Vue = require('vue');

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

const app = new Vue({
    el: '#app',
});
