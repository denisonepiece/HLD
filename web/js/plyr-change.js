// const  player  =  new  Plyr ( ' #portfolio-player ' , {
//      autoplay: true,
//      // Default controls
//     controls: [
//         'play-large',
//         // 'restart',
//         // 'rewind',
//         //'play',
//         // 'fast-forward',
//         //'progress',
//         //'current-time',
//         //'mute',
//         //'volume',
//         //'captions',
//         //'settings',
//         //'pip',
//         //'airplay',
//         // 'download',
//         //'fullscreen',
//     ],
//
//         // Set loops
//     loop: {
//         active: true,
//         // start: null,
//         // end: null,
//     },
// });

const players = Array.from(document.querySelectorAll('.js-player')).map(p => new Plyr(p, {
    autoplay: true,
    // Default controls
    controls: [
        'play-large',
        // 'restart',
        // 'rewind',
        //'play',
        // 'fast-forward',
        //'progress',
        //'current-time',
        //'mute',
        //'volume',
        //'captions',
        //'settings',
        //'pip',
        //'airplay',
        // 'download',
        //'fullscreen',
    ],

    // Set loops
    loop: {
        active: true,
        // start: null,
        // end: null,

    }}));

//Document - https://github.com/sampotts/plyr