import Echo from "laravel-echo"

window.Pusher = require('pusher-js');

let yourTokenLogin = $('meta[name="csrf-token"]').attr('content');


window.Echo = new Echo({
    broadcaster: 'pusher',
    key: 'ABCDEFG',
    wsHost: '127.0.0.1',
    wsPort: '6001',
    wssPort: '6001',
    forceTLS: false,
    disableStats: false,
    //enabledTransports: ['ws', 'wss'],
    //wsPath: '/laravel_websocket_sample/public'
    /*authEndpoint: 'http://localhost/laravel_websocket_sample/public/broadcasting/auth',
    encrypted: true,
    auth: {
        headers: {
            Authorization: 'Bearer ' + yourTokenLogin
        },
    }*/
});

window.Echo.channel('trades')
    .listen('NewTrade', (e) => {
        console.log(e.trade);
    })