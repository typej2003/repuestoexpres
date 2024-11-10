// script.js

        // To access the stars
        // let stars = 
            // document.getElementsByClassName("star");
        
        //Seleccionas todos los elementos con clase test
        // var divs = document.getElementsByClassName("star");
            
        //     //Recorres la lista de elementos seleccionados
        //     for (var i=0; i< divs.length; i++) {
        //         //Añades un evento a cada elemento
        //         divs[i].addEventListener("click",function() {
        //         //Aquí la función que se ejecutará cuando se dispare el evento
        //         //alert(this.innerHTML); //En este caso alertaremos el texto del cliqueado
        //         alert(this.data('star'))
        //         });
        //     }
        
            // document.querySelectorAll('.star').forEach( elem => {
            //     elem.addEventListener('click', e => {
            //         console.log(e.target.dataset.product);
            //         console.log(e.target.dataset.star);
            //         gfg(e, e.target.dataset.star)
            //     });
            // });

            document.querySelectorAll('.star').forEach( elem => {
                elem.addEventListener('click', function(elem, e) {
                    // console.log(elem);
                    gfg(elem)
                });
            });

        // Funtion to update rating
        // function gfg(e, n) {
        function gfg(elem) {
            // console.log(elem.srcElement.attributes.product);
            // console.log(elem.srcElement.attributes.star);
            let pE = elem.srcElement.attributes.product
            let p = pE.value
            // console.log(p.value)
            let nE = elem.srcElement.attributes.star
            let n = nE.value
            let container = document.querySelectorAll(`span[product='${p}']`);
            console.log(container)
            if(p==5)
            {
                console.log(container)
            }

            // let container = document.querySelector(".star");

            remove(container);
            for (let i = 0; i < n; i++) {
                // console.log(i)
                if (n == 1) cls = "one";
                else if (n == 2) cls = "two";
                else if (n == 3) cls = "three";
                else if (n == 4) cls = "four";
                else if (n == 5) cls = "five";
                // stars[i].className = "star " + cls;
                
                container[i].className = "star " + cls;
            }
            let output = document.querySelector(`h5[output='${p}']`);
            output.innerText = "Valoracion: " + n + "/5";
        }

        // To remove the pre-applied styling
        function remove(container) {
            let i = 0;
            while (i < 5) {
                container[i].className = "star";
                i++;
            }
        }