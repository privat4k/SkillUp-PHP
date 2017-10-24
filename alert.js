'use strict'



function ask() {
    var day;

    day = prompt('Kakoi den nedeli(ot 1 do 7)?');

    switch (day) {
        case '1':alert('Vihodnie konchilis');break;
        case '2':
        case '3':
        case '4':alert('Segodnya na rabotu');break;
        case '5':alert('Skoro vihodnie');break;
        case '6':
        case '7':alert('Ura, otdihaem!');break;
        default:

            alert('Bud vnimatelnee!');
            ask();

    }
}

ask();
alert('Molodec!');
