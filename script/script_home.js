var img = 1;

        var timer = setInterval(f, 2000);

            function f() {
                
                img += 1;
                
                document.getElementById('zoro_avance').src = 'images/' + 'zoro_' + img + '.png';

                if (img === 3) {
                    /*clearInterval(timer);*/
                    img = 0;
                }
            }
